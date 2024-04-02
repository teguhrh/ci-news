<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IndukModel;

class IndukController extends Controller
{
    public function index()
    {
        $indukModel = new IndukModel();

        // Example queries
        $data = [
            'posts' => $indukModel->paginate(2, 'induk'), // Jika 'post' adalah nama tabel indukModelModel
            'pager' => $indukModel->pager,
            'indukData' => $indukModel->findAll(),
        ];

        return view('induk/index', $data);
    }
    public function create()
    {
        return view('induk/create');
    }
    public function store()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'lengkap' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'panggilan' => [
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
            'tempat_tgl_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'agama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'kewarganegaraan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'jumlah_saudara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'bahasa' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'berat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tinggi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'telepon' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tinggal' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'jarak' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ]
        ]);

        if (!$validation) {
            return view('induk/create', [
                'validation' => $this->validator
            ]);
        } else {
            $indukModel = new IndukModel();

            $indukModel->insert([
                'lengkap'             => $this->request->getPost('lengkap'),
                'panggilan'            => $this->request->getPost('panggilan'),
                'kelamin'     => $this->request->getPost('kelamin'),
                'tempat_tgl_lahir'             => $this->request->getPost('tempat_tgl_lahir'),
                'agama'    => $this->request->getPost('agama'),
                'kewarganegaraan'              => $this->request->getPost('kewarganegaraan'),
                'jumlah_saudara'      => $this->request->getPost('jumlah_saudara'),
                'bahasa'         => $this->request->getPost('bahasa'),
                'berat'         => $this->request->getPost('berat'),
                'tinggi'         => $this->request->getPost('tinggi'),
                'alamat'         => $this->request->getPost('alamat'),
                'telepon'         => $this->request->getPost('telepon'),
                'tinggal'         => $this->request->getPost('tinggal'),
                'jarak'         => $this->request->getPost('jarak'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('induk'));
        }
    
    }
    public function edit($id)
    {
        // Model initialize
        $indukModel = new IndukModel();

        $data = [
        'induk' => $indukModel->find($id)
        ];

        return view('induk/edit', $data);
    }

    public function update($id)
    {
        // Load helper form and URL
        helper(['form', 'url']);
     
        // Define validation
        $validation = $this->validate([
            'lengkap' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'panggilan' => [
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
            'tempat_tgl_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'agama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'kewarganegaraan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'jumlah_saudara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'bahasa' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'berat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tinggi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'telepon' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tinggal' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'jarak' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ]
        ]);

        if (!$validation) {
            return view('induk/edit', [
                'validation' => $this->validator
            ]);
        } else {
            $indukModel = new IndukModel();

            $indukModel->insert([
                'lengkap'             => $this->request->getPost('lengkap'),
                'panggilan'            => $this->request->getPost('panggilan'),
                'kelamin'     => $this->request->getPost('kelamin'),
                'tempat_tgl_lahir'             => $this->request->getPost('tempat_tgl_lahir'),
                'agama'    => $this->request->getPost('agama'),
                'kewarganegaraan'              => $this->request->getPost('kewarganegaraan'),
                'jumlah_saudara'      => $this->request->getPost('jumlah_saudara'),
                'bahasa'         => $this->request->getPost('bahasa'),
                'berat'         => $this->request->getPost('berat'),
                'tinggi'         => $this->request->getPost('tinggi'),
                'alamat'         => $this->request->getPost('alamat'),
                'telepon'         => $this->request->getPost('telepon'),
                'tinggal'         => $this->request->getPost('tinggal'),
                'jarak'         => $this->request->getPost('jarak'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('induk'));
        }
    
    }
    public function delete($id)
    {
    // Model initialize
    $indukModel = new IndukModel();

    $induk = $indukModel->find($id);

    if ($induk) {
        $indukModel->delete($id);

        // Flash message
        session()->setFlashdata('message', 'Post Berhasil Dihapus');

        return redirect()->to(base_url('induk'));
        }
    }

    public function guestView()
    {
        $indukModel = new IndukModel();
        $data['indukData'] = $indukModel->findAll();
    
        return view('induk/guestview', $data);
    }
}
