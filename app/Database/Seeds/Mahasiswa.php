<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'npm'   => '2017051001',
                'nama'  => 'Ervan Chodry',
                'alamat'  => 'Tengah Trikora',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
            [
                'npm'   => '2017051006',
                'nama'  => 'Adiwijaya Satria Nusantara',
                'alamat'  => 'Atas Gunung',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
            [
                'npm'   => '2017051049',
                'nama'  => 'Alif Akbar Kartadinata',
                'alamat'  => 'Koslip',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
            [
                'npm'   => '2017051054',
                'nama'  => 'Fachri Azka Nur',
                'alamat'  => 'Belakang Kompi',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
            [
                'npm'   => '2017051055',
                'nama'  => 'Irvandra Dwidya Agsatra',
                'alamat'  => 'Sukasepi',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
            [
                'npm'   => '2017051061',
                'nama'  => 'M Daffa Putra Wibowo',
                'alamat'  => 'Bataranila',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
            [
                'npm'   => '20170510',
                'nama'  => 'Arib Yusron Hamdani',
                'alamat'  => 'Kemiling',
                'create_at'  => Time::now(),
                'update_at'  => ''
            ],
        ];

        foreach ($data as $value) {
            $this->db->table('mahasiswa')->insert($value);
        }
    }
}
