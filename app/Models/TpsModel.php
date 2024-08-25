<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class TpsModel extends Model
{
    protected $table      = 'tps';
   
    protected $primaryKey = 'id_tps';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        'id_provinsi',
        'id_kabupaten',
        'id_kecamatan',
        'id_desa',
        'id_banjar',
        'kode_tps',
        'nama_tps'];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    
    public function get_by_id($id)
	{
		return $this->builder('v_tps')
            ->select('v_tps.*')
            ->where('id_tps', $id)->get(1)->getRow();
	}
}
