<?php

namespace App\Controllers;
use App\Models\SetupModel;

use App\Controllers\BaseController;


class Transaksi extends BaseController
{
    protected $m_event;

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
       
        echo view('transaksi', $data);
    }

}
