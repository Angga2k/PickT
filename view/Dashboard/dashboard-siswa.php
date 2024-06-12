<?php include_once 'view/main.php';?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-siswa.php'; ?>
    <div class="flex-col">
        <div class=" mt-10 ml-3 w-[936px] h-[69px] bg-[#F6F7D7] rounded-[20px]">
            <h1 class=" mt-5 ml-3 text-xl">Dashboard</h1>
        </div>
        <div class="flex w-[936px] ml-7 bg-[#E8E9CA] rounded-[20px]">
            <div class=" flex-row w-[150px]">
                <img src="public/img/pic-3.png" alt="" class="w-[150px]">
            </div>
            <div class="flex-col">
                <h1 class="text-xl mt-8">Hi, Angga</h1>
                <p class=" mt-2">Selamat Datang di PICKT, ayo belajar bersama kami</p>
            </div>
        </div>
        <button class=" mt-8 ml-7 w-[262px] h-[53px] bg-[#7AD1D7] text-white text-xl text-center rounded-[20px]"><a href="<?php BASEURL.BASEDIR ?>pemesanan-les-siswa">Lanjutkan pemesananmu></button>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#test').select2({
                placeholder: 'Plih',
                allowClear: true,
            });
        });
    </script>
</body>
</html>