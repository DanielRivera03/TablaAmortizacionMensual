$(document).ready(function () {
    $("#ingreso-datos-credito-clientes").on('submit', (function (e) { // "e" IDENTIFICADOR DE ACCION PARA CAPTURAR EVENTO DE FORMULARIO
        // VALIDACION DE ELEMENTOS DE FORMULARIO
        var $NombreCliente = $('#val-nombrecliente').val(); // NOMBRE CLIENTES CREDITO CLIENTES
        var $MontoFinanciamiento = $('#val-montofinanciamiento').val(); // MONTO FINANCIAMIENTO
        var $PlazoCredito = $('#val-val-plazocredito').val(); // SALARIO DE CLIENTE PRODUCTO CREDITO CLIENTES
        var $FechaCredito = $('#val-fechacreditos').val(); // MONTO DE FINANCIAMIENTO PRODUCTO CREDITO CLIENTES
        if ($NombreCliente === "") {
            AlertaUsuarioMostrar("Campo Incompleto", "Ingrese el nombre del cliente", "warning");
            return false;
        }
        if ($MontoFinanciamiento === "") {
            AlertaUsuarioMostrar("Campo Incompleto", "Ingrese el monto a financiar", "warning");
            return false;
        }
        if ($PlazoCredito === "") {
            AlertaUsuarioMostrar("Campo Incompleto", "Ingrese el plazo a financiar", "warning");
            return false;
        }
        if ($FechaCredito === "") {
            AlertaUsuarioMostrar("Campo Incompleto", "Ingrese la fecha de inicio de la solicitud crediticia", "warning");
            return false;
        }
    }));
});
// FUNCION PARA MOSTRAR ALERTAS A USUARIOS
function AlertaUsuarioMostrar(titulo, descripcion, icono) {
    Swal.fire(
        titulo, // ENCABEZADO 
        descripcion, // CUERPO
        icono // ICONO DE ALERTA
    );
}