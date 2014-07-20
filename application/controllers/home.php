<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//echo 'Home controller has been loaded';
		$this->load->view('templates/view_header');
		$this->load->view('view_home');
		$this->load->view('templates/view_footer');
	}

    public function homes()
    { 
    	$this->load->view('view_home');
    }

	public function contact()
	{
		$this->load->view('view_contact');
	}

	public function resume()
	{
		echo 'My resume';
	}

	public function blog()
	{
		echo 'My blog';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */