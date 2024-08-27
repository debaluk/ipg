<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SetupModel;
use App\Models\JenisModel;
use App\Models\KodeModel;
use App\Models\ImportModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Import extends BaseController
{
    protected $m_event;
    protected $m_jenis;
    protected $m_kode;
	protected $m_import;
    public function __construct()
    {
        $this->m_event = new SetupModel();
        $this->m_jenis = new JenisModel();
        $this->m_kode = new KodeModel();
		$this->m_import = new ImportModel();
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
       
        return view('import', $data);
    }
    public function payout()
    {
        $event = $this->m_event->getEvent();
        $jenis = $this->m_jenis->getData();
        $kode = $this->m_kode->getData();
        $data = [
            'event'=> $event,
            'jenis'=> $jenis,
            'kode'=> $kode,
        ];
       
        return view('import_payout', $data);
    }

    public function importTransaksi() {
		$path 			= './uploads/transaksi/';
		$json 			= [];
		$file_name 		= $this->request->getFile('file');
		$file_name 		= $this->uploadFile($path, $file_name);
		$arr_file 		= explode('.', $file_name);
		$extension 		= end($arr_file);
		if('csv' == $extension) {
			$reader 	= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
			$reader 	= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet 	= $reader->load($file_name);
		$sheet_data 	= $spreadsheet->getActiveSheet()->toArray();

		$list 			= [];
		foreach($sheet_data as $key => $val) {
			if($key != 0) {
				$result 	= $this->m_import->getTransaksi([
					"date_time" 	=> $val[1], //nomor urut tabel mulai dari 1
					"order_id" 		=> $val[2],
					"no_va" 		=> $val[3],
					"channel" 		=> $val[4],
					"transaction_type" 			=> $val[5], 
					"transaction_status" 		=> $val[6],
					"transaction_id" 			=> $val[7],
					"transaction_time" 			=> $val[8],
					"customer_name" 			=> $val[9], 
					"customer_email" 			=> $val[10],
					"customer_tel" 				=> $val[11],
					"customer_address" 			=> $val[12],
					"nama_produk" 				=> $val[13],
					"qty" 						=> $val[14], 
					"price" 					=> $val[15],
					"amount" 					=> $val[16],
					"note" 						=> $val[17],
				]);
				
				//cari orrder id get id event dan id jenis 
				if($result) {
				} else {
					$list [] = [
						'date_time'					=> $val[0], //nomor kolom excell
						'order_id'					=> $val[1],
						'no_va'						=> $val[11],
						'channel'					=> $val[2],
						"transaction_type" 			=> $val[3], 
						"transaction_status" 		=> $val[5],
						"transaction_id" 			=> $val[6],
						"transaction_time" 			=> $val[7],
							"customer_name" 		=> $val[12], 
							"customer_email" 		=> $val[8],
							"customer_tel" 			=> $val[13],
							"customer_address" 		=> $val[14],
								"nama_produk" 				=> $val[15],
								"qty" 						=> $val[16], 
								"price" 					=> $val[17],
								"amount" 					=> $val[18],
								"note" 						=> $val[9],
						
					];
				}
			}
		}

		if(file_exists($file_name))
			unlink($file_name);
		if(count($list) > 0) {
			$result 	= $this->m_import->bulkInsertP($list);
			if($result) {
				$json = [
					'success_message' 	=> "Upload dan import data berhasil,silakan bukan halaman transaksi.",
				];
			} else {
				$json = [
					'error_message' 	=> "Terjadi kesalahan, silakan dicoba lagi.",
				];
			}
		} else {
			$json = [
				'error_message' => "Data tidak ditemukan.",
			];
		}

		echo json_encode($json);
	}
	
	public function importTransaksipout() {
		$path 			= './uploads/payout/';
		$json 			= [];
		$file_name 		= $this->request->getFile('file');
		$file_name 		= $this->uploadFile($path, $file_name);
		$arr_file 		= explode('.', $file_name);
		$extension 		= end($arr_file);
		if('csv' == $extension) {
			$reader 	= new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
			$reader 	= new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet 	= $reader->load($file_name);
		$sheet_data 	= $spreadsheet->getActiveSheet()->toArray();

		$list 			= [];
		foreach($sheet_data as $key => $val) {
			if($key != 0) {
				$result 	= $this->m_import->getTransaksiP([
					"date_create" 			=> $val[1], //nomor urut tabel mulai dari 1
					"order_id" 				=> $val[2],
					"transaction_type" 		=> $val[3],
					"channel" 				=> $val[4],
					"status" 				=> $val[5], 
					"reference" 			=> $val[6], 
					"amount" 				=> $val[7],
				]);				
				
				if($result) {
				} else {
					$list [] = [
						"date_create" 			=> $val[0],
						"order_id" 				=> $val[1],
						"transaction_type" 		=> $val[2],
						"channel" 				=> $val[3],
						"status" 				=> $val[4],
						"reference" 			=> $val[5], 
						"amount" 				=> str_replace('-', '', $val[6]),
					];
				}
			}
		}
		
		if(file_exists($file_name))
			unlink($file_name);
		if(count($list) > 0) {
			$result 	= $this->m_import->bulkInsertP($list);
			if($result) {
				$json = [
					'success_message' 	=> "Upload dan import data berhasil,silakan bukan halaman transaksi.",
				];
			} else {
				$json = [
					'error_message' 	=> "Terjadi kesalahan, silakan dicoba lagi.",
				];
			}
		} else {
			$json = [
				'error_message' => "Data tidak ditemukan.",
			];
		}

		echo json_encode($json);
	}

	public function uploadFile($path, $image) {
    	if (!is_dir($path)) 
			mkdir($path, 0777, TRUE);
		if ($image->isValid() && ! $image->hasMoved()) {
			$newName = $image->getRandomName();
			$image->move('./'.$path, $newName);
			return $path.$image->getName();
		}
		return "";
	}


}
