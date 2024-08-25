<?php

namespace App\Models;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class RelawanModel extends Model
{
    protected $table      = 'relawan';
   
    protected $primaryKey = 'id_relawan';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        'id_korwil_prov',
        'id_korwil_kab',
        'id_korwil_kec',
        'id_korwil_desa',
        'id_korwil_banjar',
        'id_provinsi',
        'id_kabupaten',
        'id_kecamatan',
        'id_desa',
        'id_banjar',
        'no_induk',
        'nama',
        'nama_p',
        'nik',
        'no_hp',
        'email',
        'agama',
        'photo_ktp',
        'alamat',
        'tmp_lahir',
        'tgl_lahir'];
    protected $useTimestamps = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleted_at';

    
    public function get_by_id($id)
	{
		return $this->builder('v_relawan')
            ->select('v_relawan.*')
            ->where('id_relawan', $id)->get(1)->getRow();
	}
}
