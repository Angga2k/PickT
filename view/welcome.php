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
        <div class="flex w-[1272px] h-[574px]">
            <div>
                <h1></h1>
            </div>
        </div>
    </div>
</body>