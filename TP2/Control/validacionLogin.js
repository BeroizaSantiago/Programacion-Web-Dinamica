$(document).ready(function() {
    $('#formLogin').validate({
        rules: {
            usuario: {
                required: true,
            },
            clave: {
                required: true,
                minlength: 8,
                noIgualUser: true,
                debeContener: true
            }
        },
        messages: {
            usuario: {
                required: "Ingrese su usuario.",
            
            },
            clave: {
                required: "Por favor, ingrese su contraseña.",
                minlength: "La contraseña debe tener al menos 8 caracteres.",
                noIgualUser: "La contraseña no puede ser igual al nombre de usuario.",
                debeContener: "La contraseña debe contener letras y números."
            }
        }
    });

    // Validación personalizada: la contraseña no debe ser igual al nombre de usuario
    $.validator.addMethod("noIgualUser", function(value, element) {
        return value !== $("#usuario").val();
    }, "La contraseña no puede ser igual al nombre de usuario.");

    // Validación personalizada: la contraseña debe contener letras y números
    $.validator.addMethod("debeContener", function(value, element) {
        return /[a-zA-Z]/.test(value) && /\d/.test(value);
    }, "La contraseña debe contener letras y números.");
});
