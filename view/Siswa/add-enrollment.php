
<?php include_once 'view/main.php';
// var_dump($courses);
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-siswa.php'; ?>
    <div class="flex flex-col my-10 w-full">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-3xl">Pemesanan Kursus</h1>
            <p class="font-normal text-sm">Yuuk, isi pesanan untuk kursusmu diform ini</p>
        </div>
        <div class="mr-10">
            <form action="<?= urlpath('add-enrollment') ?>" method="POST" id="course-form">
                <div class="max-w-xl w-full">
                    <label for="title" class="">
                        Pilih Judul
                        <select class="block w-full" id="test" name="course_id">
                            <option value=""></option>
                            <?php foreach ($courses as $course) { ?>
                                <option value="<?= $course['course_id'] ?>"><?= $course['title'] ?></option>
                            <?php } ?>
                        </select>
                    </label>
                </div>
                <div class="max-w-xl w-full">
                    <button class="px-8 py-2 bg-blue-600 text-white rounded-lg mt-3">Submit</button>
                </div>
            </form>
        </div>
        <h1 class="font-semibold mt-10">Detail Kursus yang kamu pilih!</h1>
        <div id="course-details" class="mt-4 grid grid-cols-4 gap-7">
            <div class="flex flex-row gap-2">
                <h1 class="font-semibold">Judul Kursus : </h1>
                <p id="course-title"> </p>
            </div>
            <div class="flex flex-row gap-2">
                <h1 class="font-semibold">Deskripsi Kursus : </h1>
                <p id="course-description"> </p>
            </div>
            <div class="flex flex-row gap-2">
                <h1 class="font-semibold">Pengajar Kursus : </h1>
                <p id="course-teacher"> </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#test').select2({
                placeholder: 'Pilih kursus yang kamu inginkan',
                allowClear: true,
            });

            $('#test').change(function() {
                var courseId = $(this).val();
                if (courseId) {
                    $.ajax({
                        url: '<?= urlpath('add-enrollment/get-course') ?>',
                        type: 'POST',
                        data: {course_id: courseId},
                        success:function(response) {
                            try {
                                response = JSON.parse(response);
                                console.log(response);
                                if (response.error) {
                                    $('#course-title').html(response.error);
                                    $('#course-description').html('');
                                    $('#course-teacher').html('');
                                } else {
                                    if (response.title && response.description && response.teacher) {
                                        var title = response.title;
                                        var description = response.description;
                                        var teacher = response.teacher;
                                        $('#course-title').html(title);
                                        $('#course-description').html(description);
                                        $('#course-teacher').html(teacher);
                                    } else {
                                        console.error("Struktur data respons tidak valid:", response);
                                        $('#course-title').html("Struktur data respons tidak valid.");
                                        $('#course-description').html('');
                                        $('#course-teacher').html('');
                                    }
                                }
                            } catch (e) {
                                console.error("Gagal memparsing respons:", e);
                                $('#course-title').html("Gagal memproses respons.");
                                $('#course-description').html('');
                                $('#course-teacher').html('');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Gagal mengirim permintaan AJAX:", error);
                            $('#course-title').html("Gagal mengirim permintaan AJAX.");
                            $('#course-description').html('');
                            $('#course-teacher').html('');
                        }
                    });
                } else {
                    $('#course-title').html(''); // Kosongkan elemen HTML jika tidak ada kursus yang dipilih
                    $('#course-description').html('');
                    $('#course-teacher').html('');
                }
            });
        });
    </script>
</body>
</html>
