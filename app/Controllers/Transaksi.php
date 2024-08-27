<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SetupModel;
use \App\Models\TransaksiModel;

use Irsyadulibad\DataTables\DataTables;

class Transaksi extends BaseController
{
    protected $m_event;
    protected $m_transaksi;

    public function __construct()
    {
        $this->m_event = new SetupModel();
        helper('form');
    }

    public function index()
    {
        $event = $this->m_event->getEvent();
        $data = [
            'event'=> $event,
           
        ];
       
        return view('transaksi', $data);
    }
	
	public function ajax() {
        return DataTables::use('tbl_transaksi')
            //->select('transaction_time,order_id,transaction_type,channel,customer_name,customer_email,amount,transaction_status')
            ->where(['transaction_type' => 'Payment'])
           
            ->make(true);

        // Or with helper (recommended)
        return datatables('tbl_transaksi')->make();
    }

    /*public function ajax()
    {
        $m_transaksi = new TransaksiModel();
        $m_transaksi->select('date_time,oder_id,transaction_type,channel,customer_name,customer_email,amount,transaction_status');

        return DataTable::of($m_transaksi)->toJson();
    } */

}
