<?php

namespace App\Models;

use CodeIgniter\Model;

class KodeModel extends Model
{
    protected $table      = 'tbl_event_kode';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_event', 'id_jenis', 'kode'];
    protected $useTimestamps = true;

    public function getData($id = null)
    {
        if (!(empty($id))) {
            return $this->builder($this->table)
            ->select('tbl_event_kode.*, tbl_even.nama_event,tbl_kode_transaksi.nama_jenis')
            ->join ('tbl_even','tbl_even.id_event=tbl_event_kode.id_event','inner')
            ->join ('tbl_kode_transaksi','tbl_kode_transaksi.id_jenis=tbl_event_kode.id_jenis','inner')
            ->where('id', $id)->get(1)->getRow();
        }
        return $this->builder($this->table)
            ->select('tbl_event_kode.*, tbl_even.nama_event,tbl_kode_transaksi.nama_jenis')
            ->join ('tbl_even','tbl_even.id_event=tbl_event_kode.id_event','inner')
            ->join ('tbl_kode_transaksi','tbl_kode_transaksi.id_jenis=tbl_event_kode.id_jenis','inner')
            ->get()->getResult();
        
    }
	
	public function getIdOrder($where) {
        return $this->db
                        ->table($this->table)
                        ->where($where)
                        ->get()
                        ->getRow();
    }

    

   

}
