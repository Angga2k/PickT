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
                        <h1 class="font-bold">Registrasi</h1>
                        <p>Pilih tipe akun anda</p>
                    </div>
                    <div class="flex gap-2 justify-center mt-4">
                        <a href="<?php BASEURL.BASEDIR ?>register-siswa">
                            <div class="flex center items-center bg-[#495E57] hover:bg-[#6DA491] active:bg-[#6DA491] focus:bg-[#6DA491] px-4 py-1 rounded-lg">
                                <img src="public/img/school-boy1.png" alt="" class="w-12">
                                <p class="text-center text-white">Siswa</p>
                            </div>
                        </a>
                        <a href="<?php BASEURL.BASEDIR ?>register-guru">
                            <div class="flex center items-center bg-[#F4CE14] hover:bg-[#FFE66C] active:bg-[#FFE66C] focus:bg-[#FFE66C] px-4 py-1 rounded-lg">
                                <img src="public/img/teacher1.png" alt="" class="w-12">
                                <p class="text-center text-white">Guru</p>
                            </div>
                        </a>
                    </div>
                    <form id="registerForm" action="register-siswa" method="post">
                        <div class="mt-4 flex flex-col gap-2 w-full">
                            <input type="text" name="full_name" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Nama Lengkap">
                            <input type="email" name='email' class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Email">
                            <input type="password" name="password" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Password">
                            <input type="password" name="confirm_password" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Konfirmasi Password">
                        </div>
                        <div class="mt-4 flex flex-col justify-center">
                            <button type="submit" class="text-center py-1 px-8 bg-[#A7E6CB] border-2 border-black rounded-lg">Register</button>
                        </div>
                    </form>
                    <div class="mt-2 flex justify-center">
                        <p>Sudah punya akun? <span class="font-bold"><a href="<?php BASEURL.BASEDIR ?>login-siswa"">Masuk</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'register-siswa',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'password_mismatch') {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Password Tidak Cocok!',
                                timer: 2000,
                                text: 'Password dan konfirmasi password tidak cocok. Silakan coba lagi.',
                            });
                        } else if (response.status === 'failed') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Registrasi Gagal!',
                                timer: 2000,
                                text: 'Terjadi kesalahan saat mendaftarkan akun Anda. Silakan coba lagi.',
                            });
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Registrasi Berhasil!',
                                timer: 2000,
                                text: 'Akun Anda telah berhasil didaftarkan.',
                            }).then(function() => {
                                window.location.href = '<?php echo BASEURL.BASEDIR; ?>login-siswa';
                            });
                        }
                    }
                });
            });
        });
    </script>
</html>