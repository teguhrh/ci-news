<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PaudModel;

class PaudController extends Controller
{
    public function tess()
    {
        $paudModel = new PaudModel();

        $data = [
            'posts' => $paudModel->paginate(2, 'paud'), 
            'pager' => $paudModel->pager,
            'paudData' => $paudModel->findAll(),
        ];

        return view('Paud/tess', $data);
    }
    public function formulir()
    {
        return view('paud/formulir');
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
            'no_induk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'nama_siswa_baru' => [
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
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tempat_tinggal' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'ditempatkan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ]
        ]);

        if (!$validation) {
            return view('paud/formulir', [
                'validation' => $this->validator
            ]);
        } else {
            $paudModel = new PaudModel();

            $paudModel->insert([
                'no_urut'             => $this->request->getPost('no_urut'),
                'no_induk'            => $this->request->getPost('no_induk'),
                'nama_siswa_baru'     => $this->request->getPost('nama_siswa_baru'),
                'kelamin'             => $this->request->getPost('kelamin'),
                'tempat_tgl_lahir'    => $this->request->getPost('tempat_tgl_lahir'),
                'alamat'              => $this->request->getPost('alamat'),
                'tempat_tinggal'      => $this->request->getPost('tempat_tinggal'),
                'ditempatkan'         => $this->request->getPost('ditempatkan'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('paud'));
        }
    
    }
    public function edit($id)
    {
        // Model initialize
        $paudModel = new PaudModel();

        $data = [
        'paud' => $paudModel->find($id)
        ];

        return view('paud/edit', $data);
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
            'no_induk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'nama_siswa_baru' => [
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
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'alamat' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'tempat_tinggal' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'ditempatkan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ]
    ]);

    if (!$validation) {
        
        $paudModel = new PaudModel();

        
        return view('paud/edit', [
            'paud' => $paudModel->find($id),
            'validation' => $this->validator
        ]);
    } else {
        // Model initialize
        $paudModel = new PaudModel();
        
        // Update data in the database
        $paudModel->update($id, [
                'no_urut'             => $this->request->getPost('no_urut'),
                'no_induk'            => $this->request->getPost('no_induk'),
                'nama_siswa_baru'     => $this->request->getPost('nama_siswa_baru'),
                'kelamin'             => $this->request->getPost('kelamin'),
                'tempat_tgl_lahir'    => $this->request->getPost('tempat_tgl_lahir'),
                'alamat'              => $this->request->getPost('alamat'),
                'tempat_tinggal'      => $this->request->getPost('tempat_tinggal'),
                'ditempatkan'         => $this->request->getPost('ditempatkan'),
            
        ]);

        // Flash message
        session()->setFlashdata('message', 'Post Berhasil Diupdate');

        return redirect()->to(base_url('paud'));
    }
    }

    public function delete($id)
    {
    // Model initialize
    $paudModel = new PaudModel();

    $paud = $paudModel->find($id);

    if ($paud) {
        $paudModel->delete($id);

        // Flash message
        session()->setFlashdata('message', 'Post Berhasil Dihapus');

        return redirect()->to(base_url('paud'));
        }
    }
}