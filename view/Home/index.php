<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MeinHead.php");?> 
<!doctype html>

 <html lang="en" class="no-focus"> 
    <head>
        
    <?php require_once("../MainHead/MeinHead.php");?>

        <title>HOME - MESA DE PARTES</title>
        
        

    </head>
    <body>
     
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed sidebar-inverse" >
           
       
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
                                <a class="img-link">
                                    <img class="img-avatar" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html"><?php echo $_SESSION["usu_nom"] ." ". $_SESSION["usu_ape"]?></a>
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

                 <!-- HEADER -->

            <?php require_once("../MainHeader/MainHeader.php");?>

                <!-- HEADER -->
         

                  <main id="main-container">


                <!-- Contenio de la pagina :S -->
                <main id="main-container">
                <div class="content">
               
                <h2 class="content-heading"> "MESA DE PARTES: PEDRO P. DIAZ" <small><code class="text-lowercase">BIENVENIDO</code></small></h2>
                    <div class="row items-push">
                    
                        <div class="col-md-4 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                                <img class="img-fluid options-item" src="https://iestp-ppd.edu.pe/images/carreras/logo_DSI.jpg" alt="">
                                <div class="options-overlay bg-white-op-90">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 mb-5">MESA DE PARTES</h3>
                                        <h4 class="h6 text-gray-dark mb-15">DESARROLLO DE SISTEMAS DE INFORMACION</h4>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    </div>

                    </main>

                <!-- fin -->
            </main>

            <?php require_once("../MainFooter/MainFooter.php");?>

        </div>

       



        <!-- Css y Js  diseños y argumentos.-->
        <?php require_once("../MainJS/MainJS.php");?>


    </body>
</html>

<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>