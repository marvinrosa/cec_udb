<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if($this->session->userdata('idRol')==4): ?>
                    <img src="<?php echo base_url(); ?>images/admin-512.png" class="img-circle" alt="User Image">
                <?php elseif($this->session->userdata('idRol')==3): ?>
                    <img src="<?php echo base_url(); ?>images/gestor-admin.png" class="img-circle" alt="User Image">
                <?php elseif($this->session->userdata('idRol')==2): ?>
                    <img src="<?php echo base_url(); ?>images/gestor-int.png" weight="128" width="128" class="img-circle" alt="User Image">
                <?php endif?>
            </div>
            <div class="pull-left info">
                <p><?php  echo  $this->session->userdata('usuarioCorreo');?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Conectado </a>

            </div>
        </div>

        <!--Validando el rol del usuario para mostrar los elementos correspondientes a cada uno en la sidebar -->
        <?php if($this->session->userdata('idRol')==4): ?>

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li>
                    <a href="<?php echo base_url()?>home">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Casos</span>
                        <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">

                        <li><a href="<?php echo base_url()?>casos"><i class="fa fa-circle-o"></i>Casos por atender</a></li>
                        <li><a href="<?php echo base_url()?>asignados"><i class="fa fa-circle-o"></i>Casos asignados</a></li>
                        <li><a href="<?php echo base_url()?>rechazados""><i class="fa fa-circle-o"></i>Casos Rechazados</a></li>
                        <li><a href="<?php echo base_url()?>historicos""><i class="fa fa-circle-o"></i>Casos Historicos</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Catálogos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>tipo"><i class="fa fa-circle-o"></i>Tipos de Caso</a></li>
                        <li><a href="<?php echo base_url()?>institucion"><i class="fa fa-circle-o"></i>Instituciones</a></li>
                        <li><a href="<?php echo base_url()?>gestores"><i class="fa fa-circle-o"></i>Gestores</a></li>
                    </ul>
                </li>


                <li><a href="<?php echo base_url()?>seguimiento"><i class="fa fa-book"></i> <span>Seguimiento</span></a></li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-print"></i>
                        <span> Reportes </span>
                        <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>reportes"><i class="fa fa-circle-o"></i> <span>Reporte general</span></a></li>
                        <li><a href="<?php echo base_url()?>reportes2"><i class="fa fa-circle-o"></i> <span>Casos por institucion</span></a></li>
                    </ul>
                </li>
            </ul>
        <?php elseif($this->session->userdata('idRol')==3): ?>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li class="treeview">
                    <a href="<?php echo base_url()?>home">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Casos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">

                        <li><a href="caso"><i class="fa fa-circle-o"></i> Ver casos</a></li>

                        <li><a href="casos"><i class="fa fa-circle-o"></i> Ver casos</a></li>

                        <li><a href="#"><i class="fa fa-circle-o"></i> Asignar casos</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-print"></i>
                        <span> Reportes </span>
                        <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="reportes"><i class="fa fa-circle-o"></i> <span>Reporte general</span></a></li>
                        <li><a href="reportes2"><i class="fa fa-circle-o"></i> <span>Casos por institucion</span></a></li>
                    </ul>
                </li>
            </ul>

        <?php elseif($this->session->userdata('idRol')==2): ?>

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li class="treeview">
                    <a href="home">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Casos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url() ?>verCasos"><i class="fa fa-circle-o"></i> Casos por atender</a></li>
                        <li><a href="<?php echo base_url(); ?>GestorInterno/historicoR"><i class="fa fa-circle-o"></i>Histórico casos resueltos</a></li>                    </ul>
                </li>
                <li><a href="<?php echo base_url()?>seguimiento/interno"><i class="fa fa-book"></i> <span>Seguimiento</span></a></li>
            </ul>


        <?php endif?>
    </section>
    <!-- /.sidebar -->
</aside>
    <!-- /.sidebar -->
</aside>
