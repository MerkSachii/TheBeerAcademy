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
            'username' => $this->input->post('user'),
            'password' => $this->input->post('pass')
        ];
				$name = $userInfo['username'];

        $isSuccessful = $this->ourModel->verifyCredentials($userInfo);
				$userSession = array(
				'username' =>  $this->input->post('user'),
				'name' => $userInfo['username'],
				'isLogged' =>  TRUE,
				);

        if($isSuccessful) {
					$this->session->set_userdata($userSession);
            redirect(site_url('item'), 'refresh');
        }
        else {
            redirect(site_url('home'), 'refresh');
        }

    }

    public function item() {
				$data['name'] = $this->session->username;
        $this->load->view('item.php', $data);
    }

		public function signup() {

			$this->load->view('signup.php');
		}

		public function addUsers() {
			$this->load->model('ourModel');

			$userSession = array(
			'username' =>  $this->input->post('firstname'),
			'name' => $this->input->post('firstname'),
			'isLogged' =>  TRUE,
			);
			$this->session->set_userdata($userSession);
			$name = $formData['firstName'];
			

			redirect(site_url('item'), 'refresh');
		}
}
