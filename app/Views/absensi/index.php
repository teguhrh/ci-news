<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- jsPDF Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <title>Data Rekap Absensi Bulanan</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- Navigation content -->
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="home">HOME</a>
    <a class="navbar-brand" href="rekap">Rekap Absen Bulanan</a>

    


    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
            <span class="navbar-text text-center display-4">DATA ABSENSI</span>
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



    <div class="container mt-5 ml-3">
        <div class="row">
            <div class="col-md-6">
                <a href="absensi/create" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">


                
    <table class="table table-bordered">
        <thead class="bg-dark text-white">
        <tr>
            <th rowspan="2"class="text-center">Bulan</th>
            <th rowspan="2"class="text-center">NIS</th>
            <th rowspan="2"class="text-center">Nama</th>
            <th colspan="31"class="text-center">Tanggal</th>
            <th rowspan="2"class="text-center">Hadir</th>
            <th rowspan="2"class="text-center">Sakit</th>
            <th rowspan="2"class="text-center">Izin</th>
            <th rowspan="2"class="text-center">Alpha</th>
            <th rowspan="2"class="text-center">Aksi</th>
        </tr>
    <tr>
        <?php for ($i = 1; $i <= 31; $i++) : ?>
            <th><?= $i; ?></th>
        <?php endfor; ?>
    </tr>
</thead>
<tbody>
    <?php foreach($absensiData as $data): ?>
        <tr>
            <td><?= $data['bulan']; ?></td>
            <td><?= $data['nis']; ?></td>
            <td><?= $data['nama']; ?></td>
            <?php for ($i = 1; $i <= 31; $i++) : ?>
                <td><?= $data['tgl_' . $i]; ?></td>
            <?php endfor; ?>
            <td><?= $data['hadir']; ?></td>
            <td><?= $data['sakit']; ?></td>
            <td><?= $data['izin']; ?></td>
            <td><?= $data['alpha']; ?></td>
            <td>
                <a href="/absensi/edit/<?= $data['nis']; ?>" class="btn btn-primary">Edit</a>
                <a href="/absensi/delete/<?= $data['nis']; ?>" class="btn btn-danger" onclick="return confirmDelete();">Delete</a>
                
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
    </table>
</div>

                
        </div>
    </div>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Flash message and table content -->
            <button class="btn btn-primary mb-3" onclick="printPDF()">Cetak PDF</button>
            <table id="absensiTable" class="table table-bordered">
                <!-- Table content -->
            </table>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    function printPDF() {
        var doc = new jsPDF();
        doc.text("Data Rekap Absensi Bulanan", 10, 10);
        doc.autoTable({html: '#absensiTable'});
        doc.save('rekap_absensi.pdf');
    }
</script>
</body>
</html>