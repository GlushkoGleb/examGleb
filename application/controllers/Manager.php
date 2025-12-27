<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
    public function upravleniye_tovarami()
    {
        $this->load->view('template/header.php');
        $this->load->view('template/navbar_manager.php');
        $this->load->model('Tovar_model');
        $data['tovar'] = $this->Tovar_model->tovar_select();
        $this->load->view('product_management.php', $data);
        $this->load->view('template/footer.php');
    }
    public function delete()
    {
        $id_tovar = $this->uri->segment(3, 0);
        $this->load->model('Tovar_model');
        $this->Tovar_model->tovar_delete($id_tovar);
        redirect('manager/upravleniye_tovarami');
    }
    public function add_tovar()
    {
        if (!empty($_POST)) {
            $photo = $_POST['photo'];
            $name_tovar = $_POST['name_tovar'];
            $ves = $_POST['ves'];
            $price = $_POST['price'];
            $this->load->model('Tovar_model');
            $this->Tovar_model->tovar_insert($photo, $name_tovar, $ves, $price);
            redirect('manager/upravleniye_tovarami');
        }
    }
}
?>