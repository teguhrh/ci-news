<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>CREATE</title>
  </head>
  <body>
  <h1 style="text-align: center;"></h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('induk/store') ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="form-group">
                             <label>NAMA LENGKAP</label>
                                <input type="text" class="form-control" name="lengkap" rows="5" placeholder="Masukkan Title">
                            <div class="form-group">
                                <label>NAMA PANGGILAN</label>
                               <textarea class="form-control" name="panggilan" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>KELAMIN</label>
                               <textarea class="form-control" name="kelamin" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TEMPAT TGL LAHIR</label>
                               <textarea class="form-control" name="tempat_tgl_lahir" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>AGAMA</label>
                               <textarea class="form-control" name="agama" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>KEWARGANEGARAAN</label>
                               <textarea class="form-control" name="kewarganegaraan" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>JUMLAH SAUDARA</label>
                               <textarea class="form-control" name="jumlah_saudara" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>BAHASA HARI HARI</label>
                               <textarea class="form-control" name="bahasa" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>BERAT</label>
                               <textarea class="form-control" name="berat" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TINGGI</label>
                               <textarea class="form-control" name="tinggi" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                               <textarea class="form-control" name="alamat" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TELEPON</label>
                               <textarea class="form-control" name="telepon" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TINGGAL</label>
                               <textarea class="form-control" name="tinggal" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>JARAK</label>
                               <textarea class="form-control" name="jarak" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
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