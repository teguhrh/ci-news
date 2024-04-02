<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Upload Berkas
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/form/save" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
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
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Berkas</label>
                        <input type="file" class="form-control" id="berkas" name="berkas">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Upload" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>