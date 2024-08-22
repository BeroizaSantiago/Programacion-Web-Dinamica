$(document).ready(function () {
    $("form").validate({
        rules: {
            numero1: {
                required: true,
                number: true
            },
            numero2: {
                required: true,
                number: true
            },
            operacion: {
                required: true
            }
            
        },
        messages: {
            numero1: {
                required: "Por favor, ingresa el primer número",
                number: "Debe ser un número válido"
            },
            numero2: {
                required: "Por favor, ingresa el segundo número",
                number: "Debe ser un número válido"
            },
            operacion: {
                required: "Por favor, selecciona una operación"
            }
        },
    });
});
