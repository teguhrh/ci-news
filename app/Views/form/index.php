<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Formulir List</h2>
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif; ?>
        <a href="<?= base_url('formulirrr/create') ?>" class="btn btn-primary mb-3">Add New Formulir</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Anak Ke</th>
                    <th>Jumlah Saudara</th>
                    <th>Kewarganegaraan</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pendaftarans) && is_array($pendaftarans)) : ?>
                    <?php foreach ($pendaftarans as $key => $data) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $data['nama_lengkap'] ?></td>
                            <td><?= $data['nama_ayah'] ?></td>
                            <td><?= $data['nama_ibu'] ?></td>
                            <td><?= $data['tempat_tanggal_lahir'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['agama'] ?></td>
                            <td><?= $data['anak_ke'] ?></td>
                            <td><?= $data['jumlah_saudara'] ?></td>
                            <td><?= $data['kewarganegaraan'] ?></td>
                            <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/uploads/berkas/" . $row->berkas; ?>"></td>
                            <td>
                                <a class="btn btn-info" href="<?= base_url(); ?>/berkas/download/<?= $row->id_berkas; ?>">Download</a>
                                <a href="<?= base_url('formulirrr/edit/' . $data['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('formulirrr/delete/' . $data['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="11">No records found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?= $pager->links() ?>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
