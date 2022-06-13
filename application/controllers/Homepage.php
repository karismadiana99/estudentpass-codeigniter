<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/home_header');
        $this->load->view('homepage/home');
        $this->load->view('templates/home_footer');
    }
}