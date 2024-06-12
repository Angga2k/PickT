<?php 
include_once('view/main.php');
?>

<body class="bg-primary flex flex-row px-12 font-poppins">
    <div class="flex flex-col justify-between items-center">
        <div class="flex items-center content-center w-[1272px] h-[74px] bg-[#495E57] rounded-xl mt-6 ">
            <div class="ml-4 w-[121px]">
                <img src="public/img/logo-pickt.png" alt="" class="w-[60px]">
            </div>
            <div class=" w-[890px]">
                <h1 class=" text-white font-bold text-center text-xl">PICKT</h1>
            </div>
            <div class="flex flex-row gap-8">
                <button class="w-[84px] h-[51px] bg-[#F5F7F8] rounded-[20px] text-center text-[15px] font-semibold">
                    <a href="<?php BASEURL.BASEDIR ?>register-siswa">
                        <h1 class="font-medium">DAFTAR</h1>
                    </a>
                </button>
                <button class="w-[84px] h-[51px] bg-[#F4CE14] rounded-[20px] text-center text-[15px] font-semibold">
                    <a href="<?php BASEURL.BASEDIR ?>login-siswa">
                        <h1 class="font-medium">LOGIN</h1>
                    </a>
                </button>
            </div>
        </div>
        <div class="flex mt-20 w-[1272px] h-[574px]">
            <div class="flex-col w-[636px]">
                <h1 class=" mt-10 ml-14 text-6xl font-bold">Start Learning With Us Now !</h1>
                <p class=" mt-10 ml-14 text-3xl text-justify">Kalian kesulitan belajar dan bingung mau mulai dari mana? Yuk, daftar ke PICKT untuk solusi belajar yang efektif dan menyenangkan!</p>
            </div>
            <div class="flex-row absolute w-[736px]">
                <img src="public/img/pic-4.png" alt="" class=" ml-[835px] w-[466px]">
            </div>
        </div>
        <div class="flex-col mt-20 w-[1064px] h-[490px] bg-[#45474B] rounded-[25px]">
            <h1 class=" mt-20 mr-24 text-right text-6xl font-bold text-white">Welcome To PICKT !</h1>
            <p class=" mx-28 mt-14 text-justify text-3xl text-white">Di sini, kamu bisa memilih guru terbaik yang siap membantumu dalam belajar. Yuk, temukan guru favoritmu dan mulailah petualangan belajar yang seru bersama kami!</p>
        </div>
        <div class="flex justify-between items-center w-[972px] h-[574px]">
            <div class="flex-col w-[472px]">
                <h1 class="text-2xl">Testimoni's</h1>
                <h1 class="text-4xl font-bold">SEE WHATS OUR STUDENT'S SAY</h1>
            </div>
            <div class="flex w-[572px] bg-[#F4CE14] rounded-[20px]">
                <div class="flex mt-5 ml-5 w-[70px] h-[70px] rounded-full bg-[#AF8282]"></div>
                <div class="flex-row m-10 w-[350px]">
                    <h1 class="text-1xl font-bold">KAK ANDI</h1>
                    <p class="mt-4 text-justify">Guru di PICKT ini luar biasa! Mereka sangat sabar dan menjelaskan materi dengan cara yang mudah dipahami. Sejak bergabung, nilai-nilai saya meningkat dan belajar jadi lebih menyenangkan!</p>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center mt-10 w-[772px] h-[174px]">
            <img src="public/img/pic-5.png" alt="" class="w-[220px] h-[220px]">
            <img src="public/img/pic-6.png" alt="" class="w-[220px] h-[220px]">
            <img src="public/img/pic-7.png" alt="" class="w-[220px] h-[220px]">
        </div>
        <div class="flex justify-between mt-40 z-10 items-center w-[772px] h-[174px] bg-[#45474B] rounded-[20px]">
            <div class="flex-col w-[572px]">
                <h1 class="ml-10 text-3xl text-white">Dapatkan info seputar belajar seputar PICKT</h1>
                <p class="mt-5 ml-10 text-1xl text-white">Dapatkan pengumuman seputar info paket belajar dan promo belajar dari kami</p>
            </div>
        </div>
        <div class="-mt-[95px] z-0 w-[1272px] h-[512px] bg-[#F4CE14]">
            <p class="text-justify m-48">PICKT merupakan sebuah platform les privat dan kelompok yang menjaring guru-guru terbaik se-INDONESIA serta menyediakan berbagai pilihan program dari mulai untuk SMP, SMA. Tersedia juga berbagai pilihan kurikulum yang dapat dipilih oleh siswa dan disesuaikan dengan kurikulum di sekolahnya. PICKT berkomitmen untuk memberikan pengajaran terbaik dan menyenangkan agar murid dapat memahami materi dengan baik dan bisa mendapatkan prestasi yang lebih di sekolahnya.</p>
        </div>
    </div>
</body>