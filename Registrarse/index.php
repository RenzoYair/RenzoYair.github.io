<!doctype html>
<html lang="en" class="no-focus"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title> REGISTRARSE </title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="shortcut icon" href="../public/assets/img/favicons/ICONOPEDRO.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../public/assets/img/favicons/ICONOPEDRO.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../public/assets/img/favicons/ICONOPEDRO.png">
       
        <link rel="stylesheet" id="css-main" href="../public/assets/css/codebase.min.css">

    </head>
    <body>
      
        <div id="page-container" class="main-content-boxed">
            <main id="main-container">
                <div class="bg-body-dark bg-pattern" style="background-image: url('../public/assets/img/various/fotopedro.jpg');">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                <div class="py-30 text-center">
                                   
                                    <h1 class="h4 font-w700 mt-30 mb-10">Crear Nuevo Usuario</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Unete a esta gran familia!</h2>
                                </div>
                      
                                <div class="px-40" >
                                    <form method="post" id="usuario_form">

                                        <div class="block block-themed block-rounded block-shadow">
                                        <div class="block-header bg-pulse">
                                            <h3 class="block-title">INGRESA TUS DATOS</h3>
                                            <div class="block-options">
                                             
                                        </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="usu_nom">Nombre De Usuario</label>
                                                    <input type="text" class="form-control" id="usu_nom" name="usu_nom" placeholder="ejem: Renzo" required>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="usu_ape">Apellido De Usuario</label>
                                                    <input type="text" class="form-control" id="usu_ape" name="usu_ape" placeholder="ejem: Cornejo" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="usu_correo">Correo Electronico</label>
                                                    <input type="email" class="form-control" id="usu_correo" name="usu_correo" placeholder="ejem: Renzo@example.com" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="usu_pass1">Contraseña</label>
                                                    <input type="password" class="form-control" id="usu_pass1" name="usu_pass1" placeholder="********" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="usu_pass2">Confirmar Contraseña</label>
                                                    <input type="password" class="form-control" id="usu_pass2" name="usu_pass2" placeholder="********" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-6 push">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description">Confirmo que los datos son verdaderos</span>
                                                    </label>
                                                </div>
                                                <div class="col-sm-6 text-sm-right push">
                                                    <button type="submit" name="action" value="add" id="btnguardar" class="btn btn-alt-success">
                                                        <i class="fa fa-plus mr-10"></i> CREAR CUENTA
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content bg-body-light">
                                            <div class="form-group text-center">
                                                
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../">
                                                    <i class="fa fa-user text-muted mr-5"></i> ACCEDER
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

      

        <script src="../public/assets/js/core/jquery.min.js"></script>
        <script src="../public/assets/js/core/popper.min.js"></script>
        <script src="../public/assets/js/core/bootstrap.min.js"></script>
        <script src="../public/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../public/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../public/assets/js/core/jquery.appear.min.js"></script>
        <script src="../public/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../public/assets/js/core/js.cookie.min.js"></script>
        <script src="../public/assets/js/codebase.js"></script>

        <script src="../public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <script src="../public/assets/js/pages/op_auth_signup.js"></script>
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type="text/javascript" src="registrarse.js"></script>

        

    </body>
</html>