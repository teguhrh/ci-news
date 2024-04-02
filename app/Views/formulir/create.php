<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>FORMULIR</title>
  </head>
  <body>
  <h1 style="text-align: center;">FORMULIR</h1>
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
                        <form action="<?php echo base_url('formulir/store') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                            <div class="form-group">
                                <label>NAMA LENGKAP</label>
                                <input type="text" class="form-control" name="nama_Lengkap" rows= "4" placeholder="Masukkan Title">
                            </div>
                            <div class="form-group">
                                <label>NAMA IBU</label>
                               <textarea class="form-control" name="nama_Panggilan" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>NAMA BAPAK</label>
                               <textarea class="form-control" name="status_Keluarga" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TEMPAT TGL LAHIR</label>
                               <textarea class="form-control" name="tempat_Tanggal_Lahir" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>KELAMIN</label>
                               <textarea class="form-control" name="jenis_Kelamin" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>AGAMA</label>
                               <textarea class="form-control" name="agama" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>ANAK KE</label>
                               <textarea class="form-control" name="anak_Ke" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>JUMLAH SAUDARA</label>
                               <textarea class="form-control" name="jumlah_Saudara" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>KEWARGANEGARAAN</label>
                               <textarea class="form-control" name="kewarganegaraan" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>UPLOAD FOTO</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="foto" name="foto">
                                        <label class="input-group-text" for="foto">Upload</label>
                                    </div>
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