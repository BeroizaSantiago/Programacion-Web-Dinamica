$(document).ready(function () {
    $("form").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2
            },
            apellido: {
                required: true,
                minlength: 2
            },
            edad: {
                required: true,
                number: true,
                min: 0
            },
            direccion: {
                required: true,
                minlength: 5
            },
            nivel_estudios: {
                required: true
            },
            sexo: {
                required: true
            }
            
        },
        messages: {
            nombre: {
                required: "Por favor, ingresa tu nombre",
                minlength: "El nombre debe tener al menos 2 caracteres"
            },
            apellido: {
                required: "Por favor, ingresa tu apellido",
                minlength: "El apellido debe tener al menos 2 caracteres"
            },
            edad: {
                required: "Por favor, ingresa tu edad",
                number: "Por favor, ingresa un número válido",
                min: "La edad no puede ser negativa"
            },
            direccion: {
                required: "Por favor, ingresa tu dirección",
                minlength: "La dirección debe tener al menos 5 caracteres"
            },
            nivel_estudios: {
                required: "Por favor, selecciona tu nivel de estudios"
            },
            sexo: {
                required: "Por favor, selecciona tu sexo"
            }
        },
    });
});
