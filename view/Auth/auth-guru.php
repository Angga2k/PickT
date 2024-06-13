<?php
    include_once('view/main.php');
?>
<body>
    <div class="flex h-screen max-w-screen bg-primary font-poppins">
        <div class="m-auto">
            <div class="flex gap-10">
                <div class="flex items-center px-4">
                    <img src="public/img/1.png" alt="" class="w-[500px]">
                </div>
                <div class="flex flex-col justify-center px-4 w-[400px]">
                    <div class="flex flex-col text-center">
                        <h1 class="font-bold">Masuk</h1>
                        <p>Pilih tipe akun anda</p>
                    </div>
                    <div class="flex gap-2 justify-center mt-4">
                        <a href="<?php BASEURL.BASEDIR ?>login-siswa">
                            <div class="flex center items-center bg-[#495E57] hover:bg-[#6DA491] active:bg-[#6DA491] focus:bg-[#6DA491] px-4 py-1 rounded-lg">
                                <img src="public/img/school-boy1.png" alt="" class="w-12">
                                <p class="text-center text-white">Siswa</p>
                            </div>
                        </a>
                        <a href="<?php BASEURL.BASEDIR ?>login-guru">
                            <div class="flex center items-center bg-[#F4CE14] hover:bg-[#FFE66C] active:bg-[#FFE66C] focus:bg-[#FFE66C] px-4 py-1 rounded-lg">
                                <img src="public/img/teacher1.png" alt="" class="w-12">
                                <p class="text-center text-white">Guru</p>
                            </div>
                        </a>
                    </div>
                    <form action="login-guru" method="post" id="loginForm">
                        <div class="mt-4 flex flex-col gap-2 w-full">
                            <input type="email" name="email" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Email">
                            <input type="password" name="password" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Password">
                        </div>
                        <div class="mt-4 flex flex-col justify-center">
                            <button type="submit" class="text-center py-1 px-8 bg-[#A7E6CB] border-2 border-black rounded-lg">Login</button>
                        </div>
                    </form>
                    <div class="mt-2 flex justify-center">
                        <p>Belum punya akun? <span class="font-bold"><a href="<?php BASEURL.BASEDIR ?>register-guru">Daftar Sekarang</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function(){
        $('#loginForm').on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url: 'login-guru',
                type : 'POST',
                data: $(this).serialize(),
                dataType:'json',
                success: function(response){
                    if (response.status === 'failed'){
                        Swal.fire({
                            icon : 'error',
                            title : 'Login Gagal!',
                            timer : 2000,
                            text : 'Terjadi kesalahan saat melakukan login akun. Harap cek kembali email dan password anda'
                        });
                    }
                    else {
                        Swal.fire({
                                icon: 'success',
                                title: 'Login Berhasil!',
                                timer: 2000,
                                text: 'Redirect.....',
                                button : false,
                            }).then(function() {
                                window.location.href = '<?= urlpath('dashboard-guru'); ?>';
                            });
                    }
                }
            })
        })
    })
</script>

</html>