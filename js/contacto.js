$(function(){

  $( "#form_contacto" ).submit(function( event ) {

      event.preventDefault();

      //var formulario = [];
      //var formulario = new Object;
      var formulario = {};


      formulario.nombre = $("input#nombre").val();
      formulario.apellido = $("input#apellido").val();
      formulario.email = $("input#email").val();
      formulario.telefono = $("input#telefono").val();
      formulario.pais = $("input#pais").val();
      formulario.empresa = $("input#empresa").val();
      formulario.comentario = $("textarea#comentario").val(); 

      /*
      var json_datos = JSON.stringify(formulario);

      var person = {
            name: $("input#nombre").val(),
            apellido:$("#apellido").val() 
        }

      console.log(json_datos);*/
     
      $.ajax({
                url: "./php/contacto.php",
                data: { variable: JSON.stringify(formulario) },
                async: true,
                type: 'POST',
                dataType: 'JSON',
                success: function(data)
                {
                  alert("aaaa");
                  console.log(data);
                },
                error: function(x, status, error){
                  console.log("error: "+error );
                } 

 
            });
  });   

});


     /*
    $this = $("#sendMessageButton");
    $this.prop("disabled", true);
    */


    /*
    $.ajax({
              url: "././mail/contact_me.php",
              data: {   name: name,
                        email: email,
                        subject: subject,
                        message: message },
              async: true,
              type: 'POST',
              dataType: 'JSON',
              success: function(data)
             {
                if(data.error == false)
                {
                  //alert("Bien");
                  $('#success').html("<div class='alert alert-success'>");
                  $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                  $('#success > .alert-success')
                    .append("<strong>Tu mensaje ha sido enviado exitosamente y será respondido a la brevedad. </strong>");
                  $('#success > .alert-success')
                    .append('</div>');
                  //clear all fields
                  $('#contactForm').trigger("reset");
                }
                else
                {
                  //alert("Mal");
                  $('#success').html("<div class='alert alert-danger'>");
                  $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                  $('#success > .alert-danger').append($("<strong>").text("Ha ocurrido un error, por favor, intente mas tarde o escribinos a nuestro email: nyndecoratuvida@gmail.com."));
                  $('#success > .alert-danger').append('</div>');
                  //clear all fields
                  $('#contactForm').trigger("reset");
                }
              },
              error: function(x, status, error){
                  //alert("Error.");
                  $('#success').html("<div class='alert alert-danger'>");
                  $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                  $('#success > .alert-danger').append($("<strong>").text("Ha ocurrido un error, por favor intente más tarde o escribinos a nuestro email: nyndecoratuvida@gmail.com."));
                  $('#success > .alert-danger').append('</div>');
                  //clear all fields
                  $('#contactForm').trigger("reset");
              },
              complete: function() {
                setTimeout(function() {
                  $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                }, 1000);
              } 
    });*/

     /*
    
    //
   

    
     // Disable submit button until AJAX call is complete to prevent duplicate messages

    $.ajax({
              url: "././mail/contact_me.php",
              data: {   name: name,
                        email: email,
                        subject: subject,
                        message: message },
              async: true,
              type: 'POST',
              dataType: 'JSON',
              success: function(data)
             {
                if(data.error == false)
                {
                  //alert("Bien");
                  $('#success').html("<div class='alert alert-success'>");
                  $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                  $('#success > .alert-success')
                    .append("<strong>Tu mensaje ha sido enviado exitosamente y será respondido a la brevedad. </strong>");
                  $('#success > .alert-success')
                    .append('</div>');
                  //clear all fields
                  $('#contactForm').trigger("reset");
                }
                else
                {
                  //alert("Mal");
                  $('#success').html("<div class='alert alert-danger'>");
                  $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                  $('#success > .alert-danger').append($("<strong>").text("Ha ocurrido un error, por favor, intente mas tarde o escribinos a nuestro email: nyndecoratuvida@gmail.com."));
                  $('#success > .alert-danger').append('</div>');
                  //clear all fields
                  $('#contactForm').trigger("reset");
                }
              },
              error: function(x, status, error){
                  //alert("Error.");
                  $('#success').html("<div class='alert alert-danger'>");
                  $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                  $('#success > .alert-danger').append($("<strong>").text("Ha ocurrido un error, por favor intente más tarde o escribinos a nuestro email: nyndecoratuvida@gmail.com."));
                  $('#success > .alert-danger').append('</div>');
                  //clear all fields
                  $('#contactForm').trigger("reset");
              },
              complete: function() {
                setTimeout(function() {
                  $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                }, 1000);
              } 
    });
   
  */
 

