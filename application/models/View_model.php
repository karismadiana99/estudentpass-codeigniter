<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View_model extends CI_Model
{
    function all()
    {
        return $this->db->get('applicant')->result_array(); //SELECT * from applicant
    }

    function newApp()
    {
        $app_status = 'In Process';
        $type_application = 'new application';

        $this->db->select('app_nric, app_fullname, app_gender, app_placebirth, app_nationality, app_status, user_id');
        $this->db->from('applicant');
        $this->db->where('app_status', $app_status);
        $this->db->where('type_application', $type_application);
        return $this->db->get()->result_array();
    }

    function reNewApp()
    {
        $app_status = 'In Process';
        $type_application = 'Renew application';

        $this->db->select('app_nric, app_fullname, app_gender, app_placebirth, app_nationality, app_status, user_id');
        $this->db->from('applicant');
        $this->db->where('app_status', $app_status);
        $this->db->where('type_application', $type_application);
        return $this->db->get()->result_array();
    }

    function datalist()
    {
        $app_status = "In Process";

        $this->db->select('app_nric, app_fullname, app_gender, app_placebirth, app_nationality, app_status, user_id');
        $this->db->from('applicant');
        $this->db->where('app_status !=', $app_status);
        return $this->db->get()->result_array();
    }

    public function getApproveApplicant($user_id)
    {
        $this->db->select('app_nric, app_fullname, issued_date, expired_date');
        $this->db->from('applicant');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }

    public function getRejectApplicant($user_id)
    {
        $this->db->select('app_nric, app_fullname, reason_reject');
        $this->db->from('applicant');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }

    public function getApplicant($user_id)
    {
        $this->db->select('user_id, app_nric, app_fullname, app_gender, app_placebirth, app_nationality, app_status, type_application, issued_date, expired_date, reason_reject');
        $this->db->from('applicant');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }

    public function getPassport($user_id)
    {
        $this->db->select('type_travel, no_passport, place_issue');
        $this->db->from('passport');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }

    public function getStudy($user_id)
    {
        $this->db->select('duration_study, name_course, level_course, name_institution, type_institution');
        $this->db->from('study');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }

    public function getDocument($user_id)
    {

        $this->db->select('profile_pic, nric_pic, passport_pic, letter_pic');
        $this->db->from('document');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }
}