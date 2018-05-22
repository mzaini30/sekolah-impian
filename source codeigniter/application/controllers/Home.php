<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// semua ada

	public function __construct(){
		parent::__construct();
		function tampil_konten($judul, $isi){
			$ci =& get_instance();
			$ci->load->view('layout/default', array(
				'judul' => $judul,
				'isi' => 'konten/'.$isi,
				'menu' => $isi
			));
		}
	}

	// index
	
	public function index(){
		$this->beranda();
	}

	// setiap halaman

	public function beranda(){
		tampil_konten('Impian', 'beranda');
	}

	public function mengapa_kelebihan(){
		tampil_konten('Mengapa', 'mengapa_kelebihan');
	}

	public function siapa_dapat_bersekolah(){
		tampil_konten('Siapa', 'siapa_dapat_bersekolah');
	}

	public function akan_jadi_apa(){
		tampil_konten('Menjadi', 'akan_jadi_apa');
	}

	public function kualitas_guru(){
		tampil_konten('Guru', 'kualitas_guru');
	}

	public function proses_belajar(){
		tampil_konten('Belajar', 'proses_belajar');
	}

	public function metode_belajar(){
		tampil_konten('Metode', 'metode_belajar');
	}

	public function lingkungan(){
		tampil_konten('Lingkungan', 'lingkungan');
	}

	public function diajarkan(){
		tampil_konten('Diajarkan', 'diajarkan');
	}

	public function evaluasi(){
		tampil_konten('Evaluasi', 'evaluasi');
	}

}