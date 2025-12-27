<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{
	public function main_client()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/navbar_client.php');
		$this->load->model('Tovar_model');
		$data['tovar'] = $this->Tovar_model->tovar_select();
		$this->load->view('main_client.php', $data);
		$this->load->view('template/footer.php');
	}
	public function zakaz()
	{
		$data['id_tovar'] = $this->uri->segment(3, 0);
		$this->load->view('template/header.php');
		$this->load->view('template/navbar_client.php');
		$this->load->view('zakaz.php', $data);
		$this->load->view('template/footer.php');
		if (!empty($_POST)) {
			$id_users = $this->session->userdata("id_users");
			$id_tovar = $_POST['id_tovar'];
			$data_zakaz = $_POST['data_zakaz'];
			$address = $_POST['address'];
			$sposob_oplaty = $_POST['sposob_oplaty'];
			$this->load->model('Zakaz_model');
			$this->Zakaz_model->zakaz_insert($id_users, $id_tovar, $data_zakaz, $address, $sposob_oplaty);
			redirect('client/cabinet');
		}
	}
	public function delete()
	{
		$id_zakaz = $this->uri->segment(3, 0);
		$this->load->model('zakaz_model');
		$this->zakaz_model->zakaz_delete($id_zakaz);
		redirect('client/cabinet');
	}
	public function cabinet()
	{
		$id_users = $this->session->userdata("id_users");
		$this->load->view('template/header.php');
		$this->load->view('template/navbar_client.php');
		$this->load->model('Zakaz_model');
		$data['zakaz'] = $this->Zakaz_model->zakaz_select($id_users);
		$this->load->view('cabinet.php', $data);
		$this->load->view('template/footer.php');
	}
}
?>