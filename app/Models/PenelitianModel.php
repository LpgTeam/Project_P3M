<?php

namespace App\Models;

use CodeIgniter\Model;

class PenelitianModel extends Model
{
    /**
     * table name
     */
    protected $table = "penelitian";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id_penelitian',
        'judul_penelitian',
        'nama_peneliti',
        'jabatan',
        'no_hp',
        'email'
    ];

    public function getPenelitian($judul)
    {
        return $this->where(['judul_penelitian' => $judul])->first();
    }
}
