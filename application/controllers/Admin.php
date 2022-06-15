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
        $data['document'] = $this->mView->getDocument($id);

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
        $data['document'] = $this->mView->getDocument($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function approveApp()
    {
        $data['title'] = 'Approve Application';


        $data = [
            'app_fullname' => $this->input->post('app_fullname'),
            'app_nric' => $this->input->post('app_nric'),
            'issued_date' => $this->input->post('issued_date'),
            'expired_date' => $this->input->post('expired_date'),
            'app_status' => 'Approved',
            'date_update' => time(),
        ];

        $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->update('applicant', $data);

        redirect('admin');
    }


    public function rejectApp()
    {
        $data = [
            'app_fullname' => $this->input->post('app_fullname'),
            'app_nric' => $this->input->post('app_nric'),
            'reason_reject' => $this->input->post('reason_reject'),
            'app_status' => 'Rejected',
            'date_update' => time(),
        ];

        $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->update('applicant', $data);

        redirect('admin');
    }
}