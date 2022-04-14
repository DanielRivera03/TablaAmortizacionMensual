jQuery(".form-valide").validate({
    rules: {
        "val-nombrecliente": {
            required: !0,
            minlength: 3
        },
        "val-montofinanciamiento": {
            required: !0
        },
        "val-plazocredito": {
            required: !0
        },
        "val-fechacreditos": {
            required: !0
        },
        
    },
    messages: {
        
        "val-nombrecliente": {
            required: "Por favor ingrese el nombre del cliente",
            minlength: "Su nombre debe contener al menos 3 caracteres"
        },
        "val-montofinanciamiento": "Por favor ingrese el monto de financiamiento",
        "val-plazocredito": "Por favor ingrese el plazo de pago",
        "val-fechacreditos": "Por favor ingrese la fecha de la solicitud",
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
    }
});