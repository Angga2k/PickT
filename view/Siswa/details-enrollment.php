<?php 
    include_once('view/main.php');
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-guru.php'; ?>
    
    <div class="flex flex-col my-10">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-lg">Halo, Guru</h1>
            <h1 class="text-lg">Ini adalah materi di kursus <span class="font-bold">
                <?php foreach ($enrollments as $key => $enrollment) : ?>
                <?php echo $enrollment['course_title']; ?>
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
                        <th class="text-left">Judul Materi</th>
                        <th class="text-left">Deskripsi Content</th>
                        <th class="text-left">Link URL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($enrollments as $key => $enrollment) : ?>
                        <tr>
                            <td class="w-16 text-left"><?php echo $key + 1; ?></td>
                            <td class="text-left"><?= htmlspecialchars($enrollment['lessons_title']) ?></td>
                            <td class="text-left"><?= htmlspecialchars($enrollment['content']) ?></td>
                            <td class="text-left"><?= htmlspecialchars($enrollment['video_url']) ?></td>
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