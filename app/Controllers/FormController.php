<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FormModel;

class Form extends BaseController
{
	public function index()
	{
		$form = new FormModel();
		$data['form'] = $form->findAll();
		return view('form/index', $data);
	}

	public function create()
	{
		return view('form/create');
	}

	public function save()
	{
		if (!$this->validate([
			
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
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]

			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}

		$form = new FormModel();
		$dataForm = $this->request->getFile('form');
		$fileName = $dataForm->getRandomName();
		$form->insert([
            'nama_lengkap'          => $this->request->getPost('nama_lengkap'),
                'nama_ayah'             => $this->request->getPost('nama_ayah'),
                'nama_ibu'              => $this->request->getPost('nama_ibu'),
                'tempat_tanggal_lahir'  => $this->request->getPost('tempat_tanggal_lahir'),
                'jenis_kelamin'         => $this->request->getPost('jenis_kelamin'),
                'agama'                 => $this->request->getPost('agama'),
                'anak_ke'               => $this->request->getPost('anak_ke'),
                'jumlah_saudara'        => $this->request->getPost('jumlah_saudara'),
                'kewarganegaraan'       => $this->request->getPost('kewarganegaraan'),
			'berkas' => $fileName,
            
		]);
		$dataForm->move('uploads/form/', $fileName);
		session()->setFlashdata('success', 'Borm Berhasil diupload');
		return redirect()->to(base_url('form'));
	}
    function download($id)
	{
		$form = new FormModel();
		$data = $form->find($id);
		return $this->response->download('uploads/form/' . $data->form, null);
	}
}