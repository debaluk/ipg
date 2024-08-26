<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccesskeysModel;

class Acesskeys extends BaseController
{
    protected $m_key;

    public function __construct()
    {
        $this->m_key = new AccesskeysModel();
        helper('form');
    }

    public function index()
    {
        
        $data = [
           
            'key' =>$this->m_key->getKey('1'),
           
        ];
       
        return view('key_midtrans', $data);
    }

}
