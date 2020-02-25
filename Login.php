<?php

class Login extends CI_Controller
{
    public function construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('vw_login');
    }
}