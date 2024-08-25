<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Transaksi extends BaseController
{
    private $transaksi;

    public function __construct()
    {
        
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'transaksi',
           
        ];
       
        echo view('transaksi', $data);
    }

}
