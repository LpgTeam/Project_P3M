<?php

namespace App\Models;

use CodeIgniter\Model;

class TimPenelitiModel extends Model
{
    /**
     * table name
     */
    protected $table = "tim_peneliti";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'id_peneliti',
        'id_penelitian',
        'NIP',
        'peran',
        'bidang_keahlian',
    ];
}
