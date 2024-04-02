<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormulirModel;

class FormulirController extends Controller
{
    public function index()
    {
        $formulirModel = new FormulirModel();

        // Example queries
        $data = [
            'posts' => $formulirModel->paginate(2, 'formulir'), // Jika 'post' adalah nama tabel formulirModelModel
            'pager' => $formulirModel->pager,
            'formulirData' => $formulirModel->findAll(),
        ];

        return view('formulir/index', $data);
    }
    public function create()
    {
        return view('formulir/create');
    }
    public function store()
    {
        helper(['form', 'url']);

        $fileFoto = $this->request->getFile('foto');
        dd($fileFoto);

        $validation = $this->validate([
            'nama_Lengkap' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'nama_Panggilan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'tempat_Tanggal_Lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'jenis_Kelamin' => [
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
            'anak_Ke' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'jumlah_Saudara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'status_Keluarga' => [
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
            'foto'=>'uploaded[foto]'

        ]);

        if (!$validation) {
            return view('formulir/create', [
                'validation' => $this->validator
            ]);
        } else {
            $formulirModel = new FormulirModel();

            $formulirModel->insert([
                'nama_Lengkap'             => $this->request->getPost('nama_Lengkap'),
                'nama_Panggilan'            => $this->request->getPost('nama_Panggilan'),
                'tempat_Tanggal_Lahir'     => $this->request->getPost('tempat_Tanggal_Lahir'),
                'jenis_Kelamin'             => $this->request->getPost('jenis_Kelamin'),
                'agama'    => $this->request->getPost('agama'),
                'anak_Ke'              => $this->request->getPost('anak_Ke'),
                'jumlah_Saudara'      => $this->request->getPost('jumlah_Saudara'),
                'status_Keluarga'         => $this->request->getPost('status_Keluarga'),
                'kewarganegaraan'         => $this->request->getPost('kewarganegaraan'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('formulir'));
        }
    
    }
    public function edit($id)
    {
        // Model initialize
        $formulirModel = new FormulirModel();

        $data = [
        'formulir' => $formulirModel->find($id)
        ];

        return view('formulir/edit', $data);
    }

    public function update($id)
    {
        // Load helper form and URL
        helper(['form', 'url']);
     
        // Define validation
        $validation = $this->validate([
            'nama_Lengkap' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'nama_Panggilan' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'tempat_Tanggal_Lahir' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
            'jenis_Kelamin' => [
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
            'anak_Ke' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'jumlah_Saudara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Konten Post.'
                ]
            ],
            'status_Keluarga' => [
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
            return view('formulir/edit', [
                'validation' => $this->validator
            ]);
        } else {
            $formulirModel = new FormulirModel();

            $formulirModel->insert([
                'nama_Lengkap'          => $this->request->getPost('nama_Lengkap'),
                'nama_Panggilan'        => $this->request->getPost('nama_Panggilan'),
                'tempat_Tanggal_Lahir'  => $this->request->getPost('tempat_Tanggal_Lahir'),
                'jenis_Kelamin'         => $this->request->getPost('jenis_Kelamin'),
                'agama'                 => $this->request->getPost('agama'),
                'anak_Ke'               => $this->request->getPost('anak_Ke'),
                'jumlah_Saudara'        => $this->request->getPost('jumlah_Saudara'),
                'status_Keluarga'       => $this->request->getPost('status_Keluarga'),
                'kewarganegaraan'       => $this->request->getPost('kewarganegaraan'),
            ]);
            
            session()->setFlashdata('message', 'Post Berhasil Disimpan');

            return redirect()->to(base_url('formulir'));
        }
    
    }
    public function delete($id)
    {
    // Model initialize
    $formulirModel = new FormulirModel();

    $formulir = $formulirModel->find($id);

    if ($formulir) {
        $formulirModel->delete($id);

        // Flash message
        session()->setFlashdata('message', 'Post Berhasil Dihapus');

        return redirect()->to(base_url('formulir'));
        }
    }



    public function print()
    {
        $formulirModel = new FormulirModel();
        $data['anakPaud'] = $formulirModel->tampil_data("formulir")->result(); // Menggunakan metode result()
        $this->load->view('/formulir/print_formulir', $data);
    }

    

    public function pdf(){
        $this->load->library('dompdf_gen');

        $data['formulir'] = $this->formulirModel->tampil_data('formulir')->result();

        $this->load->view('formulir_pdf',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("formulir_pendaftaran.pdf", array('Attachment' =>0));
    }
}