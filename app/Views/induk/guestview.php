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
        <a class="navbar-brand" href="<?= base_url('admin') ?>">BUKU INDUK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                     <a class="navbar-brand" href="/home">HOME</a>
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
