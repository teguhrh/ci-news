<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Data</title>
  </head>
  <body>
  <h1 style="text-align: center;">Data Murid</h1>
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
                        <form action="<?php echo base_url('datamurid/store') ?>" method="POST">
                        <?= csrf_field() ?>
                            <div class="form-group">
                                <label>NO URUT</label>
                                <input type="text" class="form-control" name="no_urut" rows= "4" placeholder="Masukkan Title">
                            </div>
                            <div class="form-group">
                                <label>NAMA_MURID</label>
                               <textarea class="form-control" name="nama_murid" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>KELAMIN</label>
                               <textarea class="form-control" name="kelamin" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>NAMA_ORANG_TUA</label>
                               <textarea class="form-control" name="nama_orang_tua" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>NOMOR_DAFTAR_INDUK</label>
                               <textarea class="form-control" name="nomor_daftar_induk" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TGL_MASUK</label>
                               <textarea class="form-control" name="tgl_masuk" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TGL_KELUAR</label>
                               <textarea class="form-control" name="tgl_keluar" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>ALASAN_KELUAR</label>
                               <textarea class="form-control" name="alasan_keluar" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>BUKU_DI_KE</label>
                               <textarea class="form-control" name="buku_di_ke" rows="4" placeholder="Masukkan Konten"></textarea>
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