<?php

class Login extends CI_Controller
{
    public function construct()
    {
        parent::__construct();
    }

    public function page()
    {
        $this->load->view('vw_login');
    }

    public function act_login()
    {
        $ckUser = $this->ml->check_data($email, $password);

        if($ckUser->num_rows() > 0)
        {
            foreach($ckUser->result() as $dt)
            {
                $sessData = [
                    'user_id'   => $dt->user_id,
                    'email'     => $dt->email,
                    'hak_akses' => $dt->hak_akses
                ];
            }

            $this->session->set_userdata($sessData);

            echo "Login Success";
        }
        else
        {
            echo "Login Failed";
        }
    }
}