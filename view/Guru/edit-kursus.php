
<?php 
include_once 'view/main.php';
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-guru.php'; ?>
    <div class="flex flex-col my-10 w-full">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-3xl">Kursus, mu</h1>
            <p class="font-normal text-sm">Yuuk, isi kursusmu diform ini</p>
        </div>
        <div class="mr-10">
            <form action="<?= urlpath('list-kursus/edit-kursus?id=' . $courses[0]['course_id']) ?>" method="POST" id="editForm">
                <? var_dump($courses) ?>
                <div class=" flex max-w-6xl w-screen gap-2">
                    <div class="grid grid-cols-1 w-full gap-4">
                        <div class="flex flex-col gap-2">
                            <label for="title" class="font-semibold">Judul Kursusmu</label>
                            <input type="text" name="title" id="title" value="<?= $courses[0]['title']?>" class="border-2 border-black bg-transparent rounded-lg px-4 py-2" placeholder="Example : ReactJS - Frontend Developer" required>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="description" class="font-semibold">Deskripsi Kursusmu</label>
                            <input type="text" name="description" id="description" value="<?= $courses[0]['description']?>" placeholder="Example : Belajar tentang materi dasar dari ReactJS" class="border-2 border-black bg-transparent rounded-lg px-4 py-2" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-600 px-8 py-2 font-semibold text-primary rounded-xl hover:bg-blue-800">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('#editForm').on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                type : 'POST',
                data: $(this).serialize(),
                dataType:'json',
                success: function(response){
                    if (response.status === 'failed'){
                        Swal.fire({
                            icon : 'error',
                            title : 'Edit Gagal!',
                            timer : 2000,
                            text : 'Terjadi kesalahan saat mengedit kursus. Harap coba lagi.'
                        });
                    }
                    else {
                        Swal.fire({
                                icon: 'success',
                                title: 'Edit Berhasil!',
                                timer: 2000,
                                text: 'Redirecting.....',
                                showConfirmButton: false
                            }).then(function() {
                                window.location.href = '<?= urlpath('list-kursus'); ?>';
                            });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Edit Gagal!',
                        text: 'Terjadi kesalahan saat mengedit kursus. Harap coba lagi.'
                    });
                }
            });
        });
    });
    </script>
</body>
</html>
