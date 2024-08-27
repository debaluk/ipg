<?php

namespace App\Controllers;


use App\Models\UserModel;

class Dashboard extends BaseController
{
    protected $pengguna;

    public function __construct()
    {
       
        $this->pengguna = new UserModel();
       
    }
    public function index()
    {
        $data = [
            
        ];
        return view('dashboard', $data);
    }

}
