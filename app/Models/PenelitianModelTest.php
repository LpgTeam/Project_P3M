<?php

namespace App\Models;

use CodeIgniter\Model;

class PenelitianModelTest extends Model
{
    /**
     * table name
     */
    protected $table = "penelitiantest";

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
}
