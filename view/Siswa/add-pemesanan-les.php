
<?php include_once 'view/main.php';?>

<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar.php'; ?>
    <div class="flex flex-col my-10 w-full">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-3xl">Pemesanan Les</h1>
            <p class="font-normal text-sm">Yuuk, isi pesanan untuk lesmu diform ini</p>
        </div>
        <div class="mr-10 border">
            <div class="border max-w-xl w-full">
                <label for="title" class="">
                    Pilih Judul
                    <select class="border block w-full" id="test">
                        <option value=""></option>
                        <option value="1">aku unej</option>
                    </select>
                </label>
            </div>
        </div>
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
