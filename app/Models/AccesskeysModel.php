<?php

namespace App\Models;

use CodeIgniter\Model;

class AccesskeysModel extends Model
{
    protected $table      = 'tb_key_midtrans';
    protected $primaryKey = 'id_key';
    protected $allowedFields = ['ck_p', 'sk_p', 'ck_s', 'sk_s','key_aktif'];
    protected $useTimestamps = true;

    public function getKey($kolom = null)
    {
        if (empty($kolom)) {
            return $this->findAll();
        }
        return $this->builder($this->table)->where('id_key', $kolom)->get(1)->getRow();
    }

   

}
