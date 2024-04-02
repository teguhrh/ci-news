<!-- rekap/guestView.php -->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Data Rekap Absensi Bulanan</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/home">HOME</a>
    <a class="navbar-brand" href="/absensi/guestview">Daftar Absensi</a>

    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="navbar-text text-center display-4">REKAP ABSENSI BULANAN</span>
            </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="login">LOGOUT</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php if(!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
            <?php endif ?>

            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th rowspan="2" class="text-center">No</th>
                        <th rowspan="2" class="text-center col-md-1">Bulan</th>
                        <th rowspan="2" class="text-center">KELOMPOK</th>
                        <th rowspan="2" class="text-center">JUMLAH SISWA</th>
                        <th colspan="4" class="text-center">JUMLAH ABSEN</th>
                        <th rowspan="2" class="text-center">PERSENTASE</th>
                        <th rowspan="2" class="text-center">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th class="text-center">SAKIT</th>
                        <th class="text-center">IZIN</th>
                        <th class="text-center">ALPHA</th>
                        <th class="text-center">JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rekapData as $data) : ?>
                        <tr>
                            <td><?= $data['no']; ?></td>
                            <td><?= $data['bulan']; ?></td>
                            <td><?= $data['kelompok']; ?></td>
                            <td><?= $data['jumSiswa']; ?></td>
                            <td><?= $data['sakit']; ?></td>
                            <td><?= $data['izin']; ?></td>
                            <td><?= $data['alpha']; ?></td>
                            <td><?= $data['jumAbsen']; ?></td>
                            <td><?= $data['persentase']; ?></td>
                            <td><?= $data['keterangan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
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
