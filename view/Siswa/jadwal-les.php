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
        <div class="flex flex-row">
            <table id="jadwal-les" class="display" style="width: 100%;">
            <thead>
                <tr>
                    <th>Nama Kursus</th>
                    <th>Deskripsi</th>
                    <th>Pengajar</th>
                    <th>Judul</th>
                    <th>Materi</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>konsol</td>
                    <td>konsol</td>
                    <td>konsol</td>
                    <td>konsol</td>
                    <td>konsol</td>
                    <td>konsol</td>
                    <td class="flex gap-6 items-center">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" /></svg>
                        </a>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                        </a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</body>

<script>
    new DataTable('#jadwal-les');
</script>