<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AbsenRekap extends Migration
{
    public function up()
    {
		$this->forge->addField([
            'no' => [
                'type' => 'INT',
                'constraint' => 2,
                'unsigned' => true,
                'auto_increment' => true,
            ],
			'bulan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
			],
            'kelompok' => [
                'type' => 'INT',
            ],
			'jumSiswa'       => [
				'type'           => 'INT',
				'constraint'     => 100,
			],
			'sakit' => [
				'type'           => 'INT',
				'constraint'       	 => 100,
			],
            'izin'       => [
				'type'           => 'INT',
				'constraint'     => 100,
			],
            'alpha'       => [
				'type'           => 'INT',
				'constraint'     => 100,
			],
            'jumAbsen'       => [
				'type'           => 'INT',
				'constraint'     => 100,
			],
            'persentase'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'keterangan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],

		]);
		$this->forge->addKey('no', true);
		$this->forge->createTable('AbsenRekap');
    }

    public function down()
    {
        $this->forge->dropTable('AbsenRekap');
    }
}
