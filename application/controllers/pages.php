<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pages extends CI_Controller{
    public function view($page = 'home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $data['packages'] = $this->Package_model->get_packages();


      //$data['packages']['imageArray'] = explode(":", $data['add']['images']);
      $data['title']=ucfirst($page);
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/accordian');
      $this->load->view('templates/footer');
    }
  }

 ?>
