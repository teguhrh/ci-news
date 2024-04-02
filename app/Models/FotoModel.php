<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'foto';
	protected $primaryKey           = 'id_foto';
	protected $returnType           = 'object';
	protected $useTimestamps = true;
	protected $allowedFields        = ['kd_foto', 'foto', 'keterangan'];
}