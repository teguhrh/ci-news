<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>DATA PAUD</title>
    <style>
        tbody {
            max-height: 400px; /* Atur ketinggian maksimum */
            overflow-y: auto; /* Aktifkan scrollbar vertical jika melebihi tinggi maksimum */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin') ?>">BUKU PENDAFTARAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">   
        <ul class="navbar-nav">
            <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>formulir">formulir</a>
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

                <a href="<?php echo base_url('paud/formulir') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NO URUT</th>
                            <th>NO INDUK</th>
                            <th>NAMA SISWA BARU</th>
                            <th>KELAMIN</th>
                            <th>TEMPAT TGL LAHIR</th>
                            <th>ALAMAT</th>
                            <th>TEMPAT TINGGAL</th>
                            <th>DITEMPATKAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($paudData as $key => $paud) : ?>
                            <tr>
                                <td><?php echo $paud['no_urut'] ?></td>
                                <td><?php echo $paud['no_induk'] ?></td>
                                <td><?php echo $paud['nama_siswa_baru'] ?></td>
                                <td><?php echo $paud['kelamin'] ?></td>
                                <td><?php echo $paud['tempat_tgl_lahir'] ?></td>
                                <td><?php echo $paud['alamat'] ?></td>
                                <td><?php echo $paud['tempat_tinggal'] ?></td>
                                <td><?php echo $paud['ditempatkan'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('paud/edit/' . $paud['id']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $paud['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="confirmDeleteModal<?= $paud['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
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
                                                    <a href="<?php echo base_url('paud/delete/' . $paud['id']) ?>" class="btn btn-danger">Hapus</a>
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
