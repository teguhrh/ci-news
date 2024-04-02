<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Data Absensi</title>
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
                        <form action="<?php echo base_url('absensi/store') ?>" method="POST">
                            <div class="form-group">
                                <label>Bulan</label>
                                <input type="text" class="form-control" name="bulan" placeholder="Masukkan Bulan" value="<?php echo set_value('bulan'); ?>">
                                <?php if(isset($validation) && $validation->getError('bulan')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('bulan'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" value="<?php echo set_value('nis'); ?>">
                                <?php if(isset($validation) && $validation->getError('nis')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('nis'); ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo set_value('nama'); ?>">
                                <?php if(isset($validation) && $validation->getError('nama')) { ?>
                                    <div class="text-danger"><?php echo $validation->getError('nama'); ?></div>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label>Status Absensi</label><br>
                                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                                <label for="status_<?php echo $i; ?>">Tanggal <?php echo $i; ?>:</label>
                                <select class="form-control" name="status[<?php echo $i; ?>]">
                                        <option value="">Pilih Status</option>
                                        <option value="H">Hadir</option>
                                        <option value="S">Sakit</option>
                                        <option value="I">Izin</option>
                                        <option value="A">Alpha</option>
                                    </select>
                                    <br>
                                <?php endfor; ?>
                            </div>




                            <!-- Tambahkan elemen input CSRF token -->
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <label>Jumlah Hadir</label>
                                    <input type="text" class="form-control" name="hadir" placeholder="Masukan Jumlah Kehadiran" value="<?php echo set_value('hadir'); ?>">
                                    <?php if(isset($validation) && $validation->getError('hadir')) { ?>
                                        <div class="text-danger"><?php echo $validation->getError('hadir'); ?></div>
                                    <?php } ?>
                                </div>
                                    <label>Jumlah Sakit</label>
                                    <input type="text" class="form-control" name="sakit" placeholder="Masukan Jumlah Sakit" value="<?php echo set_value('sakit'); ?>">
                                    <?php if(isset($validation) && $validation->getError('sakit')) { ?>
                                        <div class="text-danger"><?php echo $validation->getError('sakit'); ?></div>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Izin</label>
                                    <input type="text" class="form-control" name="izin" placeholder="Masukan Jumlah Sakit" value="<?php echo set_value('izin'); ?>">
                                    <?php if(isset($validation) && $validation->getError('izin')) { ?>
                                        <div class="text-danger"><?php echo $validation->getError('izin'); ?></div>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Alpha</label>
                                    <input type="text" class="form-control" name="alpha" placeholder="Masukan Jumlah Sakit" value="<?php echo set_value('alpha'); ?>">
                                    <?php if(isset($validation) && $validation->getError('alpha')) { ?>
                                        <div class="text-danger"><?php echo $validation->getError('alpha'); ?></div>
                                    <?php } ?>
                                </div>

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
