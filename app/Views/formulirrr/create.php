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
                <form action="<?= base_url('formulirrr/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>NAMA LENGKAP</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>NAMA IBU</label>
                            <input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label>NAMA BAPAK</label>
                            <input type="text" class="form-control" name="nama_ayah" placeholder="Masukkan Nama Bapak">
                        </div>
                        <div class="form-group">
                            <label>TEMPAT TGL LAHIR</label>
                            <input type="text" class="form-control" name="tempat_tanggal_lahir" placeholder="Masukkan Tempat Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label>KELAMIN</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>AGAMA</label>
                            <input type="text" class="form-control" name="agama" placeholder="Masukkan Agama">
                        </div>
                        <div class="form-group">
                            <label>ANAK KE</label>
                            <input type="number" class="form-control" name="anak_ke" placeholder="Masukkan Anak Ke">
                        </div>
                        <div class="form-group">
                            <label>JUMLAH SAUDARA</label>
                            <input type="number" class="form-control" name="jumlah_saudara" placeholder="Masukkan Jumlah Saudara">
                        </div>
                        <div class="form-group">
                            <label>KEWARGANEGARAAN</label>
                            <input type="text" class="form-control" name="kewarganegaraan" placeholder="Masukkan Kewarganegaraan">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="foto" name="foto">
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
