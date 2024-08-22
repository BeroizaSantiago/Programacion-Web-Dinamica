$(document).ready(function () {
    $("form").validate({
        rules: {
            lunes: {
                required: true,
                min: 0 // Asegura que el valor sea mayor o igual a 0
            },
            martes: {
                required: true,
                min: 0 // Asegura que el valor sea mayor o igual a 0
            },
            miércoles: {
                required: true,
                min: 0 // Asegura que el valor sea mayor o igual a 0
            },
            jueves: {
                required: true,
                min: 0 // Asegura que el valor sea mayor o igual a 0
            },
            viernes: {
                required: true,
                min: 0 // Asegura que el valor sea mayor o igual a 0
            }
        },
        messages: {
            lunes: {
                required: "Por favor, ingresa las horas del lunes",
                min: "Las horas no pueden ser negativas"
            },
            martes: {
                required: "Por favor, ingresa las horas del martes",
                min: "Las horas no pueden ser negativas"
            },
            miércoles: {
                required: "Por favor, ingresa las horas del miércoles",
                min: "Las horas no pueden ser negativas"
            },
            jueves: {
                required: "Por favor, ingresa las horas del jueves",
                min: "Las horas no pueden ser negativas"
            },
            viernes: {
                required: "Por favor, ingresa las horas del viernes",
                min: "Las horas no pueden ser negativas"
            }
        },  
    });
});
