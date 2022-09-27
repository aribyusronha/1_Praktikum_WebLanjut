<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
	protected $table            = 'mahasiswa';
	protected $primaryKey       = 'id';
	protected $useAutoIncrement = true;
	protected $allowedFields    = ['npm', 'nama', 'alamat', 'deskripsi', 'create_at', 'update_at'];

	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'create_at';
	protected $updatedField  = 'update_at';
}
