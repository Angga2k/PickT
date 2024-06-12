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
        <div class="mr-10 flex flex-col gap-8">
            <form action="<?= urlpath('list-kursus/detail-kursus/edit-materi?id='.$lessons[0]['course_id'].'&lesson_id='.$lessons[0]['lesson_id']) ?>" method="POST">
                <div class=" flex max-w-7xl w-screen gap-2">
                    <div class="grid grid-cols-2 w-full gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="title" class="font-semibold">Pilih Kursusmu</label>
                            <select name="course_id" id="kursus" class="border-2 border-black rounded-lg px-4 py-2">
                                <option value="<?= $lessons[0]['course_id'] ?>"><?= $lessons[0]['title'] ?></option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="title" class="font-semibold">Judul Materi</label>
                            <input type="text" name="title" id="title" value="<?= $lessons[0]['title']?>" placeholder="Example : Belajar tentang materi dasar dari ReactJS" class="border-2 border-black bg-transparent rounded-lg px-4 py-2">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="content" class="font-semibold">Content</label>
                            <input type="text" name="content" id="content" value="<?= $lessons[0]['content']?>" placeholder="Example : Belajar tentang materi dasar dari ReactJS" class="border-2 border-black bg-transparent rounded-lg px-4 py-2">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="video_url" class="font-semibold">URL</label>
                            <input type="text" name="video_url" id="video_url" value="<?= $lessons[0]['video_url']?>" placeholder="Example : Belajar tentang materi dasar dari ReactJS" class="border-2 border-black bg-transparent rounded-lg px-4 py-2">
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

        $(document).ready(function() {
            $('#kursus').select2({
                placeholder: 'Pilih Kursusmu',
                allowClear: true,
            });
        });
    </script>
</body>
</html>
