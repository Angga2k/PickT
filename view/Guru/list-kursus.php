<body class="bg-primary flex flex-row">
    <?php include_once 'view/Component/sidebar-guru.php'; ?>
    <div class="flex flex-col my-10">
        <div class="flex flex-col gap-2 py-5 mb-10">
            <h1 class="font-bold text-lg">Halo, Guru</h1>
            <h1><span class="text-red-600">*</span>Jangan lupa untuk menambahkan Pelajaran di kursusmu yaaaa!</h1>
            <p>Selamat datang di PICKT, ayo buat kursusmu bersama kami</p>
        </div>
        <div class="mb-4 flex flex-col gap-2">
            <h1 class="w-fit font-bold rounded-lg">Jadwal Lesmu</h1>
            <div class="flex gap-2">
                <a href="<?= urlpath('list-kursus/tambah-kursus') ?>">
                    <h1 class="w-fit border font-bold rounded-lg bg-[#7ad1d7] py-2 px-6">Buat Kursus Baru</h1>
                </a>
                <a href="<?= urlpath('list-kursus/tambah-materi') ?>">
                    <h1 class="w-fit border font-bold rounded-lg bg-[#7ad1d7] py-2 px-6">Buat Materi Baru</h1>
                </a>
            </div>
        </div>
        <div class="flex max-w-7xl">
            <table id="list-kursus" class="table-fixed">
                <thead>
                    <tr>
                        <th class="w-16 text-left">No</th>
                        <th class="text-left">Nama Kursus</th>
                        <th class="text-left">Deskripsi</th>
                        <th class="text-left">Tanggal Dibuat</th>
                        <th class="text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $key => $course) : ?>
                        <tr>
                            <td class="w-16 text-left"><?php echo $key + 1; ?></td>
                            <td class="text-left"><?= htmlspecialchars($course['title']) ?></td>
                            <td class="text-left"><?= htmlspecialchars($course['description']) ?></td>
                            <td class="text-left"><?= htmlspecialchars($course['created_at']) ?></td>
                            <td class="text-left">
                                <a href="<?= urlpath('list-kursus/detail-kursus?id=' . $course['course_id']); ?>">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Detail</button>
                                </a>
                                <a href="<?= urlpath('list-kursus/edit-kursus?id=' . $course['course_id']); ?>">
                                    <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Ganti</button>
                                </a>
                                <button type="button" class="delete-button focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" data-id="<?= $course['course_id'] ?>">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        new DataTable('#list-kursus');

        $(document).ready(function() {

            $('.delete-button').on('click', function() {
                var courseId = $(this).data('id');
                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    text: "Kamu tidak akan bisa mengembalikan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '<?= urlpath('list-kursus/delete-kursus?id=') ?>' + courseId,
                            type: 'GET',
                            success: function(response) {
                                Swal.fire(
                                    'Terhapus!',
                                    'Data kursus telah dihapus.',
                                    'success'
                                ).then(function() {
                                    location.reload();
                                });
                            },
                            error: function(xhr, status, error) {
                                Swal.fire(
                                    'Gagal!',
                                    'Terjadi kesalahan saat menghapus kursus.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>