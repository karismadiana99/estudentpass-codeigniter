<?php

function check_not_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('user_id')) {
        redirect('auth');
    }

    function check_already_login()
    {
        $ci = get_instance();
        if ($ci->session->userdata('user_id')) {
            redirect('apply');
        }
    }
}