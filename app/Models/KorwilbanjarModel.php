<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class KorwilbanjarModel extends Model
{
    protected $table      = 'korwil_banjar';
    protected $primaryKey = 'id_korwil_banjar';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        'id_korwil_prov',
        'id_korwil_kab',
        'id_korwil_kec',
        'id_korwil_desa',
        'id_provinsi',
        'id_kabupaten',
        'id_kecamatan',
        'id_desa',
        'id_banjar',
        'nama_korwil_banjar'
    ];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    public function getKorwilbanjar($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('id_korwil_banjar, nama_korwil_banjar AS nama')
            ->where('id_korwil_banjar', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
        ->select('id_korwil_banjar, nama_korwil_banjar AS nama')
        ->get()->getResult();
    }

}
