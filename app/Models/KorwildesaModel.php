<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class KorwildesaModel extends Model
{
    protected $table      = 'korwil_desa';
    protected $primaryKey = 'id_korwil_desa';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_korwil_prov','id_korwil_kab','id_korwil_kec','id_provinsi','id_kabupaten','id_kecamatan','id_desa','nama_korwil_desa'];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    public function getKorwildesa($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('id_korwil_desa, nama_korwil_desa AS nama')
            ->where('id_korwil_desa', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
        ->select('id_korwil_desa, nama_korwil_desa AS nama')
        ->get()->getResult();
    }

}
