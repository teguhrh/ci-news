<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormulirrModel;

class FormulirrController extends Controller
{
    public function index()
    {
        $formulirrModel = new FormulirrModel();

        // Example queries
        $data = [
            'posts' => $formulirrModel->paginate(2, 'formulirr'), // Jika 'post' adalah nama tabel formulirModelModel
            'pager' => $formulirrModel->pager,
            'formulirrData' => $formulirrModel->findAll(),
        ];

        return view('formulirr/index', $data);
    }
    public function create()
    {
        return view('formulirr/create');
    }
    public function store()
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'ibu' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'bapak' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'tempat_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'kelamin' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'agama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'anak_ke' => [
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
            ]
        ]);

        if (!$validation) {
            return view('formulirr/create', [
                'validation' => $this->validator
            ]);
        } else {
            $formulirrModel = new FormulirrModel();

            $formulirrModel->insert([
                'nama'             => $this->request->getPost('nama'),
                'ibu'            => $this->request->getPost('ibu'),
                'bapak'     => $this->request->getPost('bapak'),
                'tempat_lahir'             => $this->request->getPost('tempat_lahir'),
                'kelamin'    => $this->request->getPost('kelamin'),
                'agama'              => $this->request->getPost('agama'),
                'anak_ke'      => $this->request->getPost('anak_ke'),
                'kewarganegaraan'         => $this->request->getPost('kewarganegaraan'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('formulirr'));
        }
    
    }
    public function edit($id)
    {
        // Model initialize
        $formulirrModel = new FormulirrModel();

        $data = [
        'formulirr' => $formulirrModel->find($id)
        ];

        return view('formulirr/edit', $data);
    }

    public function update($id)
    {
        // Load helper form and URL
        helper(['form', 'url']);
     
        // Define validation
        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'ibu' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'bapak' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'tempat_lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'kelamin' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'agama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'anak_ke' => [
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
            ]
        ]);

        if (!$validation) {
            return view('formulirr/edit', [
                'validation' => $this->validator
            ]);
        } else {
            $formulirrModel = new FormulirrModel();

            $formulirrModel->insert([
                'nama'             => $this->request->getPost('nama'),
                'ibu'            => $this->request->getPost('ibu'),
                'bapak'     => $this->request->getPost('bapak'),
                'tempat_lahir'             => $this->request->getPost('tempat_lahir'),
                'kelamin'    => $this->request->getPost('kelamin'),
                'agama'              => $this->request->getPost('agama'),
                'anak_ke'      => $this->request->getPost('anak_ke'),
                'kewarganegaraan'         => $this->request->getPost('kewarganegaraan'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('formulirr'));
        }
    
    }
    public function delete($id)
    {
    // Model initialize
    $formulirrModel = new FormulirrModel();

    $formulirr = $formulirrModel->find($id);

    if ($formulirr) {
        $formulirrModel->delete($id);

        // Flash message
        session()->setFlashdata('message', 'Post Berhasil Dihapus');

        return redirect()->to(base_url('formulirr'));
        }
    }
}