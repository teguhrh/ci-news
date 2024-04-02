<?php namespace App\Models;

use CodeIgniter\Model;

class RekapModel extends Model
{
    protected $table = 'AbsenRekap';
    protected $primaryKey = 'no';
    protected $allowedFields = ['no', 'bulan', 'kelompok', 'jumSiswa', 'sakit', 'izin', 'alpha', 'jumAbsen', 'persentase', 'keterangan'];
    protected $useAutoIncrement = true;

    protected $validationRules = [
        'no'    => 'required',
        'bulan'    => 'required',
        'kelompok' => 'required',
        'jumSiswa' => 'required',
        'jumAbsen' => 'required',
        'persentase' => 'required',
        'keterangan' => 'required',
    ];


    protected $validationMessages = [
        'no' => [
            'is_unique' => 'Nomor Induk Siswa sudah digunakan.',
        ],
    ];
    protected $skipValidation = false;
}
