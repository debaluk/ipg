<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class BanjarModel extends Model
{
    protected $table      = 'wilayah_banjar';
    protected $primaryKey = 'id';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_desa','nama'];
    protected $useTimestamps = true;
    protected $createdField       = '';
    protected $updatedField       = '';
    protected $deletedField       = '';

    public function getBanjar($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('id, nama AS nama')
            ->where('id', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
        ->select('id, nama AS nama')
        ->get()->getResult();
    }

    public function getBanjarIdDesa($iddesa)
    {
        return $this->builder($this->table)
        ->select('id as id, nama AS nama')
        ->where('id_desa', $iddesa)->get()->getResult();
       
    }
}
