<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Primaria Ramires</title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url();?>/assets/img/ignacio.jpg">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="<?=base_url();?>index.php/welcome/index"><img src="<?=base_url();?>/assets/img/ignacio_logo.jpg" alt="Responsive image"></a>
                            </div>
                            <div class="login-content">
                            <?php if($this->session->userdata('curp_usuario')): ?>
                                <a href="<?=site_url('login/logout');?>">Log out</a>
                                    <?php else:?>
                                    <a href="<?=site_url('login');?>">Login</a>
                                <?php endif;?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?=base_url();?>index.php/welcome/index">Inicio</a></li>
                                    </li>
                                    <li><a href="#">Conocenos</a>
                                        <ul class="dropdown">
                                            <li><a href="<?=base_url();?>index.php/welcome/his">Historia</a></li>
                                            <li><a href="<?=base_url();?>index.php/welcome/bio">Quienes somos</a></li>
                                            <li><a href="<?=base_url();?>index.php/welcome/noti">Noticias</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Primaria</a>
                                        <ul class="dropdown">
                                            <li><a href="<?=base_url();?>index.php/welcome/plan">Plan de Es</a></li>
                                            <li><a href="<?=base_url();?>index.php/welcome/event">Eventos</a></li>
                                            <li><a href="<?=base_url();?>index.php/welcome/cali">Calificaciones</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="<?=base_url();?>index.php/welcome/contact">Contactonos</a></li>
                                    <li><a href="#">Proceso de Inscripcion</a>
                                        <ul class="dropdown">
                                            <li><a href="<?=base_url();?>index.php/welcome/docu">Docuemntos</a></li>
                                            <li><a href="<?=base_url();?>index.php/welcome/fich">ficha</a></li>
                                        </ul>
                                    <li><a href="<?=base_url();?>index.php/welcome/faq">faq</a></li>
                                   

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>