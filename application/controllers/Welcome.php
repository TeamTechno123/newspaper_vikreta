<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('Website/index');
	}
	public function features()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/features');
		$this->load->view('Include/footer');
	}
	public function about()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/about');
		$this->load->view('Include/footer');
	}
	public function policy()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/policy');
		$this->load->view('Include/footer');
	}
	public function terms()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/terms');
		$this->load->view('Include/footer');
	}
	public function contact()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/contact');
		$this->load->view('Include/footer');
	}
	public function send_mail(){

					$name = $this->input->post('name');
					$email = $this->input->post('email');
					$mobile = $this->input->post('mobile');
					$subject = $this->input->post('subject');
					$message = $this->input->post('message');
					$from_email = $email;
					$recipient = "info@technothinksup.com";
				$subject = $subject;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from_email."\r\n".
				'Reply-To: '.$from_email."\r\n" .
				'X-Mailer: PHP/' . phpversion();

				$send = mail($recipient, $subject, $message, $headers);
				if($send){
					$this->session->set_flashdata('send_email','success');
				}
				else{
					$this->session->set_flashdata('send_email','error');
				}
				header('Location:'.base_url());
				}
}
