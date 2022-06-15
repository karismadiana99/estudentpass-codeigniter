<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apply_model extends CI_Model
{


    public function addApplicant($user_id)
    {
        $student = [
            'user_id' => $user_id,
            'app_fullname' => strtoupper($this->input->post('app_fullname')),
            'app_nric' => $this->input->post('app_nric'),
            'app_gender' => $this->input->post('app_gender'),
            'app_placebirth' => strtoupper($this->input->post('app_placebirth')),
            'app_nationality' => $this->input->post('app_nationality'),
            'app_status' => 'In Process',
            'type_application' => 'new application',
            'completed' => 1,
            'date_update' => time(),
        ];
        $this->db->insert('applicant', $student);
    }

    public function addPassport($user_id)
    {
        $student = [
            'user_id' => $user_id,
            'type_travel' => $this->input->post('type_travel'),
            'no_passport' => strtoupper($this->input->post('no_passport')),
            'place_issue' => strtoupper($this->input->post('place_issue')),
        ];
        $this->db->insert('passport', $student);
    }

    public function addStudy($user_id)
    {
        $student = [
            'user_id' => $user_id,
            'duration_study' => $this->input->post('duration_study'),
            'name_course' => strtoupper($this->input->post('name_course')),
            'level_course' => $this->input->post('level_course'),
            'name_institution' => strtoupper($this->input->post('name_institution')),
            'type_institution' => $this->input->post('type_institution'),
        ];
        $this->db->insert('study', $student);
    }
}