$(function () {

    $("#vendedorForm").validate({
        rules: {
            cedula: {
                required: true
            },
            nombre: {
                required: true
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            cedula: {
                required: "Campo obligatorio"
            },
            nombre: {
                required: "Campo obligatorio"
            },
            email: {
                required: "Campo obligatorio",
                email: "Formato incorrecto"
            }
        },
        errorElement: "span",
        errorClass: "text-danger",
        highlight: function (element) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        }
    });

});