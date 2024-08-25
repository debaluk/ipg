<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class KorwilkabupatenModel extends Model
{
    protected $table      = 'korwil_kabupaten';
    protected $primaryKey = 'id_korwil_kab';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_korwil_prov','id_provinsi','id_kabupaten','nama_korwil_kab'];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    public function getKorwilkabupaten($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('id_korwil_kab, nama_korwil_kab')
            ->where('id_korwil_kab', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
        ->select('id_korwil_kab, nama_korwil_kab AS nama')
        ->get()->getResult();
    }

}
