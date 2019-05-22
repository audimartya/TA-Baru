<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockElpiji extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('StockElpijiModel');
	}

function index(){
		$stock = $this->StockElpijiModel->getkeluar();
		$stockdtg = $this->StockElpijiModel->getdatang();
		$sisa = $this->StockElpijiModel->getsisa();

		foreach ($stock as $key) { $stock2 = $key['jumlah_gas']; }
		foreach ($stockdtg as $key) { $dtg = $key['jumlah_gas']; }
		foreach ($sisa as $key) { $sisa1 = $key['hasil']; }

		if(empty($dtg)){
			$dtg = 0;
		}

		if(empty($sisa1)){
			$sisa1 = 0;
		}

		$stock3 = (int)$stock2;
		$dtg3 = (int)$dtg;
		$sisa3 = (int)$sisa1;

		var_dump($stock3);
		var_dump($dtg3);
		var_dump($sisa3);
	
		$total = $dtg3 + $sisa3;

		$data['StockElpiji'] = array(
                'tanggal' => date('Y/m/d'),
                'stock_datang' => $dtg3,
                'stock_keluar' => $stock2,
                'stock_total' => $total
            );
            // $this->StockElpijiModel->InsertData($data['StockElpiji']);
                        
		$data['StockElpiji'] = $this->StockElpijiModel->GetAll();	
		$this->load->view('Template/HeaderPangkalan');
		$this->load->view('StockElpiji/DataStockElpiji',$data);
		$this->load->view('Template/FooterPangkalan');
}

}