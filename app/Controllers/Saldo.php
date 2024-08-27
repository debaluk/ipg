<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SetupModel;
use \App\Models\TransaksiModel;

use Irsyadulibad\DataTables\DataTables;

class Saldo extends BaseController
{
    protected $m_transaksi;
    protected $m_event;
   
    public function __construct()
    {
        $this->m_transaksi = new TransaksiModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'transaksi',
           
        ];
       
        echo view('saldo', $data);
    }

    public function data()
    {
        $data = [
            'title' => 'transaksi',
           
        ];
       
        echo view('saldo_data', $data);
    }

    public function ajax()
    {
        return DataTables::use('tbl_payout')
            ->make(true);

        // Or with helper (recommended)
        return datatables('tbl_payout')->make();
    }

}
