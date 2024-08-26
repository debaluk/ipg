<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SetupModel;
use App\Models\JenisModel;
use App\Models\KodeModel;

class Kode extends BaseController
{
    protected $m_event;
    protected $m_jenis;
    protected $m_kode;
    public function __construct()
    {
        $this->m_event = new SetupModel();
        $this->m_jenis = new JenisModel();
        $this->m_kode = new KodeModel();
        helper('form');
    }

    public function index()
    {
        $event = $this->m_event->getEvent();
        $jenis = $this->m_jenis->getData();
        $kode = $this->m_kode->getData();
        $data = [
            'event'=> $event,
            'jenis'=> $jenis,
            'kode'=> $kode,
        ];
       
        echo view('kode_transaksi', $data);
    }

}
