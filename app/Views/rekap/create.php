<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Data Rekap Absensi Bulanan</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation) && $validation->getErrors()) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo implode('<br>', $validation->getErrors()); ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('rekap/store') ?>" method="POST">
                        <div class="form-group">
                                <label>No</label>
                                <input type="text" class="form-control" name="no" value="<?php echo set_value('no'); ?>">
                                <?php if(isset($validation) && $validation->getError('no')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('no'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="bulan">Bulan</label>
                                <input type="text" class="form-control" name="bulan" placeholder="Masukkan Nama Bulan" value="<?php echo set_value('bulan'); ?>">
                                <?php if(isset($validation) && $validation->getError('bulan')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('bulan'); ?></div>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label>Kelompok</label>
                                <input type="text" class="form-control" name="kelompok" placeholder="Masukkan Kelompok" value="<?php echo set_value('kelompok'); ?>">
                                <?php if(isset($validation) && $validation->getError('kelompok')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('kelompok'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Siswa</label>
                                <input type="text" class="form-control" name="jumSiswa" placeholder="Masukkan Jumlah Siswa" value="<?php echo set_value('jumSiswa'); ?>">
                                <?php if(isset($validation) && $validation->getError('jumSiswa')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('jumSiswa'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="jumAbsen">Jumlah Absen</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="sakit" placeholder="Sakit" value="<?php echo set_value('sakit'); ?>">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="izin" placeholder="Izin" value="<?php echo set_value('izin'); ?>">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="alpha" placeholder="Alpha" value="<?php echo set_value('alpha'); ?>">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="jumAbsen" placeholder="Jumlah" value="<?php echo set_value('jumAbsen'); ?>">
                                    </div>
                                </div>
                                <?php if(isset($validation) && $validation->getError('jumAbsen')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('jumAbsen'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Persentase</label>
                                <input type="text" class="form-control" name="persentase" placeholder="Masukkan Persentase" value="<?php echo set_value('persentase'); ?>">
                                <?php if(isset($validation) && $validation->getError('persentase')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('persentase'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo set_value('keterangan'); ?>">
                                <?php if(isset($validation) && $validation->getError('keterangan')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('keterangan'); ?></div>
                                <?php } ?>
                            </div>

                            <!-- Tambahkan elemen input CSRF token -->
                            <?= csrf_field() ?>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
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
