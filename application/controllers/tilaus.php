<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tilaus extends CI_Controller {

public function listaa(){
		$this->load->model('tilaus_model');
		$data['tilaukset']=$this->tilaus_model->getTilaus();
		$data['sivun_sisalto']='tilaus/listaa';
		$this->load->view('menu/sisalto',$data);
}

}