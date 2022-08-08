<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>

 <html lang="en" class="no-focus"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>TRAMITES SECRETARIA ACADEMICA </title>
      

        <link rel="shortcut icon" href="../../public/assets/img/favicons/ICONOPEDRO.png">

        <link rel="stylesheet" id="css-main" href="../../public/assets/css/codebase.min.css">

    </head>
    <body>
     
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed sidebar-inverse">
           
       
            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <div class="content-header content-header-fullrow px-15">
                    
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="https://iestp-ppd.edu.pe/">
                                        <span class="font-size-xl text-dual-primary-dark">PEDRO P. </span><span class="font-size-xl text-primary">DIAZ</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                       
                            <!-- BARRA LATERAL IZQUIERDA -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" >
                                    <img class="img-avatar" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" ><?php echo $_SESSION["usu_nom"] ." ". $_SESSION["usu_ape"]?></a>
                                    </li>
                                    <li class="list-inline-item">


                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                           
                        </div>
<!-- MainMenu -->
                        <?php require_once("../Mainmenu/Mainmenu.php");?>
                    </div>
                </div>
            </nav>

            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section">
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>

                    </div>

                    <div class="content-header-section">


                        <!-- Opciones del usuario -->

                        
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["usu_nom"] ." ". $_SESSION["usu_ape"]?><i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                
                            
                                                         
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../">
                                    <i class="si si-logout mr-5"></i> Salir
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </header>

                  <main id="main-container">


                <!-- Contenio de la pagina :S -->
                <div class="content">
                    
                    
                     <!-- User Widgets with Images -->
                     <h2 class="content-heading">TRAMITES DISPONIBLES <small> Mesa de Partes</small></h2>
                    <div class="row">
                        <!-- Row #1 -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> CONSTANCIA DE ESTUDIOS </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-md-6 col-xl-3">
                        
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                          
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo4.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> REPORTE DE NOTAS</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo25.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> RESERVA DE MATRICULA </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo1.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> LICENCIA DE ESTUDIOS </div>
                             
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> RANKING DE NOTAS </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> REINGRESOS </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5"> CAMBIO INTERNO DE CARRERA </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5">  CAMBIO DE TURNO </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5">  TRASLADO EXTERNO </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5">  CAMBIO DE APELLIDOS Y/O NOMBRES </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop text-center" href="../Registro/">
                                <div class="block-content block-content-full bg-image" style="background-image: url('../../public/assets/img/photos/photo30.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="../../public/assets/img/avatars/avatarpedro.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-w600 mb-5">  CARTA PARA PRACTICAS PROFESIONALES </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->


                    
                </div>
                <!-- fin -->
            </main>

           

        </div>
       
        

        <!-- Css y Js  diseños y argumentos.-->
        <script src="../../public/assets/js/core/jquery.min.js"></script>
        <script src="../../public/assets/js/core/popper.min.js"></script>
        <script src="../../public/assets/js/core/bootstrap.min.js"></script>
        <script src="../../public/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../../public/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../../public/assets/js/core/jquery.appear.min.js"></script>
        <script src="../../public/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../../public/assets/js/core/js.cookie.min.js"></script>
        <script src="../../public/assets/js/codebase.js"></script>
    </body>
</html>

<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>