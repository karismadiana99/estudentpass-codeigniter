<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{
    public function getUser($user_id)
    {
        $this->db->select('fullname, email, image, password, role_id, is_active, date_created');
        $this->db->from('user');
        $this->db->where(['user_id' => $user_id]);
        return $this->db->get()->row_array();
    }

    public function getApplicant($user_id)
    {
        $this->db->select('app_nric, app_fullname, app_gender, app_placebirth, app_nationality, app_status, type_application, completed, issued_date, expired_date, reason_reject');
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

    // public function getDocument($user_id)
    // {
    //     $this->db->select('pic_passport, pic_traveldoc, pic_nric, pic_letter');
    //     $this->db->from('document');
    //     $this->db->where(['user_id' => $user_id]);
    //     return $this->db->get()->row_array();
    // }
}