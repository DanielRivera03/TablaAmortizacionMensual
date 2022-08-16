<?php 

/*
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
░░      TABLA DE AMORTIZACION MENSUAL                                                
░░              CREDITOS SIMPLES
░░≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡                       
░░                                                                               
░░   -> AUTOR: DANIEL RIVERA                                                               
░░   -> PHP 8.1, JAVASCRIPT, JQUERY                       
░░   -> GITHUB: (danielrivera03)                                             
░░       https://github.com/DanielRivera03                              
░░   -> TODOS LOS DERECHOS RESERVADOS                           
░░       © 2021 - 2022    
░░                                                      
░░   -> POR FAVOR TOMAR EN CUENTA TODOS LOS COMENTARIOS
░░      Y REALIZAR LOS AJUSTES PERTINENTES ANTES DE INICIAR
░░
░░      ♥♥ HECHO CON ALGUNAS TAZAS DE CAFE ♥♥
░░                                                                               
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

*/ 



// RECEPCION DE DATOS
 $NombreClientes = (empty($_POST['val-nombrecliente'])) ? NULL : $_POST['val-nombrecliente'];
 $MontoFinanciamiento = (empty($_POST['val-montofinanciamiento'])) ? NULL : $_POST['val-montofinanciamiento'];
 $PlazoFinanciamiento = (empty($_POST['val-plazocredito'])) ? NULL : $_POST['val-plazocredito'];
 $FechaSolicitud = (empty($_POST['val-fechacreditos'])) ? NULL : $_POST['val-fechacreditos'];
 $TasaInteres = (empty($_POST['val-tasainteres'])) ? NULL : $_POST['val-tasainteres'];
 $UrlGlobal = "http://" . $_SERVER['SERVER_NAME'] . ":90" . "/TablaAmortizacionMensual" . '/';


 // NO PERMITIR VISTA SI DATOS NO HAN SIDO PROCESADOS EN FORMULARIO
 if(empty($NombreClientes)){
    header('location:index.php');
 }else{
    // CALCULO DATOS CREDITICIOS
    $CoversionAnio_Meses = $PlazoFinanciamiento * 12; // AÑOS A MESES
    $FechaCompleta = strtotime($FechaSolicitud); // OBTENER FECHA COMPLETA
    $ObtenerDia = date("d", $FechaCompleta); // OBTENER UNICAMENTE DIA
    if($ObtenerDia >=29 && $ObtenerDia <=31){
        $CalculoDiasPrestamos = $CoversionAnio_Meses;
    }else{
        $CalculoDiasPrestamos = $CoversionAnio_Meses + 1;
    }// CIERRE if($ObtenerDia >=29 && $ObtenerDia <=31)
    // -> CALCULO CUOTAS CREDITOS CLIENTES
    $SaldoInicialCredito = $MontoFinanciamiento; // SALDO INICIAL DE CREDITO
    $CalculoCapital = $MontoFinanciamiento / $CoversionAnio_Meses; // CALCULO CAPITAL
    $CalculoCuotaMensualCapital = ($MontoFinanciamiento/$CoversionAnio_Meses+($MontoFinanciamiento/$CoversionAnio_Meses)*$TasaInteres/100)*.13+($MontoFinanciamiento/$CoversionAnio_Meses+($MontoFinanciamiento/$CoversionAnio_Meses)*$TasaInteres/100);
?>
        <style>
            .aviso_clientes {
                display: none;
                text-align: justify;
            }

            @media print {
                @page {
                    size: auto;
                    margin: 0mm;
                }

                #aviso_empleados,
                #impresion_solicitud,
                #registro_solicitud {
                    display: none;
                }

                .aviso_clientes {
                    display: block;
                }
            }
        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>CashMan H.A. | Estado Cuenta Cr&eacute;ditos Clientes </title>
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
        <div class="progress ">
            <div class="progress-bar bg-info progress-animated" style="width: 100%; height:15px;" role="progressbar"></div>
        </div>
        <?php
        // DATOS DE LOCALIZACION -> IDIOMA ESPAÑOL -> ZONA HORARIA EL SALVADOR (UTC-6)
        setlocale(LC_TIME, "spanish");
        date_default_timezone_set('America/El_Salvador');
        
        echo '
        <link href="';
        echo $UrlGlobal;
        echo 'css/style.css" rel="stylesheet">
        <div class="table-responsive">
        <table style="width: 95%; margin: auto; padding: 1rem 0 0 0;"  cellpadding="5">
	<tr>
	<td width="65%"><br><br>
        <img style="width: 50px;" src="';
        echo $UrlGlobal;
        echo 'images/logo.png"><img style="margin: 0 0 0 .5rem; width: 110px;" src="';
        echo $UrlGlobal;
        echo 'images/logo-text.png"><br><br>
	    <b><i style="font-size: .8rem" class="fa fa-university"></i> ESTADO DE CUENTA GENERADO';
        echo '</b><br />
        <i style="font-size: .8rem" class="fa fa-info-circle"></i> Cliente : ';
        echo $NombreClientes;
        echo ' ';
        echo '
    <br><i style="font-size: .8rem" class="fa fa-hourglass-half"></i> Plazo: ';
        echo $PlazoFinanciamiento. " a&ntildeos / ".$CoversionAnio_Meses." meses";
        echo ' 
	</td>
	<td width="35%">         
	<i style="font-size: .8rem" class="fa fa-balance-scale"></i> C&oacute;digo No. : ';
        echo 1;
        echo '<br />
    <i style="font-size: .8rem" class="fa fa-line-chart"></i> Tasa Inter&eacute;s Mensual : ';
        echo $TasaInteres;
        echo '%<br />
	<i style="font-size: .8rem" class="fa fa-calendar-check-o"></i> Emisi&oacute;n : ';
        echo date('Y-m-d H:i:s');
        echo '<br />
	</td>
	</tr>
	</table><br><br>
    <article style="width: 95%; margin: auto; display: block;">';
        echo '
        
        <article style="width: 95%; margin: auto; display: flex; justify-content: center;">
        <form method="post">
            <a href="javascript:window.print()"><button id="impresion_solicitud" style="margin: .5rem;" type="button" class="btn btn-rounded btn-dark"><span class="btn-icon-left text-dark"><i class="fa fa-print color-dark"></i></span>Imprimir Estado de Cuenta</button></a>
        </form>
        </article>
    </article><br>
            <table style="width: 95%; margin: auto;" class="table table-striped table-responsive-sm table-hover">
                <thead style="background: #079992; color: #fff;">
                    <tr>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Estado</th>
                        <th>&Uacute;ltima Fecha de Pago</th>
                        <th>Cuota Mensual</th>
                        <th>Capital</th>
                        <th>Saldo Final</th>
                    </tr>
                </thead>
            <tbody>';
        /*
        -> IMPORTANTE:
            $CalculoDiasPrestamos SE REALIZA LA SUMATORIA DE + 1 AL TOTAL, YA QUE EL PRIMER REGISTRO MOSTRADO A LOS CLIENTES NO SE TOMA EN CUENTA, PUESTO A QUE ES EL INDICADOR DE INICIO DE LA SOLICITUD QUE EL CLIENTE REALIZO A LA EMPRESA, DESDE EL VALOR $ContadorCuotas = 2, O SEGUNDA VUELTA COMIENZA EL CALCULO DEL ESTADO DE CUENTA DE LOS CLIENTES SEGUN EL PRODUCTO ASOCIADO.

            ------> AL NO REALIZAR ESTE AJUSTE, EL CALCULO NO ES EXACTO Y ERRONEO <-------
    */
        // VALIDACION DE TIPO DE PRESTAMO ADQUIRIDO POR CLIENTES
        if ($ObtenerDia >= 29 && $ObtenerDia <= 31) {
            
        }

        // FECHA INICIO DE CREDITO -> SEGUN INGRESO DE SOLICITUD CREDITICIA
        // FORMATO FECHA DE REGISTRO -> AÑO/MES/DIA = YYYY/MM/DD
        // FORMATO FECHA DE MUESTRA CLIENTES -> DIA/MES/AÑO = DD/MM/YYYY
        //$FechaSolicitud = '2021-12-01';
        $IntervaloFecha = new DateInterval('P1D'); // INTERVALO 1 DIA A LA VEZ -> EN UN SOLO MES
        $InicioCreditos = date_create($FechaSolicitud); // ASIGNAR INICIO DE CALCULO ESTADO DE CUENTE CLIENTES
        /*
    RECALCULAR FECHAS DE PAGOS SI LA SOLICITUD FUE INGRESADA EN LOS DIAS: [25,26,27,28,29,30 Y 31 DE CUALQUIER MES]
    -> MOTIVO: PARA EVITAR CALCULOS ERRONEOS DE FECHAS EN EL MES DE FEBRERO PRINCIPALMENTE, CUANDO EL AÑO ES BISIESTO O SIMPLEMENTE EL INGRESO DE LA SOLICITUD EXCEDE LOS 28 DIAS DEL << X >> MES DE INGRESO Y REGISTRO Y EVITAR FECHAS INVALIDAS [NO EXISTENTES] AL MOMENTO DE RECALCULAR LAS FECHAS DE PAGO

    --> EL MAXIMO DIA PARA RECALCULAR FECHAS DE PAGOS ES <<24>> DE CADA MES, DE 25 A 31 SEGUN MES EN CURSO, LAS ULTIMAS FECHAS DE PAGO SIEMPRE SERAN CADA 28 DE MES 

    -> PARA ESTE CONDICION NO SE EXCLUYEN LOS SABADOS Y DOMINGOS, MOTIVOS POR EL CUAL EL TRATAMIENTO A ESTOS CLIENTES ES DIFERENTE Y SU FECHA DE PAGO DEBE SER ANTES DE LA FECHA INDICADA SI EL DIA DE PAGO ASIGNADO ES SABADO O DOMINGO
*/
        if ($ObtenerDia == 25) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 25, ENTONCES SE SUMA TRES DIAS A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("+ 3 days"));
        } else if ($ObtenerDia == 26) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 26, ENTONCES SE SUMA DOS DIAS A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("+ 2 days"));
        } else if ($ObtenerDia == 27) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 27, ENTONCES SE SUMA UN DIA A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("+ 1 days"));
        } else if ($ObtenerDia == 28) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 28, ENTONCES SE NO SE REALIZA NINGUN CALCULO A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("+ 0 days"));
        } else if ($ObtenerDia == 29) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 29, ENTONCES SE RESTA UN DIA A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("- 1 days"));
        } else if ($ObtenerDia == 30) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 30, ENTONCES SE RESTA DOS DIAS A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("- 2 days"));
        } else if ($ObtenerDia == 31) {
            // SI EL DIA DE INGRESO DE LA SOLICITUD ES IGUAL A 31, ENTONCES SE RESTA TRES DIAS A LA FECHA DE PAGO FINAL CLIENTES
            date_add($InicioCreditos, date_interval_create_from_date_string("- 3 days"));
        }
        //$InicioCreditos = new DateTime($Gestiones->getFechaIngresoSolicitudCreditos()); // ASIGNAR INICIO DE CALCULO ESTADO DE CUENTE CLIENTES
        $FinCreditos = new DateTime(date("Y-m-d", strtotime($FechaSolicitud . "+ $CalculoDiasPrestamos month"))); // CALCULO FINAL DE ESTADO DE CUENTA CLIENTES
        $IntervaloFecha = new DateInterval('P1M'); // INTERVALO 1 VEZ AL MES
        $CuotasMensualesGeneradas = new DatePeriod($InicioCreditos, $IntervaloFecha, $FinCreditos); // GENERAR EL CALCULO SEGUN EL PERIODO ASIGNADO AL CLIENTE
        // EXTRAER FECHA COMPLETA COMO ENTERO PARA COMPROBACIONES
        $ExtraerFecha = strtotime($FechaSolicitud);
        $ObtenerMes = date("m", $ExtraerFecha); // OBTENER MES EN CUESTION DE SOLICITUD DE CREDITO
        $ObtenerDia = date("d", $ExtraerFecha); // OBTENER DIA EN CUESTION DE SOLICITUD DE CREDITO
        $ContadorCuotas = 0; // INICIALIZAR CONTADOR DE CUOTAS ASIGNADAS
        
            foreach ($CuotasMensualesGeneradas as $DiaAsignado) {
                $ContadorCuotas++; // AUMENTO EN 1 SEGUN EL RANGO A CUMPLIR -> "N" CUOTAS
                echo '
                <tr>
                    <th>';
                echo $ContadorCuotas;
                echo '</th>
                        <td>';
                echo "Pr&eacute;stamos Personales";
                echo '</td>
                        <td>';
                if ($ContadorCuotas == 1) {
                    echo '<span class="badge badge-primary">N/D</span>';
                } else {
                    echo '<span class="badge badge-danger">Pendiente</span>';
                }
                echo '
                        </td>
                    <td>';
                // SE ASIGNA DEL 1 AL 7 LOS DIAS DE TODA LA SEMANA, TOMANDO EN CUENTA QUE 6 Y 7 SON FINES DE SEMANAS NO LABORALES, POR LO CUAL LAS CUOTAS RECIBEN UN TRATAMIENTO EN ESOS CASOS
                if ($ContadorCuotas == 1) {
                    echo '------------------------';
                } else {
                    $DiaLaboral = $DiaAsignado->format('N'); // OBTENER EL NUMERO DE DIAS DE LA SEMANA EN FORMATO NUMERICO ENTERO [LUNES A DOMINGO --> 1 - 7 RESPECTIVAMENTE]
                    // RECALCULAR SI ES DOMINGO
                    if ($DiaLaboral == '7') {
                        /*
                    PARA LOS CLIENTES QUE INGRESEN SOLICITUD DE CREDITOS ENTRE LAS FECHAS 28, 29, 30 Y 31 DE CADA MES, SU ULTIMA FECHA DE PAGO SERA EL 28 DE CADA MES RESPECTIVAMENTE
                    >> ESTO CON EL FIN DE EVITAR CALCULOS ERRONEOS EN EL MES DE FEBRERO POR LA DIFERENCIA DE DIAS BISIESTOS / NO BISIESTOS [28 Y 29 MAXIMO RESPECTIVAMENTE]
                */
                        // RESTAR UN DIA A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        if ($ObtenerDia == 25) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) + 3;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 26) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) + 2;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 27) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) + 1;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 28) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha);
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 29) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) - 1;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 30) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) - 2;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            // RESTAR TRES DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 31) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) - 3;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            /*
                        SI EL RECALCULO DE FECHAS DENTRO DE LOS DIAS EXCLUIDOS SE ENCUENTRA EN EL RANGO DE LAS FECHAS 01 - 09, SE AGREGA LA IMPRESION DEL CORRESPONDIENDE 0 [CERO] INICIAL
                            APLICABLE PARA -> $ObtenerDia , $RecalcularFechaDomingos , $RecalcularFechaSabados
                    */
                        } else if ($ObtenerDia < 10) {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) + 1;
                            if ($RecalcularFechaDomingos < 10) {
                                echo '0', $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            } else {
                                echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                            }
                            // IMPRESION DE FECHA NORMAL SI TODAS LAS CONDICIONES ANTERIORES NO SE CUMPLEN
                        } else {
                            $RecalcularFechaDomingos = date("d", $ExtraerFecha) + 1;
                            echo $DiaAsignado->format($RecalcularFechaDomingos . '-m-Y');
                        }
                        // RECALCULAR SI ES SABADO
                    } else if ($DiaLaboral == '6') {
                        /*
                    PARA LOS CLIENTES QUE INGRESEN SOLICITUD DE CREDITOS ENTRE LAS FECHAS 29, 30 Y 31 DE CADA MES, SU ULTIMA FECHA DE PAGO SERA EL 28 DE CADA MES RESPECTIVAMENTE
                    >> ESTO CON EL FIN DE EVITAR CALCULOS ERRONEOS EN EL MES DE FEBRERO POR LA DIFERENCIA DE DIAS BISIESTOS / NO BISIESTOS [28 Y 29 MAXIMO RESPECTIVAMENTE]
                */
                        // RESTAR UN DIA A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        if ($ObtenerDia == 25) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) + 3;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 26) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) + 2;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 27) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) + 1;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 28) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha);
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 29) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) - 1;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            // RESTAR DOS DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 30) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) - 2;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            // RESTAR TRES DIAS A LA FECHA DE INGRESO DE SOLICITUD -> FECHAS DE PAGO MENSUALES
                        } else if ($ObtenerDia == 31) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) - 3;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            /*
                        SI EL RECALCULO DE FECHAS DENTRO DE LOS DIAS EXCLUIDOS SE ENCUENTRA EN EL RANGO DE LAS FECHAS 01 - 09, SE AGREGA LA IMPRESION DEL CORRESPONDIENDE 0 [CERO] INICIAL
                            APLICABLE PARA -> $ObtenerDia , $RecalcularFechaDomingos , $RecalcularFechaSabados
                    */
                        } else if ($ObtenerDia < 10) {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) + 2;
                            if ($RecalcularFechaSabados < 10) {
                                echo '0', $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            } else {
                                echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                            }
                            // IMPRESION DE FECHA NORMAL SI TODAS LAS CONDICIONES ANTERIORES NO SE CUMPLEN
                        } else {
                            $RecalcularFechaSabados = date("d", $ExtraerFecha) + 2;
                            echo $DiaAsignado->format($RecalcularFechaSabados . '-m-Y');
                        }
                    } else { // SI LAS FECHAS NO NECESITAN SER RECALCULADAS, SE IMPRIME TAL CUAL EN EL ESTADO DE CUENTA
                        echo $DiaAsignado->format('d-m-Y');
                    }
                    echo PHP_EOL;
                }
                // CALCULO CUOTA MENSUAL
                echo '
                </td>
                    <td class="color-primary">$';
                if ($ContadorCuotas == 1) {
                    echo "0.00";
                } else {
                    echo number_format($CalculoCuotaMensualCapital, 2);
                }
                echo ' USD</td>
                </td>
                    <td class="color-primary">$';
                // CALCULO DE CAPITAL
                if ($ContadorCuotas == 1) {
                    echo "0.00";
                } else {
                    echo number_format($CalculoCapital, 2);
                }
                echo ' USD</td> 
                    <td class="color-primary">$';
                // CALCULO SALDO FINAL
                if ($ContadorCuotas == 1) {
                    echo number_format($SaldoInicialCredito, 2);
                } else {
                    $SaldoInicialCredito = $SaldoInicialCredito - $CalculoCapital;
                    echo number_format($SaldoInicialCredito, 2);
                }
                echo ' USD</td>
                </tr>
            ';
            }
            echo '
                </tbody>
            </table>
        </div>';
        ?>
                    </tbody>
                </table>
            </div>
        

            <script src="<?php echo $UrlGlobal; ?>js/global.min.js"></script>
            <?php } ?>

