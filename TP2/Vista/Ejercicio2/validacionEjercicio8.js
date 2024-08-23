$(document).ready(function () {
    $("form").validate({
        rules: {
            edad: {
                required: true,
                number: true,
                min: 0
            },
            estudiante: {
                required: true
            }
        },
        messages: {
            edad: {
                required: "Por favor, ingresa tu edad",
                number: "La edad debe ser un número válido",
                min: "La edad no puede ser negativa"
            },
            estudiante: {
                required: "Por favor, selecciona si eres estudiante"
            }
        },
    });
});
