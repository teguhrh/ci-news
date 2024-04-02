<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use CodeIgniter\Controller;

helper(['form']);

class AbsensiController extends Controller
{
    public function index()
    {
        $AbsensiModel = new AbsensiModel();
        $data['absensiData'] = $AbsensiModel->findAll();

        return view('absensi/index', $data);
    }

    public function create()
    {
        $data = [
            'title'=> 'Form Tambah Data Absensi',
            'validation' => \config\Services::validation()
        ];
        // Menampilkan halaman create
        return view('absensi/create', $data);
    }

    public function store()
    {
    // Validasi input
    $validation = \Config\Services::validation();
    $validation->setRules([
        'bulan' => 'required',
        'nis' => 'required',
        'nama' => 'required',
        'hadir' => 'required',
        'sakit' => 'required',
        'izin' => 'required',
        'alpha' => 'required',
    ]);

    // Run validation
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->to('/absensi/create')->withInput()->with('validation', $validation);
    }

    // Proses menyimpan data ke database
    $absensiModel = new \App\Models\AbsensiModel();

    // Ambil data dari formulir
    $nis = $this->request->getPost('nis');
    $bulan = $this->request->getPost('bulan');
    $nama = $this->request->getPost('nama');
    $hadir = $this->request->getPost('hadir');
    $sakit = $this->request->getPost('sakit');
    $izin = $this->request->getPost('izin');
    $alpha = $this->request->getPost('alpha');

    // Data untuk tanggal 1 sampai 31
    $status = $this->request->getPost('status');

    // Simpan data ke dalam database
    $data = [
        'nis' => $nis,
        'bulan' => $bulan,
        'nama' => $nama,
        'hadir' => $hadir,
        'sakit' => $sakit,
        'izin' => $izin,
        'alpha' => $alpha,
    ];

    // Tambahkan data status absensi ke dalam array
    for ($i = 1; $i <= 31; $i++) {
        $data["tgl_$i"] = isset($status[$i]) ? $status[$i] : null;
    }

    // Simpan data ke dalam database
    $absensiModel->insert($data);

    // Redirect ke halaman create jika berhasil disimpan
    return redirect()->to('/absensi')->with('success', 'Data berhasil disimpan');
    }

    public function edit($nis)
{
    $AbsensiModel = new AbsensiModel();
    $data['absenData'] = $AbsensiModel->find($nis);
    $data['nis'] = $data['absenData']['nis'];

    return view('absensi/edit', $data);
}

public function update($nis)
{
    $AbsensiModel = new AbsensiModel();

    if ($this->validate([
        'bulan' => 'required',
        'nis' => 'required',
        'nama' => 'required',
        'hadir' => 'required',
        'sakit' => 'required',
        'izin' => 'required',
        'alpha' => 'required',
    ])) {
        // Ambil data status dari form
        $dataToUpdate = [
            'bulan' => $this->request->getPost('bulan'),
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'hadir' => $this->request->getPost('hadir'),
            'sakit' => $this->request->getPost('sakit'),
            'izin' => $this->request->getPost('izin'),
            'alpha' => $this->request->getPost('alpha'),
        ];

        // Tambahkan status untuk setiap tanggal
        for ($i = 1; $i <= 31; $i++) {
            $fieldName = 'tgl_' . $i;
            $dataToUpdate[$fieldName] = $this->request->getPost($fieldName);
        }

        $AbsensiModel->update($nis, $dataToUpdate);

        return redirect()->to('/absensi')->with('success', 'Data absensi berhasil diperbarui');
    } else {
        return redirect()->to("/absensi/edit/$nis")->withInput()->with('errors', $this->validator->getErrors());
    }
}

public function delete($nis)
{
    $AbsensiModel = new AbsensiModel();
    $AbsensiModel->delete($nis);

    $data['nis'] = $nis; // Pass the $nis variable to the view

        return redirect()->to('/absensi')->with('success', 'Data absensi berhasil dihapus');
    }

    public function guestView()
    {
        $absensiModel = new AbsensiModel();
        $data['absensiData'] = $absensiModel->findAll();
    
        return view('absensi/guestview', $data);
    }


}
