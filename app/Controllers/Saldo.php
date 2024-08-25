<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Saldo extends BaseController
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
       
        echo view('saldo', $data);
    }

    public function data()
    {
        $data = [
            'title' => 'transaksi',
           
        ];
       
        echo view('saldo_data', $data);
    }

}
