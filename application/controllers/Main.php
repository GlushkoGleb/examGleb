<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header.php');
		if ($this->session->userdata('role')) {
			$role = $this->session->userdata('role');
			if ($role == 'клиент') {
				$this->load->view('template/navbar_client.php');
				redirect('client/cabinet');
			} elseif ($role == 'менеджер') {
				$this->load->view('template/navbar_manager');
				redirect('manager/upravleniye_tovarami');
			} else {
				$this->load->view('template/navbar.php');
			}
		} else {
			$this->load->view('template/navbar.php');
		}
		$this->load->model('Tovar_model');
		$data['tovar'] = $this->Tovar_model->tovar_select();
		$this->load->view('main.php', $data);
		$this->load->view('template/footer.php');
	}
	public function reg()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php');
		$this->load->view('registration.php');
		$this->load->view('template/footer.php');
	}
	public function reg_add()
	{
		if (!empty($_POST)) {
			$fio = htmlspecialchars($_POST['fio']);
			$email = htmlspecialchars($_POST['email']);
			$login = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars($_POST['password']);
			$this->load->model('users_model');
			$this->users_model->reg_insert($fio, $email,$login, $password);
			redirect('main/reg');
		}
	}
	public function autch()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php');
		$this->load->view('authorization.php');
		$this->load->view('template/footer.php');
	}
	public function autch_add()
	{
		if (!empty($_POST)) {
			$login = htmlentities($_POST['login']);
			$password = htmlentities($_POST['password']);
			$this->load->model('users_model');
			$users = $this->users_model->autch_select($login, $password);
			if (!empty($users)) {
				$this->session->set_userdata($users);
				redirect('main/index');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('role');
		redirect('main/index');
	}
}
?>