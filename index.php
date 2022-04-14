<?php 
// DATOS DE LOCALIZACION -> IDIOMA ESPAÑOL -> ZONA HORARIA EL SALVADOR (UTC-6)
setlocale(LC_TIME, "spanish");
date_default_timezone_set('America/El_Salvador');
$UrlGlobal = "http://" . $_SERVER['SERVER_NAME'] . ":90" . "/CalculoCuotas" . '/';
?>
        <!DOCTYPE html>
        <html lang="ES-SV" class="h-100">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <title>CashMan H.A. | Gestor Cuotas Mensuales</title>
            <!-- Favicon icon -->
            <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $UrlGlobal; ?>images/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $UrlGlobal; ?>images/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $UrlGlobal; ?>images/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $UrlGlobal; ?>images/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $UrlGlobal; ?>images/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $UrlGlobal; ?>images/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $UrlGlobal; ?>images/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $UrlGlobal; ?>images/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $UrlGlobal; ?>images/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $UrlGlobal; ?>images/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $UrlGlobal; ?>images/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $UrlGlobal; ?>images/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $UrlGlobal; ?>images/favicon-16x16.png">
            <link rel="manifest" href="<?php echo $UrlGlobal; ?>images/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="<?php echo $UrlGlobal; ?>images/ms-icon-144x144.png">
            <meta name="theme-color" content="#ffffff">
            <link href="<?php echo $UrlGlobal; ?>css/style.css" rel="stylesheet">
            <link href="<?php echo $UrlGlobal; ?>vista/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo $UrlGlobal; ?>js/mc-calendar.min.css" />
            <link rel="stylesheet" href="<?php echo $UrlGlobal; ?>css/estilos-tasainteres.css"
            <!-- Alerts -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script type="text/javascript">
            function rangeSlide(value) {
                document.getElementById('rangeValue').innerHTML = value;
            }
            </script>
        </head>

        <body class="h-100">
            <div class="progress ">
                <div class="progress-bar bg-info progress-animated" style="width: 50%; height:15px;" role="progressbar"></div>
            </div>
            <div class="authincation h-100">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-md-10">
                            <div class="authincation-content">
                                <div class="row no-gutters">
                                    <div class="col-xl-12">
                                        <div class="auth-form">
                                            <p style="display: flex; justify-content: flex-end;"><span class="badge badge-rounded badge-outline-light">Usuarios</span></p>
                                            <img class="logo-abbr logo-formulario" src="<?php echo $UrlGlobal; ?>images/logo.png" alt="logo-simple">
                                            <h3 class="text-center mb-4">Generador Cuotas Mensuales</h3>
                                            <div class="card overflow-hidden">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                    <div class="profile-photo">
                                                            <img style="border: 1px solid #000;" src="<?php echo $UrlGlobal; ?>images/3d_dollarsing.gif" width="100" class="img-fluid rounded-circle" alt="">
                                                        </div><br>
                                                        <div class="alert alert-light alert-dismissible alert-alt solid fade show">
															<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
															<strong>Tomar Nota: </strong> Este es un generador simple de cuotas mensuales seg&uacute;n el tiempo estipulado. Solamente se realiza el c&aacute;lculo simple de una posible cuota mensual con sus tasas de inter&eacute;s mensual, no se incluyen otros agregados que las instituciones financieras establecen.
														</div>
                                                            <div class="col-xl-12">
                                                                <form id="ingreso-datos-credito-clientes" action="mostrarestadocuenta.php" class="form-valide" name="formulariocreditosclienteshipotecas" method="post" autocomplete="off">
                                                                    <div class="row form-validation">
                                                                        
                                                                        <div class="col-lg-12 mb-2">
                                                                            <div id="consultarequisitos"></div>
                                                                        </div>
                                                                        <div class="col-lg-12 mb-2">
                                                                            <div class="form-group">
                                                                                <label class="text-label">Seleccione la tasa de inter&eacute;s <span class="text-danger">*</span></label>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-group mb-3  input-primary">
                                                                                    <input id="val-tasainteres" name="val-tasainteres" class="range" type="range" min="1" max="50" value="10" step="0.1" onmousemove="rangevalue1.value=value" />
                                                                                    <div class="col-lg-12 mb-2">
                                                                                    <output id="rangevalue1">Cargando...</output>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 mb-2">
                                                                            <div class="form-group">
                                                                                <label class="text-label">Nombre de Cliente <span class="text-danger">*</span></label>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-group mb-3  input-primary">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control" id="val-nombrecliente" name="val-nombrecliente" placeholder="Ingrese el nombre del cliente">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 mb-2">
                                                                            <div class="form-group">
                                                                                <label class="text-label">Monto Financiamiento <span class="text-danger">*</span></label>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-group mb-3  input-primary">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text"><i class="fa fa-money"></i></span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control" id="val-montofinanciamiento" name="val-montofinanciamiento" placeholder="Ingrese monto de cr&eacute;dito" onkeypress="return (event.charCode <= 57)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 mb-2">
                                                                            <div class="form-group">
                                                                                <label class="text-label">N&uacute;mero de A&ntilde;os Plazo Cr&eacute;dito <span class="text-danger">*</span></label>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-group mb-3  input-primary">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text"><i class="ti ti-shopping-cart-full"></i></span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control" id="val-plazocredito" name="val-plazocredito" placeholder="Ingrese el n&uacute;mero de a&ntilde;os plazo" onkeypress="return (event.charCode <= 57)" maxlength="2">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 mb-2">
                                                                            <div class="form-group">
                                                                                <label class="text-label">Fecha Ingreso Solicitud <span class="text-danger">*</span></label>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-group mb-3  input-primary">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text"><i class="ti ti-calendar"></i></span>
                                                                                        </div>
                                                                                        <input type="text" class=" form-control" id="val-fechacreditos" name="val-fechacreditos" placeholder="Ingrese fecha de inicio de cr&eacute;dito" readonly value="<?php echo date("Y-m-d"); ?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                                   
                                                                        <div class="col-lg-12 mb-2">
                                                                            <!-- ENVIO DATOS -->
                                                                            <button type="submit" id="enviar-datos-creditos" class="btn light btn-success"><i class="ti-hand-point-right"></i> Procesar Informaci&oacute;n y Generar Cuotas Mensuales</button>
                                                                        </div>
                                                                </form>  
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--**********************************
        Scripts
    ***********************************-->
                            <!-- Required vendors -->
                            <script src="<?php echo $UrlGlobal; ?>js/global.min.js"></script>
                            <!-- Jquery Validation -->
                            <script src="<?php echo $UrlGlobal; ?>js/jquery.validate.min.js"></script>
                            <!-- Form validate init -->
                            <script src="<?php echo $UrlGlobal; ?>js/jquery.validate-init.js"></script>
                            <script src="<?php echo $UrlGlobal; ?>js/mc-calendar.min.js"></script>
                            <script>
                                const firstCalendar = MCDatepicker.create({
                                    el: '#val-fechacreditos',
                                    customMonths: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    customWeekDays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sabado'],
                                    dateFormat: 'YYYY-MM-DD',
                                    customOkBTN: 'OK',
                                    customClearBTN: 'Limpiar',
                                    customCancelBTN: 'Cancelar',
                                    disableWeekends: true,
                                    minDate: new Date(),

                                })
                            </script>
                            <script src="<?php echo $UrlGlobal; ?>js/procesardatos.js"></script>

        </body>

        </html>