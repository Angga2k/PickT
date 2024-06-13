<?php 
include_once('view/main.php');
?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-siswa.php'; ?>
    <div class="flex flex-col my-10 w-full">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-3xl">Pemesanan Kursus</h1>
        </div>
        <div class="mb-4">
            <a href="<?= urlpath('add-enrollment') ?>" id="add-pemesanan-les" class="flex w-fit">
                <h1 class="font-bold rounded-lg bg-[#7ad1d7] py-2 px-6 flex gap-2 text-white">Tambah Pesanan Kursus<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg></h1>
            </a>
        </div>
        <div class="flex justify-center">
            <div class="flex flex-col">
                <div class="w-80">
                    <img  src="public/img/2.svg" alt="" class="items-center justify-center">
                </div>
                <h1 class="text-lg text-center font-bold">Belum ada pesanan les</h1>
            </div>
        </div>
    </div>
</body>