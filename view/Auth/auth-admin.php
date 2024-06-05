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
                    <form action="admin" method="post">
                        <div class="mt-4 flex flex-col gap-2 w-full">
                            <input type="email" name="email" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Email">
                            <input type="password" name="password" class="bg-secondary rounded-lg py-1 px-4 border-2 border-black" placeholder="Password">
                        </div>
                        <div class="mt-4 flex flex-col justify-center">
                            <button type="submit" class="text-center py-1 px-8 bg-[#A7E6CB] border-2 border-black rounded-lg">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>