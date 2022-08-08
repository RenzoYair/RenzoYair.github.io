<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<!doctype html>

 <html lang="en" class="no-focus"> 
    <head>
        
    <?php require_once("../MainHead/MeinHead.php");?>

        <title>CONSULTAR ESTADO DE TRAMITE</title>
        
        

    </head>
    <body>
     
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed sidebar-inverse">
           
       
            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <div class="content-header content-header-fullrow">
                    
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

            <!-- HEADER -->

            <?php require_once("../MainHeader/MainHeader.php");?>

            <!-- HEADER ------------------------------------------------------------------------------------------>
         

            <main id="main-container">
                <div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Listado de Registros <small>Mesa de Partes</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <table id="partes_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">Ticket</th>
                                        <th style="width: 15%;">Fecha</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">Asunto</th>
                                        <th class="d-none d-sm-table-cell" style="width: 65%;">Descripción</th>
                                        <th class="text-center" style="width: 15%;"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Contenido -->

            <div id="modaldetalle" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detalle de Documentos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="detalle_data" class="table" width="100%">
                                <thead>
                                    <tr>
                                        <th>Observación</th>
                                        <th>Archivo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 
        <script type="text/javascript" src="consultarestado.js"></script>

    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>