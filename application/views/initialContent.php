<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Frontend

$this->load->view('plantilla/head_principal');
$this->load->view('plantilla/frontend/head_css');
$this->load->view('plantilla/frontend/nav');
$this->load->view('plantilla/frontend/header');
$this->load->view('vistas/'.$contenido);
$this->load->view('plantilla/frontend/footer');
$this->load->view('plantilla/footer_principal');

