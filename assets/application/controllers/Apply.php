<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apply extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Apply_model', 'mApply', TRUE);
        $this->load->model('Form_model', 'mForm', TRUE);
        $this->load->model('Renew_model', 'mRenew', TRUE);
        $this->load->model('Update_model', 'mUpdate', TRUE);
    }

    public function index()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);

        if ($data['applicant']['completed'] == 0) {
            redirect('Apply/applyApplicant');
        } else {

            if ($data['applicant']['app_status'] == "In Process") {
                redirect('apply/statusAppProcess');
            } else if ($data['applicant']['app_status'] == "Approved") {
                redirect('apply/statusAppApprove');
            } else if ($data['applicant']['app_status'] == "Rejected") {
                redirect('apply/statusAppReject');
            } else {
                redirect('apply/statusAppProcess');
            }
        }
    }

    public function applyApplicant()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);

        $this->form_validation->set_rules('app_fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('app_nric', 'IC Number', 'required|trim|numeric');
        $this->form_validation->set_rules('app_gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('app_placebirth', 'Place Birth', 'required|trim');
        $this->form_validation->set_rules('app_nationality', 'Nationality', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apply/applicant', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mApply->addApplicant($userquery['user_id']);
            redirect('Apply/applyPassport/' . $this->input->post('user_id'));
        }
    }

    public function applyPassport()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);

        $this->form_validation->set_rules('type_travel', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('no_passport', 'Passport Number', 'required|trim');
        $this->form_validation->set_rules('place_issue', 'Gender', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apply/passport', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mApply->addPassport($userquery['user_id']);
            redirect('Apply/applyStudy/' . $this->input->post('user_id'));
        }
    }

    public function applyStudy()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);

        $this->form_validation->set_rules('duration_study', 'Duration Study', 'required|trim');
        $this->form_validation->set_rules('name_course', 'Name of Course', 'required|trim');
        $this->form_validation->set_rules('level_course', 'Level Course', 'required|trim');
        $this->form_validation->set_rules('name_institution', 'name institution', 'required|trim');
        $this->form_validation->set_rules('type_institution', 'type institution', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apply/study', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mApply->addStudy($userquery['user_id']);
            redirect('Apply/applyDocument/' . $this->input->post('user_id'));
        }
    }

    public function applyDocument()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);

        $config['upload_path']          = './documents/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Unsuccessfully Uploaded.";
        } else {
            $profile_pic = $this->upload->data();
            $profile_pic = $profile_pic['file_name'];

            $data = array(
                'profile_pic' => $profile_pic,
            );
            $this->db->insert('document', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> The file have been uploaded! </div>');
            redirect('Apply/statusAppProcess/' . $this->input->post('user_id'));
        }

        // $this->form_validation->set_rules('profile_pic', 'Profile Picture', 'required|trim');
        // $this->form_validation->set_rules('nric_pic', 'IC Picture', 'required|trim');
        // $this->form_validation->set_rules('passport_pic', 'Passport Picture', 'required|trim');
        // $this->form_validation->set_rules('letter_pic', 'Offer Letter Picture', 'required|trim');

        // if ($this->form_validation->run() == false) {
        //     $this->load->view('templates/header', $data);
        //     $this->load->view('templates/topbar', $data);
        //     $this->load->view('apply/document', $data);
        //     $this->load->view('templates/footer');
        // } else {
        //     $this->mApply->addStudy($userquery['user_id']);
        //     redirect('Apply/statusAppProcess/' . $this->input->post('user_id'));
        // }
    }



    public function statusAppProcess()
    {
        $data['title'] = 'Status Application';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('homepage/status_application1', $data);
        $this->load->view('templates/footer');
    }

    public function statusAppApprove()
    {
        $data['title'] = 'Status Application';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('homepage/status_application2', $data);
            $this->load->view('templates/footer');
        } else {

            redirect('Apply/digitalPass/' . $this->input->post('user_id'));
        }
    }

    public function statusAppReject()
    {
        $data['title'] = 'Status Application';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('homepage/status_application3', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('Apply/applyApplicant' . $this->input->post('user_id'));
        }
    }

    public function digitalPass()
    {
        $data['title'] = 'Digital Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('homepage/digitalpass', $data);
        $this->load->view('templates/footer');
    }

    public function reapplyApplicant()
    {
        $data['title'] = 'Apply Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        // var_dump($data['user']);
        // die;
        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->form_validation->set_rules('app_fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('app_nric', 'IC Number', 'required|trim|numeric');
        $this->form_validation->set_rules('app_gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('app_placebirth', 'Place Birth', 'required|trim');
        $this->form_validation->set_rules('app_nationality', 'Nationality', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apply/applicant', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mUpdate->updateApplicant($userquery['user_id']);
            redirect('apply/reapplyPassport/' . $this->input->post('user_id'));
        }
    }

    public function reapplyPassport()
    {
        $data['title'] = 'Apply Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->form_validation->set_rules('type_travel', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('no_passport', 'Passport Number', 'required|trim');
        $this->form_validation->set_rules('place_issue', 'Gender', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apply/passport', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mUpdate->updatePassport($userquery['user_id']);
            redirect('apply/reapplyStudy/' . $this->input->post('user_id'));
        }
    }

    public function reapplyStudy()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->form_validation->set_rules('duration_study', 'Duration Study', 'required|trim');
        $this->form_validation->set_rules('name_course', 'Name of Course', 'required|trim');
        $this->form_validation->set_rules('level_course', 'Level Course', 'required|trim');
        $this->form_validation->set_rules('name_institution', 'name institution', 'required|trim');
        $this->form_validation->set_rules('type_institution', 'type institution', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('apply/study', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mUpdate->updateStudy($userquery['user_id']);
            redirect('apply/statusAppProcess/' . $this->input->post('user_id'));
        }
    }

    public function renewApplicant()
    {
        $data['title'] = 'Renew Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        // var_dump($data['user']);
        // die;
        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->form_validation->set_rules('app_fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('app_nric', 'IC Number', 'required|trim|numeric');
        $this->form_validation->set_rules('app_gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('app_placebirth', 'Place Birth', 'required|trim');
        $this->form_validation->set_rules('app_nationality', 'Nationality', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('renew/reapplicant', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mRenew->updateApplicant($userquery['user_id']);
            redirect('apply/renewPassport/' . $this->input->post('user_id'));
        }
    }

    public function renewPassport()
    {
        $data['title'] = 'Renew Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->form_validation->set_rules('type_travel', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('no_passport', 'Passport Number', 'required|trim');
        $this->form_validation->set_rules('place_issue', 'Gender', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('renew/repassport', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mRenew->updatePassport($userquery['user_id']);
            redirect('apply/renewStudy/' . $this->input->post('user_id'));
        }
    }

    public function renewStudy()
    {
        $data['title'] = 'Apply New Student Pass';
        $userquery = $this->db->get_where('user', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['user'] = $userquery['user_id'];

        $data['user'] = $this->mForm->getUser($userquery['user_id']);
        $data['applicant'] = $this->mForm->getApplicant($userquery['user_id']);
        $data['passport'] = $this->mForm->getPassport($userquery['user_id']);
        $data['study'] = $this->mForm->getStudy($userquery['user_id']);

        $this->form_validation->set_rules('duration_study', 'Duration Study', 'required|trim');
        $this->form_validation->set_rules('name_course', 'Name of Course', 'required|trim');
        $this->form_validation->set_rules('level_course', 'Level Course', 'required|trim');
        $this->form_validation->set_rules('name_institution', 'name institution', 'required|trim');
        $this->form_validation->set_rules('type_institution', 'type institution', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('renew/restudy', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mRenew->updateStudy($userquery['user_id']);
            redirect('apply/statusAppProcess/' . $this->input->post('user_id'));
        }
    }
}
