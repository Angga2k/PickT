<?php 
include_once('view/main.php');
?>

<body class="bg-primary flex flex-row font-poppins">
    <div class="flex flex-col justify-between items-center">
        <div class="flex justify-between items-center w-[1571px] h-[124px] bg-[#495E57] rounded-xl mt-6">
            <div class="ml-10 w-[121px]">
                <img src="public/img/logo-pickt.png" alt="" class="w-[100px]">
            </div>
            <div class=" w-[890px]">
                <h1 class=" text-white font-bold text-center text-4xl">PICKT</h1>
            </div>
            <div class="flex flex-row gap-8 mr-10">
                <button class="w-[124px] h-[71px] bg-[#F5F7F8] rounded-[20px] text-center  text-xl font-semibold">
                    <a href="<?php BASEURL.BASEDIR ?>register-siswa">
                        <h1 class="font-medium">DAFTAR</h1>
                    </a>
                </button>
                <button class="w-[124px] h-[71px] bg-[#F4CE14] rounded-[20px] text-center text-xl font-semibold">
                    <a href="<?php BASEURL.BASEDIR ?>login-siswa">
                        <h1 class="font-medium">LOGIN</h1>
                    </a>
                </button>
            </div>
        </div>
        <div class="flex mt-20 justify-between items-center w-full h-[874px]">
            <div class="flex-col w-[836px]">
                <h1 class=" mt-40 ml-40 text-6xl font-bold">Start Learning With Us Now !</h1>
                <p class=" mt-20 ml-40 text-4xl text-justify">Kalian kesulitan belajar dan bingung mau mulai dari mana? Yuk, daftar ke PICKT untuk solusi belajar yang efektif dan menyenangkan!</p>
            </div>
            <div class="flex-row">
                <img src="public/img/pic-4.png" alt="" class="ml-[170px] w-[678px]">
            </div>
        </div>
        <div class="flex-col m-28 w-[1264px] h-[690px] bg-[#45474B] rounded-[25px]">
            <h1 class=" mt-24 mr-28 text-right text-6xl font-bold text-white">Welcome To</h1>
            <h1 class=" mt-10 mr-28 text-right text-6xl font-bold text-white">PICKT !</h1>
            <p class=" mx-28 mt-14 text-justify text-4xl text-white">Di sini, kamu bisa memilih guru terbaik yang siap membantumu dalam belajar. Yuk, temukan guru favoritmu dan mulailah petualangan belajar yang seru bersama kami!</p>
        </div>
        <div class="flex justify-between items-center w-[1264px] h-[474px]">
            <div class="flex-col mx-20 w-[672px]">
                <h1 class="text-3xl">Testimoni's</h1>
                <h1 class="mt-5 text-5xl font-bold">SEE WHATS OUR STUDENT'S SAY</h1>
            </div>
            <div class="flex mr-10 w-[723px] h-[380px] bg-[#F4CE14] rounded-[20px]">
                <div class="flex mt-10 ml-10 w-[170px] h-[170px] rounded-full bg-[#AF8282]"></div>
                <div class="flex-row m-10 w-[350px]">
                    <h1 class="text-2xl font-bold">KAK ANDI</h1>
                    <p class="mt-4 text-xl text-justify">Guru di PICKT ini luar biasa! Mereka sangat sabar dan menjelaskan materi dengan cara yang mudah dipahami. Sejak bergabung, nilai-nilai saya meningkat dan belajar jadi lebih menyenangkan!</p>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center mt-20 w-[1264px] h-[474px]">
            <img src="public/img/pic-5.png" alt="" class="w-[363px] h-[363px]">
            <img src="public/img/pic-6.png" alt="" class="w-[363px] h-[363px]">
            <img src="public/img/pic-7.png" alt="" class="w-[363px] h-[363px]">
        </div>
        <div class="flex justify-between mt-40 z-10 items-center w-[1264px] h-[351px] bg-[#45474B] rounded-[20px]">
            <div class="flex-col w-[872px]">
                <h1 class="ml-20 text-5xl text-white">Dapatkan info seputar belajar seputar PICKT</h1>
                <p class="mt-5 ml-20 text-2xl text-white">Dapatkan pengumuman seputar info paket belajar dan promo belajar dari kami</p>
            </div>
        </div>
        <div class="-mt-[195px] z-0 w-full h-[612px] bg-[#F4CE14]">
            <p class="text-justify m-72 text-2xl">PICKT merupakan sebuah platform les privat dan kelompok yang menjaring guru-guru terbaik se-INDONESIA serta menyediakan berbagai pilihan program dari mulai untuk SMP, SMA. Tersedia juga berbagai pilihan kurikulum yang dapat dipilih oleh siswa dan disesuaikan dengan kurikulum di sekolahnya. PICKT berkomitmen untuk memberikan pengajaran terbaik dan menyenangkan agar murid dapat memahami materi dengan baik dan bisa mendapatkan prestasi yang lebih di sekolahnya.</p>
        </div>
    </div>
</body>