<?php

namespace App\Models;

use CodeIgniter\Model;

class ImportModel extends Model
{
    protected $table      	= 'tbl_transaksi';
	protected $tableP   	= 'tbl_payout';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['date_time','date_time'];
    protected $useTimestamps = true;

    public function getData($kolom = null)
    {
        if (empty($kolom)) {
            return $this->findAll();
        }
        return $this->builder($this->table)->where('id_transaksi', $kolom)->get(1)->getRow();
    }
	
	public function addTransaksi($data) {
        $this->db
                        ->table($this->table)
                        ->insert($data);
        return $this->db->insertID();
    }

    public function getTransaksi($where) {
        return $this->db
                        ->table($this->table)
                        ->where($where)
                        ->get()
                        ->getRow();
    }
	
	public function getTransaksiP($where) {
        return $this->db
                        ->table($this->tableP)
                        ->where($where)
                        ->get()
                        ->getRow();
    }

    public function updateTransaksi($where, $data) {
        return $this->db
                        ->table($this->table)
                        ->where($where)
                        ->set($data)
                        ->update();
    }

    public function deleteTransaksi($where) {
        return $this->db
                        ->table($this->table)
                        ->where($where)
                        ->delete();
    }

    public function bulkInsert($data) {
        return $this->db
                        ->table($this->table)
                        ->insertBatch($data);
    }
	
	//payout
	public function bulkInsertP($data) {
        return $this->db
                        ->table($this->tableP)
                        ->insertBatch($data);
    }
    

   

}
