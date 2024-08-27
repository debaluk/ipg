<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SetupModel;

class Riwayat extends BaseController
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
       
        return view('riwayat', $data);
    }

}
