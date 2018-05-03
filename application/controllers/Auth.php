<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    //Contructor de la clase
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('auth_model');
    }

    //Función que muestra la vista de Inicio de Sesión
    public function index()
    {
        $data = array();
        $data['contenido'] = 'auth/login';
        $data['title'] ="Iniciar Sesión|CEC-UDB";
        $this->load->view('initialContent',$data);

    }
}