<?php 
include_once('view/main.php');
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-siswa.php'; ?>
    <div class="flex flex-col my-10">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-lg">Halo, Siswa</h1>
            <p>Selamat datang di PICKT, ayo belajar bersama kami</p>
        </div>
        <div class="mb-4">
            <h1 class="w-fit border font-bold rounded-lg bg-[#7ad1d7] py-2 px-6">Jadwal Lesmu</h1>
        </div>
        <div class="flex max-w-7xl">
            <table id="jadwal-les" class="table-fixed" style="width: 100%;">
            <thead>
                <tr>
                    <th class="w-16 text-left">No</th>
                    <th>Nama Kursus</th>
                    <th>Deskripsi</th>
                    <th>Pengajar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enrollments as $key => $enrollment) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $enrollment['course_title'] ?></td>
                    <td><?= $enrollment['course_description'] ?></td>
                    <td><?= $enrollment['teacher_name'] ?>  </td>
                    <td class="flex gap-2 items-center">
                        <a href="<?= urlpath('list-enrollment/details?id=' . $enrollment['course_id']);?>">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Detail</button>
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
    new DataTable('#jadwal-les');
</script>