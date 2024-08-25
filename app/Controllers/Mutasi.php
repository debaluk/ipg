<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Mutasi extends BaseController
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
       
        echo view('mutasi', $data);
    }

}
