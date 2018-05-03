
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <?php

                //Externo
                if($this->session->userdata('idRol')==1){
                    $this->load->view('vistas/home/externo');
                }
                //GestorInterno
                elseif($this->session->userdata('idRol')==2){
                    $this->load->view('vistas/home/gestorinterno');
                }
                //GestorAdmin
                elseif ($this->session->userdata('idRol')==3){
                    $this->load->view('vistas/home/gestoradmin');
                }
                //Admin
                elseif ($this->session->userdata('idRol')==4){
                    $this->load->view('vistas/home/admin');
                }
                ?>
            </div>
        </div>
    </div>

</div>