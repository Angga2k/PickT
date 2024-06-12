<?php 
include_once 'view/main.php';
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-guru.php'; ?>
    <div class="flex flex-col my-10 w-full">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-3xl">Materi, mu</h1>
            <p class="font-normal text-sm">Yuuk, isi materimu diform ini sesuai dengan kursusnya</p>
        </div>
        <div class="mr-10">
            <form action="tambah-materi" method="POST">
                <div class=" flex max-w-6xl w-screen gap-2">
                    <div class="grid grid-cols-1 w-full gap-4">
                        <div class="flex flex-col gap-2">
                            <label for="title" class="font-semibold">Pilih Kursusmu</label>
                            <select name="course_id" id="kursus" class="border-2 border-black rounded-lg px-4 py-2">
                                <option value="">Pilih</option>
                                <?php foreach ($courses as $course) { ?>
                                    <option value="<?= $course['course_id'] ?>"><?= $course['title'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="title" class="font-semibold">Judul Materi</label>
                            <input type="text" name="title" id="title" placeholder="Example : Belajar tentang materi dasar dari ReactJS" class="border-2 border-black bg-transparent rounded-lg px-4 py-2">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="content" class="font-semibold">Judul Materi</label>
                            <input type="text" name="content" id="content" placeholder="Example : Belajar tentang materi dasar dari ReactJS" class="border-2 border-black bg-transparent rounded-lg px-4 py-2">
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-600 px-8 py-2 font-semibold text-primary rounded-xl hover:bg-blue-800">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Link to jQuery and Select2 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kursus').select2({
                placeholder: 'Pilih Kursusmu',
                allowClear: true,
            });
        });
    </script>
</body>
</html>
