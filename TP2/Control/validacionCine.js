$(document).ready(function () {
    $('form').validate({
        rules: {
            titulo: {
                required: true
            },
            director: {
                required: true
            },
            produccion: {
                required: true
            },
            nacionalidad: {
                required: true
            },
            duracion: {
                required: true,
                digits: true,
                maxlength: 3
            },
            actores: {
                required: true
            },
            guion: {
                required: true
            },
            anio: {
                required: true,
                digits: true,
                maxlength: 4
            },
            genero: {
                required: true
            },
            restricciones: {
                required: true
            },
            sinopsis: {
                required: true
            }
        },
        messages: {
            titulo: "Por favor, ingrese el título de la película.",
            director: "Por favor, ingrese el director de la película.",
            produccion: "Por favor, ingrese la producción de la película.",
            nacionalidad: "Por favor, ingrese la nacionalidad de la película.",
            duracion: {
                required: "Por favor, ingrese la duración de la película.",
                digits: "Solo se permiten números en la duración.",
                maxlength: "La duración no puede exceder los 3 caracteres."
            },
            actores: "Por favor, ingrese los actores de la película.",
            guion: "Por favor, ingrese el guión de la película.",
            anio: {
                required: "Por favor, ingrese el año de la película.",
                digits: "Solo se permiten números en el año.",
                maxlength: "El año no puede exceder los 4 caracteres."
            },
            genero: "Por favor, seleccione un género.",
            restricciones: "Por favor, seleccione una restricción de edad.",
            sinopsis: "Por favor, ingrese la sinopsis de la película."
        },
        submitHandler: function (form) {
            alert("Formulario enviado correctamente.");
            form.submit();
        }
    }); 
    
    // Botón de borrar
    $('#borrar').click(function() {
        $('form')[0].reset();
    });

});


 