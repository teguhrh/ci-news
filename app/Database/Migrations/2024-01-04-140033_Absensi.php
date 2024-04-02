<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absensi extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel absensi
        $this->forge->addField([
            'nis' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'bulan' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'tgl_1' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_2' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_3' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_4' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_5' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_6' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_7' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_8' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_9' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_10' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_11' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_12' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_13' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_14' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_15' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_16' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_17' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_18' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_19' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_20' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_21' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_22' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_23' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_24' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_25' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_26' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_27' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_28' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_29' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_30' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'tgl_31' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'hadir' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'sakit' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'izin' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
            'alpha' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
            ],
        ]);
        

        // Menjadikan 'nis' sebagai primary key
        $this->forge->addKey('nis', true);

        // Membuat tabel absensi
        $this->forge->createTable('absensi', true);
    }

    //-------------------------------------------------------

    public function down()
    {
        // Menghapus tabel absensi
        $this->forge->dropTable('absensi');
    }
}
