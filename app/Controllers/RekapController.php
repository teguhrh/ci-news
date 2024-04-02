<?php

namespace App\Controllers;

use App\Models\RekapModel;
use CodeIgniter\Controller;

helper(['form']);

class RekapController extends Controller
{
    public function index()
{
    $RekapModel = new RekapModel();
    $data['rekapData'] = $RekapModel->findAll();
    return view('rekap/index', $data);
}

public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Rekap',
            'validation' => \Config\Services::validation()
        ];

        return view('rekap/create', $data);
    }

    public function store()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'no'=> 'required',
            'bulan' => 'required',
            'kelompok' => 'required',
            'jumSiswa' => 'required|numeric',
            'sakit' => 'required|numeric',
            'izin' => 'required|numeric',
            'alpha' => 'required|numeric',
            'jumAbsen' => 'required',
            'persentase' => 'required',
        ]);

        // Run validation
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/rekap/create')->withInput()->with('validation', $validation);
        }

        // Proses menyimpan data ke database
        $rekapModel = new RekapModel();

        // Ambil data dari formulir
        $data = [
            'no' => $this->request->getPost('no'),
            'bulan' => $this->request->getPost('bulan'),
            'kelompok' => $this->request->getPost('kelompok'),
            'jumSiswa' => $this->request->getPost('jumSiswa'),
            'sakit' => $this->request->getPost('sakit'),
            'izin' => $this->request->getPost('izin'),
            'alpha' => $this->request->getPost('alpha'),
            'jumAbsen' => $this->request->getPost('jumAbsen'),
            'persentase' => $this->request->getPost('persentase'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        try {
            // Coba simpan data ke dalam database
            $rekapModel->insert($data);
            
            // Redirect ke halaman create jika berhasil disimpan
            return redirect()->to('/rekap')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            // Tangkap exception jika terjadi kesalahan primary key
            return redirect()->to('/rekap/create')->withInput()->with('error', 'Primary key sudah ada. Data dengan kelompok tersebut sudah ada.');
        }
    }

    public function edit($no)
{
    $RekapModel = new RekapModel();
    $data['rekapData'] = $RekapModel->find($no);
    $data['no'] = $data['rekapData']['no']; // Assuming the column name is 'nis'

    return view('rekap/edit', $data);
}

public function update($no)
{
    $RekapModel = new RekapModel(); // Change this line

    // Ambil data yang dikirimkan dari formulir
    $dataToUpdate = [
        'no' => $this->request->getPost('no'),
        'bulan' => $this->request->getPost('bulan'),
        'kelompok' => $this->request->getPost('kelompok'),
        'jumSiswa' => $this->request->getPost('jumSiswa'),
        'sakit' => $this->request->getPost('sakit'),
        'izin' => $this->request->getPost('izin'),
        'alpha' => $this->request->getPost('alpha'),
        'jumAbsen' => $this->request->getPost('jumAbsen'),
        'persentase' => $this->request->getPost('persentase'),
    ];

    // Lakukan validasi data
    if ($this->validate([
        'no'=> 'required',
        'bulan' => 'required',
        'kelompok' => 'required',
        'jumSiswa' => 'required|numeric',            
        'sakit' => 'required|numeric',
        'izin' => 'required|numeric',
        'alpha' => 'required|numeric',
        'jumAbsen' => 'required',
        'persentase' => 'required',
    ])) {
        // Lakukan update data
        $RekapModel->update($no, $dataToUpdate); // Change this line

        // Redirect dengan pesan sukses
        return redirect()->to('/rekap')->with('success', 'Data absensi berhasil diperbarui');
    } else {
        // Redirect dengan pesan error
        return redirect()->to("/rekap/edit/$no")->withInput()->with('validation', $this->validator);
    }
}

    public function delete($no)
    {
        $RekapModel = new RekapModel();
        $RekapModel->delete($no);

        $data['no'] = $no; // Pass the $nis variable to the view

        return redirect()->to('/rekap')->with('success', 'Data Rekap berhasil dihapus');
    }

    public function guestView()
    {
        // Load and display the view for guests without form actions
        $rekapModel = new RekapModel();
        $data['rekapData'] = $rekapModel->findAll();

        return view('rekap/guestView', $data);
    }


}