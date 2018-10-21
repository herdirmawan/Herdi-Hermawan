<?php 

/**
 * 
 */
class Aksesoris extends Controller
{
	public function index()
	{
		if (isset($_POST["cari"])) {
			$data = array(
				'judul' => "Daftar Aksesoris",
				'aksesoris' => $this->model('Aksesoris_model')->cariAksesoris($_POST['merk'])
			);
			$this->view('templates/header', $data);
			$this->view('aksesoris/index', $data);
			$this->view('templates/footer');
		} else {
	      $data = array(
	        'judul' => "Daftar Aksesoris",
	        'aksesoris' => $this->model('Aksesoris_model')->getAllAksesoris()
	      );
	      $this->view('templates/header', $data);
	      $this->view('aksesoris/index', $data);
	      $this->view('templates/footer');
	    }	
	}

	public function detail($id)
	{
		$data = array(
			'judul' => "Daftar Aksesoris",
			'aksesoris' => $this->model('Aksesoris_model')->getAksesorisById($id)
		);
		$this->view('templates/header', $data);
		$this->view('aksesoris/detail', $data);
		$this->view('templates/footer');
	}
	
}