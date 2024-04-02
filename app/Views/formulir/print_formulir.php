<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <table>
        <tr>
            <th rowspan="2">N0</th>
            <th rowspan="2">NAMA_LENGKAP</th>
                        <th colspan="2">NAMA ORANG TUA</th>
                        <th rowspan="2">TEMPAT TGL LAHIR</th>
                        <th rowspan="2">JENIS KELAMIN</th>
                        <th rowspan="2">AGAMA</th>
                        <th rowspan="2">ANAk_KE</th>
                        <th rowspan="2">JUMLAH SAUDARA</th>
                        <th rowspan="2">KEWARGANEGARAAN</th>
                        <th rowspan="2">AKSI</th>
                        </tr>
                        <tr>
                            <th>IBU</th>
                            <th>BAPAK</th>
</tr>

<?php
$no = 1;
foreach ($anakPaud as $formulir): // Mengubah $mahasiswa menjadi $anakPaud
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $formulir->nama_Lengkap ?></td> <!-- Mengubah $formulir['nama_Lengkap'] menjadi $formulir->nama_Lengkap -->
        <td><?php echo $formulir->nama_Ibu ?></td> <!-- Ganti sesuai dengan nama kolom pada database -->
        <td><?php echo $formulir->nama_Bapak ?></td> <!-- Ganti sesuai dengan nama kolom pada database -->
        <td><?php echo $formulir->tempat_Tanggal_Lahir ?></td>
        <td><?php echo $formulir->jenis_Kelamin ?></td>
        <td><?php echo $formulir->agama ?></td>
        <td><?php echo $formulir->anak_Ke ?></td>
        <td><?php echo $formulir->jumlah_Saudara ?></td>
        <td><?php echo $formulir->kewarganegaraan ?></td>
    </tr>
<?php endforeach; ?>

        </table>
        
        <script type="text/javascript">
            window.print();
        </script>
        </body>
        </html>            