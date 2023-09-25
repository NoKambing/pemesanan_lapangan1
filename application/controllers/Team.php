<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Team_model");
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('template/header');  
          $this->load->view('template/sidebar');
          $this->load->view('dasboard'); 
          $this->load->view('template/footer');

    }

    public function pemesanan_team() 
    {
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('form_input_team'); 
        $this->load->view('template/footer');  
    }

    public function simpan_data()
    {
         $simpan_data = $this->Team_model;
        $hasil = $simpan_data->save();

        if($hasil){
            $this->session->set_flashdata('message', 'success');
            redirect('team/data_team');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('team/data_team');


        }
    }

    public function data_team()
    {
        $data  = $this->Team_model;
        $hasil['data'] = $data->select();
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('data_team', $hasil); 
        $this->load->view('template/footer'); 
    }

    public function update_team()
    {    
        $data  = $this->Team_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('form_update_team',$hasil); 
        $this->load->view('template/footer'); 
    }

    public function update_data()
    {
        $data = $this->Team_model;
        $update = $data->update();

        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('team/data_team');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('team/data_team');
        }
    }

    public function delete_data()
    {
        $data = $this->Team_model;
        $delete = $data->delete($this->input->get('id'));

        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('team/data_team');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('team/data_team');


        }
    }
}

/* End of file Team.php and path \application\controllers\Team.php */
