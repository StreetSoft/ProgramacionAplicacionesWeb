<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url();?>assets2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  <?=$titulo?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?=base_url();?>assets2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets2/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url();?>assets2/demo/demo.css" rel="stylesheet" />
</head>

<body class=""  onload="mueveReloj()">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a  class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?=base_url();?>assets2/img/logo-small.png">
          </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Primaria Ramirez
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
        <li <?php if($titulo == 'Inicio') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/welcome/indexBack">
              <i class="nc-icon nc-bank"></i>
              <p>Inicio</p>
            </a>
          </li>

          <li <?php if($titulo == 'Usuarios') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Usuarios/">
              <i class="nc-icon nc-app"></i>
              <p>Usuarios</p>
            </a>
          </li>

          <li <?php if($titulo == 'Profesores') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Profesores/">
              <i class="nc-icon nc-app"></i>
              <p>Profesores </p>
            </a>
          </li>


          <li <?php if($titulo == 'Alumnos') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Alumnos/">
              <i class="nc-icon nc-tag-content"></i>
              <p>Alumnos</p>
            </a>
          </li>

          <li <?php if($titulo == 'Grupo') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Grupo/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Grupo</p>
            </a>
          </li>

          <li <?php if($titulo == 'Materias') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Materias/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Materias</p>
            </a>
          </li>

           <li <?php if($titulo == 'Noticias') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Noticias/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Noticias</p>
            </a>
          </li>

          <li <?php if($titulo == 'Comentarios') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Comentarios/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Comentarios</p>
            </a>
          </li>

          <li <?php if($titulo == 'Colegiatura') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Colegiatura/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Colegiatura</p>
            </a>
          </li>

          <li <?php if($titulo == 'Privilegios') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Privilegios/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Privilegios</p>
            </a>
          </li>

          <li <?php if($titulo == 'Calificaciones') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Calificaciones/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Calificaciones</p>
            </a>
          </li>
          <li <?php if($titulo == 'Eventos') { echo "class='active'";} ?>>
            <a href="<?=base_url();?>index.php/Eventos/">
              <i class="nc-icon nc-bell-55"></i>
              <p>Eventos</p>
            </a>
          </li>


          <li>
            <a href="<?=base_url();?>index.php/welcome/index/">
              <i class="nc-icon nc-spaceship"></i>
              <p>Ver Sitio</p>
            </a>
          </li>

          <li>
            <a href="<?=base_url();?>index.php/Login/logout/">
              <i class="nc-icon nc-spaceship"></i>
              <p> Log out</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" ><?=$titulo?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul> -->
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">