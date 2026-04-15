$(function () {

    // Deshabilitar el campo abono inicialmente
    $("#abono").prop("disabled", true);

    $.validator.addMethod("notExceedSaldo", function (value, element) {
        var saldo = parseFloat($("#saldo").val()) || 0;
        var abono = parseFloat(value) || 0;
        return abono <= saldo;
    }, "El abono no puede ser mayor al saldo anterior.");

    $.validator.addMethod("saldoConsultado", function (value, element) {
        return $("#saldo").val().trim() !== "";
    }, "Debe consultar el saldo antes de ingresar el abono.");

    $("#abonoForm").validate({
        rules: {
            compra: {
                required: true
            },
            abono: {
                required: true,
                number: true,
                min: 0.01,
                notExceedSaldo: true,
                saldoConsultado: true
            }
        },
        messages: {
            compra: {
                required: "Campo obligatorio"
            },
            abono: {
                required: "Campo obligatorio",
                number: "Ingrese un valor numérico",
                min: "Ingrese un monto mayor a 0"
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

    $("#compra").on("change", function () {
        // Si cambian la selección, limpiar saldo y deshabilitar abono
        $("#saldo").val("");
        $("#abono").val("");
        $("#abono").prop("disabled", true);
    });

    $("#consultarBtn").on("click", function () {
        var compraId = $("#compra").val();

        if (!compraId) {
            $("#saldo").val("");
            alert("Seleccione un producto primero.");
            return;
        }

        $.ajax({
            url: "/Practica3/Controllers/AbonoController.php",
            method: "GET",
            dataType: "json",
            data: {
                action: "saldo",
                id: compraId
            },
            success: function (response) {
                if (response.success) {
                    $("#saldo").val(response.saldo);
                    $("#abono").prop("disabled", false); // Habilitar campo abono
                } else {
                    $("#saldo").val("");
                    $("#abono").prop("disabled", true); // Mantener deshabilitado
                    alert(response.message || "No se pudo obtener el saldo.");
                }
            },
            error: function () {
                $("#saldo").val("");
                $("#abono").prop("disabled", true); // Mantener deshabilitado
                alert("Error de comunicación al consultar el saldo.");
            }
        });
    });

});