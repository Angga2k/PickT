<?php

include_once 'view/main.php';

?>

<div class="bg-[#45474B] flex h-screen w-max mr-8">
    <div class="flex flex-col text-primary justify-between items-center px-10">
        <div class="mt-14 flex flex-col gap-3">
            <a href="<?php BASEURL.BASEDIR ?>dashboard">
                <h1 class="font-medium">Dashboard</h1>
            </a>
            <a href="<?php BASEURL.BASEDIR ?>pemesanan-les-siswa">
                <h1 class="font-medium">Pemesanan Les</h1>
            </a>
            <a href="<?php BASEURL.BASEDIR ?>jadwal-les-siswa">
                <h1 class="font-medium">Jadwal Les</h1>
            </a>
        </div>
        <div class="py-10">
            <a href="" class="bg-red-500">
                <h1 class="bg-red-500 px-8 py-2 rounded-xl text-white">Logout</h1>
            </a>
        </div>
    </div>
</div>