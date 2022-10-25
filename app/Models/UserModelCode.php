<?php

namespace App\Models;

use Myth\Auth\Models\UserModel as MythModel;
use CodeIgniter\Model;

class UserModelCode extends Model
{
    protected $table = 'users';
    // protected $returnType = 'App\Entities\User';
    protected $allowedFields = [
        'fullname', 'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
        'firstname', 'lastname', 'phone', 'address',
    ];

    public function getUser($username)
    {
        return $this->where(['username' => $username])->first();
    }
}
