// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='adminprofileform']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        name: "required",
        lastname: "required",
        address: "required",
        dni:{
          required: true, 
          number: true, 
          minlength: 8
        } ,
        email: "required",
        phone: {
          required: true, 
          number: true
        }, 

        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        password: {
          required: true,
          minlength: 8, 
        }, 
        password_confirmation: {
          equalTo: "#password"
      }

      },
      // Specify validation error messages
      messages: {
        name: "* Ingrese sus Nombres",
        lastname:  "* Ingrese sus Apellidos",
        dni:  "* DNI no válido, revisa tus datos de dni",
        password: {
          required: "* Ingrese un password adecuado",
          minlength: "Tu contraseña debe ser de 8 caracteres mínimo."
        },
        phone:  "* Ingresa un telefono válido.", 
        address:  "* Ingresa una Direccion válida.", 
        email:  "* Ingresa una direccion de correo electronico válido.", 
        password_confirmation:"* Debes ingresar la misma contraseña anterior.", 
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });