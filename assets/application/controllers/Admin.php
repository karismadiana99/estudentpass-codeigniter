<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        check_not_login();
        $this->load->model('View_model', 'mView', TRUE);
        $this->load->model('Update_model', 'mUpdate', TRUE);
    }

    public function index()
    {
        $data['title'] = 'Data List';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $data['applicant'] = $this->mView->datalist();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datalist', $data);
        $this->load->view('templates/footer');
    }


    public function applist()
    {
        $data['title'] = 'New Application';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $data['applicant'] = $this->mView->newApp();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/applist', $data);
        $this->load->view('templates/footer');
    }

    public function renewlist()
    {
        $data['title'] = 'Renew Application';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $data['applicant'] = $this->mView->reNewApp();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/renewlist', $data);
        $this->load->view('templates/footer');
    }

    public function action($id)
    {
        $data['title'] = 'New Application';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $data['applicant'] = $this->mView->getApplicant($id);
        $data['passport'] = $this->mView->getPassport($id);
        $data['study'] = $this->mView->getStudy($id);
        // $data['document'] = $this->mView->getDocument($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/action', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'New Application';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $data['applicant'] = $this->mView->getApplicant($id);
        $data['passport'] = $this->mView->getPassport($id);
        $data['study'] = $this->mView->getStudy($id);
        // $data['document'] = $this->mView->getDocument($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function approveApp($user_id)
    {
        $data['title'] = 'Approve Application';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        $this->mUpdate->approveApplication($user_id);
    }


    public function rejectApp($user_id)
    {
        $data['title'] = 'Reject Application';
        $data['user'] = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();

        if ($this->form_validation->run() == false) {

            $this->mUpdate->rejectApplication($user_id);
        }
    }
}