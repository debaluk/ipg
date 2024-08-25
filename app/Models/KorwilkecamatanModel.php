<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class KorwilkecamatanModel extends Model
{
    protected $table      = 'korwil_kecamatan';
    protected $primaryKey = 'id_korwil_kec';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_korwil_prov','id_korwil_kab','id_provinsi','id_kabupaten','id_kecamatan','nama_korwil_kec'];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    public function getKorwilkecamatan($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('id_korwil_kec, nama_korwil_kec AS nama')
            ->where('id_korwil_kec', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
        ->select('id_korwil_kec, nama_korwil_kec AS nama')
        ->get()->getResult();
    }

}
