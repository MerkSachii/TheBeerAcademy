<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeerController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');

    }

	public function index()
	{
		$this->home();
        
	}
    
    public function home() {
        $this->load->view('landing.php');
    }
    
    public function signin() {
        $this->load->model('ourModel');
        $userInfo = [
            $username => $this->input->post('user'),
            $password => $this->input->post('password')    
        ];
        
        $isSuccessful = $this->ourModel->verifyCredentials($userInfo);
        var_dump($isSuccessful);
        if(isSuccessful) {
            $this->item();
        }
        else {
            $this->index();
        }
        
    }
    
    public function item() {
        $this->load->view('item.php');
    }
}
