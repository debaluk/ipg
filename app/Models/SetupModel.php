<?php

namespace App\Models;

use CodeIgniter\Model;

class SetupModel extends Model
{
    protected $table      = 'tbl_even';
    protected $primaryKey = 'id_event';
    protected $allowedFields = ['nama_event', 'fee_bank_tf', 'fee_cc', 'admin_fee'];
    protected $useTimestamps = true;

    public function getEvent($kolom = null)
    {
        if (empty($kolom)) {
            return $this->findAll();
        }
        return $this->builder($this->table)->where('id_event', $kolom)->get(1)->getRow();
    }

    

   

}
