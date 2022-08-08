<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<!doctype html>

 <html lang="en" class="no-focus"> 
    <head>
        
    <?php require_once("../MainHead/MeinHead.php");?>

        <title>NUEVO REGISTRO</title>
        
        

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

            <!-- HEADER -->

            <?php require_once("../MainHeader/MainHeader.php");?>

            <!-- HEADER -->
         
            <!-- Contenio de la pagina :S -->
            <main id="main-container">
                <div class="content">

                <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Nuevo Registro <small>Mesa de Partes</small></h3>
                           
                        </div>
                        <div class="block-content block-content-full">
                            <div class="form-group row">
                                <label class="col-12" for="part_asun">Asunto</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="part_asun" name="part_asun" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="part_desc">Descripción</label>
                                <div class="col-12">
                                    <textarea class="form-control" id="part_desc" name="part_desc" rows="6" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="block-content block-content-sm block-content-full bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-alt-info" id="btnadd">
                                            <i class="fa fa-share-alt mr-5"></i> Adjuntar Documentos
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-alt-primary" id="btnguardar">
                                            Guardar <i class="fa fa-save ml-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Listado de Documentos <small>Mesa de Partes</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <table id="detalle_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">Observación</th>
                                        <th>Archivo</th>
                                        <th class="text-center" style="width: 15%;">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        
        <?php require_once("modalarchivo.php");?> 

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript" src="registro.js"></script>
    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>