<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

    public function index(){
        $data = array();
        $data['contenido'] = 'principal/index';
        $data['title'] ="Inicio|CEC-UDB";
        $this->load->view('initialContent',$data);
    }

    public function acerca(){

       $data = array();
        $data['contenido'] = 'principal/acerca';
        $data['title'] ="Inicio|CEC-UDB";
        $this->load->view('initialContent',$data);
    }

    public function servicios(){

        echo "Servicios";
    }

    public function equipo(){

        echo "Equipo";
    }

    public function testimonios(){

        echo "Testimonios";
    }

    public function blog(){

        echo "Blog";
    }

    public function contactenos(){

        echo "Contactenos";
    }
}