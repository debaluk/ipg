<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table      = 'tbl_kode_transaksi';
    protected $primaryKey = 'id_jenis';
    protected $allowedFields = ['nama_jenis'];
    protected $useTimestamps = true;

    public function getData()
    {
        
        return $this->findAll();
       
    }

    

   

}
