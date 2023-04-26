<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Data Pengkajian</h1>
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a class="btn btn-primary btn-md mb-2" href="/">Tambah Data</a>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No. RM</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tgl. Lahir</th>
                        <th scope="col">Pengkajian tgl</th>
                        <th scope="col">MRS tanggal</th>
                        <th scope="col">Dx. Masuk</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;

                    foreach ($lists as $list):
                        ?>
                        <tr>
                            <th scope="row">
                                <?= $i++; ?>
                            </th>
                            <td>
                                <?= $list['no_rm']; ?>
                            </td>
                            <td>
                                <?= $list['nama_pasien']; ?>
                            </td>
                            <td>
                                <?= $list['tgl_lahir']; ?>
                            </td>
                            <td>
                                <?= $list['pengkajian_tgl']; ?>
                            </td>
                            <td>
                                <?= $list['mrs_tanggal']; ?>
                            </td>
                            <td>
                                <?= $list['dx_masuk']; ?>
                            </td>
                            <td>
                                <?= $list['jam']; ?>
                            </td>
                            <td>
                                <?= $list['agama']; ?>
                            </td>
                            <td>
                                <?= $list['pendidikan']; ?>
                            </td>
                            <td>
                                <a href="/list/<?= $list['id'] ?>" class="btn btn-sm btn-warning px-1 py-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                    <span class="align-middle">Edit</span>
                                </a>
                                <a href="/delete/<?= $list['id'] ?>"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                                    class="btn btn-sm btn-danger px-1 py-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                    <span class="align-middle">Hapus</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>