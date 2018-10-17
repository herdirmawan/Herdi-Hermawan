<?php  

/**
 * 
 */
class About extends Controller
{
	
	public function index($nama = "nada", $job = "Mahasiswa")
	{
		$data = array(
				 'nama' => $nama,
				 'job' => $job,
				 'judul' => 'About Me'
				);
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = "Pages";
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}