<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;

class FormulirrrController extends BaseController
{
    protected $pendaftaranModel;

    public function __construct()
    {
        $this->pendaftaranModel = new PendaftaranModel();
    }

    public function index()
    {
        $pendaftaranModel = new PendaftaranModel();
        $formulirrrData = $this->pendaftaranModel->findAll();

        foreach ($formulirrrData as $index => $formulirrr) {
        $formulirrrData[$index]['foto_path'] = base_url('public/uploads/' . $formulirrr['foto']);
        }

        $data = [
        'pendaftarans' => $pendaftaranModel->paginate(5),
        'pager' => $pendaftaranModel->pager,
        'formulirrrData' => $formulirrrData,
        ];

        return view('formulirrr/index', $data);
    }

    public function create()
    {
        return view('formulirrr/create');
    }

    public function store()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'nama_lengkap' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Lengkap.'
                ]
            ],
            // ... (keep the other validation rules)
            'foto' => [
                'rules'  => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]',
                'errors' => [
                    'uploaded' => 'Masukkan foto.',
                    'mime_in'  => 'Format foto harus JPG, JPEG, GIF, atau PNG.',
                    'max_size' => 'Ukuran foto tidak boleh lebih dari 4 MB.'
                ]
            ]
        ]);

        if (!$validation) {
            return view('formulirrr/create', [
                'validation' => $this->validator
            ]);
        } else {
            $fotoName = $this->request->getFile('foto')->getName();
            $fotoPath = 'uploads/' . $fotoName;
            $this->request->getFile('foto')->move(WRITEPATH . 'uploads', $fotoName);


            $data = [
                'nama_lengkap'          => $this->request->getPost('nama_lengkap'),
                'nama_ayah'             => $this->request->getPost('nama_ayah'),
                'nama_ibu'              => $this->request->getPost('nama_ibu'),
                'tempat_tanggal_lahir'  => $this->request->getPost('tempat_tanggal_lahir'),
                'jenis_kelamin'         => $this->request->getPost('jenis_kelamin'),
                'agama'                 => $this->request->getPost('agama'),
                'anak_ke'               => $this->request->getPost('anak_ke'),
                'jumlah_saudara'        => $this->request->getPost('jumlah_saudara'),
                'kewarganegaraan'       => $this->request->getPost('kewarganegaraan'),
                'foto'                  => $fotoPath
            ];

            $this->pendaftaranModel->insert($data);

            session()->setFlashdata('message', 'Data berhasil disimpan');

            return redirect()->to(base_url('formulirrr'));
        }
    }

    public function edit($id)
    {
        $data = [
            'pendaftaran' => $this->pendaftaranModel->find($id)
        ];

        return view('formulirrr/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        $valid = $validation->withRequest($this->request)->run();

        if ($valid) {
            $fotoName = $this->request->getFile('foto')->getName();
            if ($fotoName !== '') {
                $fotoPath = 'uploads/' . $fotoName;
                $this->request->getFile('foto')->move(WRITEPATH . 'uploads', $fotoName);

                $data = [
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'nama_ayah' => $this->request->getPost('nama_ayah'),
                    'nama_ibu' => $this->request->getPost('nama_ibu'),
                    'tempat_tanggal_lahir' => $this->request->getPost('tempat_tanggal_lahir'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'agama' => $this->request->getPost('agama'),
                    'anak_ke' => $this->request->getPost('anak_ke'),
                    'jumlah_saudara' => $this->request->getPost('jumlah_saudara'),
                    'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                    'foto' => $fotoPath,
                ];
            } else {
                $data = [
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'nama_ayah' => $this->request->getPost('nama_ayah'),
                    'nama_ibu' => $this->request->getPost('nama_ibu'),
                    'tempat_tanggal_lahir' => $this->request->getPost('tempat_tanggal_lahir'),
                    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                    'agama' => $this->request->getPost('agama'),
                    'anak_ke' => $this->request->getPost('anak_ke'),
                    'jumlah_saudara' => $this->request->getPost('jumlah_saudara'),
                    'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                ];
            }

            $this->pendaftaranModel->update($id, $data);
            session()->setFlashdata('message', 'Formulir updated successfully');
            return redirect()->to(base_url('formulirrr'));
        }

        $data = [
            'validation' => $this->validator,
            'formulir' => $this->pendaftaranModel->find($id),
        ];

        return view('formulirrr/edit', $data);
    }

public function delete($id)
{
    // Delete the foto if it exists
    $pendaftaran = $this->pendaftaranModel->find($id);
    if ($pendaftaran && $pendaftaran['foto'] !== '') {
        unlink(WRITEPATH . $pendaftaran['foto']);
    }

    $this->pendaftaranModel->delete($id);

    session()->setFlashdata('message', 'Data berhasil dihapus');

    return redirect()->to(base_url('formulirrr'));
}


public function download($id)
{
    $pendaftaran = $this->pendaftaranModel->find($id);
    $fotoPath = WRITEPATH . 'uploads/' . $pendaftaran['foto'];

    // Periksa apakah file gambar ada dan dapat diakses
    if (file_exists($fotoPath)) {
        // Tentukan jenis konten sebagai gambar
        header('Content-Type: image/jpeg');
        header('Content-Disposition: attachment; filename="' . $pendaftaran['foto'] . '"');

        // Baca dan kirimkan isi file
        readfile($fotoPath);
        exit();
    } else {
        // Jika file tidak ditemukan, tampilkan pesan kesalahan
        echo "File not found";
        exit();
    }
}


}