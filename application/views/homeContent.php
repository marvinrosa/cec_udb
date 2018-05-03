<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('plantilla/head_principal');
$this->load->view('plantilla/backend/head_css');
$this->load->view('plantilla/backend/header');
$this->load->view('plantilla/backend/aside');
$this->load->view('plantilla/backend/content-up');
$this->load->view('plantilla/frontend/head_css');
$this->load->view('vistas/'.$contenido);
$this->load->view('plantilla/backend/content-down');
$this->load->view('plantilla/backend/footer');
$this->load->view('plantilla/footer_principal');
