<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class KorwilprovinsiModel extends Model
{
    protected $table      = 'korwil_provinsi';
    protected $primaryKey = 'id_korwil_prov';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nama_korwil_prov','id_provinsi'];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    public function getKorwilprovinsi($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('id_korwil_prov, nama_korwil_prov')
            ->where('id', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
        ->select('id_korwil_prov, nama_korwil_prov')
        ->get()->getResult();
    }

   
}
