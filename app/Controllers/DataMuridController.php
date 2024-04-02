<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DataMuridModel;

class DataMuridController extends Controller
{
    public function index()
    {
        $datamuridModel = new DataMuridModel();

        // Example queries
        $data = [
            'posts' => $datamuridModel->paginate(2, 'datamurid'), // Jika 'post' adalah nama tabel DataMuridModelModel
            'pager' => $datamuridModel->pager,
            'datamuridData' => $datamuridModel->findAll(),
        ];

        return view('datamurid/index', $data);
    }
    public function add()
    {
        return view('datamurid/add');
    }
    public function store()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'no_urut' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'nama_murid' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'kelamin' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'nama_orang_tua' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'nomor_daftar_induk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tgl_masuk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tgl_keluar' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'alasan_keluar' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'buku_di_ke' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ]
        ]);

        if (!$validation) {
            return view('datamurid/add', [
                'validation' => $this->validator
            ]);
        } else {
            $datamuridModel = new DataMuridModel();

            $datamuridModel->insert([
                'no_urut'             => $this->request->getPost('no_urut'),
                'nama_murid'            => $this->request->getPost('nama_murid'),
                'kelamin'     => $this->request->getPost('kelamin'),
                'nama_orang_tua'             => $this->request->getPost('nama_orang_tua'),
                'nomor_daftar_induk'    => $this->request->getPost('nomor_daftar_induk'),
                'tgl_masuk'              => $this->request->getPost('tgl_masuk'),
                'tgl_keluar'      => $this->request->getPost('tgl_keluar'),
                'alasan_keluar'         => $this->request->getPost('alasan_keluar'),
                'buku_di_ke'         => $this->request->getPost('buku_di_ke'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('datamurid'));
        }
    
    }
    public function edit($id)
    {
        // Model initialize
        $datamuridModel = new DataMuridModel();

        $data = [
        'datamurid' => $datamuridModel->find($id)
        ];

        return view('datamurid/edit', $data);
    }

    public function update($id)
    {
        // Load helper form and URL
        helper(['form', 'url']);
     
        // Define validation
        $validation = $this->validate([
            'no_urut' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'nama_murid' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'kelamin' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'nama_orang_tua' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'nomor_deftar_induk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tgl_masuk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tgl_keluar' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'alasan_keluar' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'buku_di_ke' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ]
        ]);

        if (!$validation) {
            return view('datamurid/formulir', [
                'validation' => $this->validator
            ]);
        } else {
            $datamuridModel = new DataMuridModel();

            $datamuridModel->insert([
                'no_urut'             => $this->request->getPost('no_urut'),
                'nama_murid'            => $this->request->getPost('nama_murid'),
                'kelamin'     => $this->request->getPost('kelamin'),
                'nama_orang_tua'             => $this->request->getPost('nama_orang_tua'),
                'nomor_daftar_induk'    => $this->request->getPost('nomor_daftar_induk'),
                'tgl_masuk'              => $this->request->getPost('tgl_masuk'),
                'tgl_keluar'      => $this->request->getPost('tgl_keluar'),
                'alasan_keluar'         => $this->request->getPost('alasan_keluar'),
                'buku_di_ke'         => $this->request->getPost('buku_di_ke'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('datamurid'));
        }
    
    }
    public function delete($id)
    {
    // Model initialize
    $datamuridModel = new DataMuridModel();

    $datamurid = $datamuridModel->find($id);

    if ($datamurid) {
        $datamuridModel->delete($id);

        // Flash message
        session()->setFlashdata('message', 'Post Berhasil Dihapus');

        return redirect()->to(base_url('datamurid'));
        }
    }
}