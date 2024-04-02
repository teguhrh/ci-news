<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>BUKU INDUK</title>
    <style>
        .small-font {
            font-size: 11px; /* Sesuaikan ukuran huruf sesuai kebutuhan */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home') ?>">BUKU INDUK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="home">Home</a>
                </li>
            <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>datamurid">buku klaper</a>
                    </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('message'); ?>
                    </div>
                <?php endif ?>
                <a href="<?php echo base_url('induk/create') ?>" class="btn btn-md btn-success mb-3">DAFTAR</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2"class="text-center small-font">NAMA PESERTA</th>
                            <th rowspan="2"class="text-center small-font">KELAMIN</th>
                            <th rowspan="2"class="text-center small-font">TEMPAT TGL LAHIR</th>
                            <th rowspan="2"class="text-center small-font">AGAMA</th>
                            <th rowspan="2"class="text-center small-font">KEWARGANEGARAAN</th>
                            <th rowspan="2"class="text-center small-font">JUMLAH SAUDARA</th>
                            <th rowspan="2"class="text-center small-font">BAHASA HARI-HARI</th>
                            <th colspan="2"class="text-center small-font">KEADAAN JASMANI</th>
                            <th rowspan="2"class="text-center small-font">ALAMAT</th>
                            <th rowspan="2"class="text-center small-font">NO TELEPON</th>
                            <th rowspan="2"class="text-center small-font">TINGGAL</th>
                            <th rowspan="2"class="text-center small-font">JARAK KE SEKOLAH</th>
                            <th rowspan="2"class="text-center small-font">AKSI</th>
                        </tr>
                        <tr>
                            <th class="text-center small-font">LENGKAP</th>
                            <th class="text-center small-font">PANGGILAN</th>
                            <th class="text-center small-font">BERAT</th>
                            <th class="text-center small-font">TINGGI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($indukData as $key => $induk) : ?>
                            <tr>
                                <td class="text-center small-font"><?php echo $induk['lengkap'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['panggilan'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['kelamin'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['tempat_tgl_lahir'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['agama'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['kewarganegaraan'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['jumlah_saudara'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['bahasa'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['berat'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['tinggi'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['alamat'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['telepon'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['tinggal'] ?></td>
                                <td class="text-center small-font"><?php echo $induk['jarak'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('induk/edit/' . $induk['id']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $induk['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                            
                                    <!-- Modal -->
                                    <div class="modal fade" id="confirmDeleteModal<?= $induk['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <a href="<?php echo base_url('induk/delete/' . $induk['id']) ?>" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
