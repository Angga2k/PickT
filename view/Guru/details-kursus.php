<?php 
    include_once('view/main.php');
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-guru.php'; ?>
    
    <div class="flex flex-col my-10">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-lg">Halo, Guru</h1>
            <h1 class="text-lg">Ini adalah materi di kursus <span class="font-bold">
                <?php foreach ($courses as $key => $course) : ?>
                <?php echo $course['course_title']; ?>
                <?php break; ?><?php endforeach; ?>
            </span></h1>
        </div>
        <div class="mb-4 flex flex-col gap-2">
            <h1 class="w-fit font-bold rounded-lg">Isi Dari Materi</h1>
        </div>
        <div class="flex max-w-7xl">
            <table id="list-kursus" class="table-fixed">
                <thead>
                    <tr>
                        <th class="w-16 text-left">No</th>
                        <th class="text-left">Nama Materi</th>
                        <th class="text-left">Deskripsi Content</th>
                        <th class="text-left">Link URL</th>
                        <th class="text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $key => $course) : ?>
                        <tr>
                            <td class="w-16 text-left"><?php echo $key + 1; ?></td>
                            <td class="text-left"><?= htmlspecialchars($course['title']) ?></td>
                            <td class="text-left"><?= htmlspecialchars($course['content']) ?></td>
                            <td class="text-left"><?= htmlspecialchars($course['video_url']) ?></td>
                            <td class="text-left">
                                <a href="<?= urlpath('list-kursus/detail-kursus?id=' . $course['course_id']); ?>"></a>
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Detail</button>
                                </a>
                                <a href="<?= urlpath('list-kursus/detail-kursus/edit-materi?id=' . $course['course_id'] . '&lesson_id=' . $course['lesson_id']); ?>">
                                    <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Ganti</button>
                                </a>
                                <a href="<?= urlpath('list-kursus/detail-kursus/delete-materi?id=' . $course['course_id'] . '&lesson_id=' . $course['lesson_id']); ?>">
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

<script>
    new DataTable('#list-kursus');
</script>