<?php
    include_once('view/main.php');
?>
<body>
    <div class="flex h-screen max-w-screen bg-[#F6F7D7] font-poppins">
        <div class="w-[276px] h-screen bg-[#45474B]">
            <div class="flex gap-10">
                <div class="mt-[56px] ml-[75px] w-[114px] h-[114px] bg-[#D9D9D9] rounded-full"></div>
            </div>
            <div class="flex-col">
                <button class="mt-[84px] ml-[75px] text-base text-white hover:font-bold active:font-bold focus:font-bold" >Dashboard</button>
                <button class=" mt-4 ml-[75px] text-base text-white hover:font-bold active:font-bold focus:font-bold" >Jadwal</button>
                <button class=" mt-4 ml-[75px] text-base text-white hover:font-bold active:font-bold focus:font-bold" >Loker Mengajar</button>
            </div>
        </div>
        <div class="flex-col">
            <!-- <div class=" mt-14 ml-3 w-[936px] h-[69px] bg-[#F6F7D7] border-2 border-black rounded-[20px]">
                <h1 class=" mt-5 ml-3 text-xl">Dashboard</h1>
            </div> -->
            <div class="w-[936px] mt-6 ml-7">
                <h1 class="text-xl">Hi, Angga</h1>
                <p class=" mt-2">Selamat Datang di PickT, Ayo belajar bersama kami</p>
                <!-- <p class=" mt-2">Selamat Datang di Funteacher tempat pembelajaran nyaman dan mudah. Sebelum kamu menjadi pengajar les, kamu di wajibkan untuk melengkapi profil mu ya</p> -->
                <!-- <button class=" mt-2 w-[212px] h-[53px] bg-[#7AD1D7] text-white text-xl text-center rounded-[20px]">Lengkapi profil ></button> -->
                <div class=" mt-8 ml-3 w-[766px] h-[345px] bg-[#F6F7D7] border-2 border-black">
                    <div class="flex flex-row">
                        <div class="flex-col w-[383px] h-[345px] mt-3 ml-4 ">
                            <form action="">
                                <label for="full_name" class="ml-2 font-bold">Nama lengkap</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="Nama lengkap">
                                <label for="email" class="ml-2 font-bold">Email</label>
                                <input type="email" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="email">
                                <label for="NPWP" class="ml-2 font-bold">NPWP(*jika ada)</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="NPWP">
                                <label for="gender" class="ml-2 font-bold">Jenis kelamin</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="Jenis kelamin">
                            </form>
                        </div>
                        <div class="flex-col w-[383px] h-[345px] mt-3 ml-4 ">
                        <form action="">
                                <label for="addres" class="ml-2 font-bold">Alamat</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="Alamat">
                                <label for="phone" class="ml-2 font-bold">Telepon/HP</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="089989XXXXXX">
                                <label for="education" class="ml-2 font-bold">Pendidikan terakhir</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="Pendidikan terakhir">
                                <label for="college" class="ml-2 font-bold">Perguruan Tinggi</label>
                                <input type="text" class="flex w-64 bg-white rounded-xl py-2 mb-3 indent-2" placeholder="Universitas XXX">
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-end">   
                        <button class=" mt-2 w-[162px] h-[53px] bg-[#7AD1D7] text-white text-xl text-center rounded-[20px]">Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>