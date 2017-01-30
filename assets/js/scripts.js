
jQuery(document).ready(function() {
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.registration-form fieldset:first-child').fadeIn('slow');
    
    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // next step
    $('.registration-form .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
        var formulario;
    	
    	parent_fieldset.find('input[type="text"], input[type="hidden"]').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
                        if($(this).contents().context.name == "formulario")
                        {
                            formulario = $(this).contents().context.value;
                        }
    			$(this).removeClass('input-error');
    		}
    	});    
        validar(formulario);
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
	    		$(this).next().fadeIn();
	    	});
    	}
    	
    });
    
    // previous step
    $('.registration-form .btn-previous').on('click', function() {
    	$(this).parents('fieldset').fadeOut(400, function() {
    		$(this).prev().fadeIn();
    	});
    });
    
    // submit
    $('.registration-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
   
   function validar(objeto)
   {
       if(objeto == 1)
       {
           var rif = $('#registrarse-rif').val();
           var razonSocial = $('#registrarse-razon-social').val();
           var correo = $('#form-correo').val();
           console.log(rif);
           console.log(razonSocial);
           console.log(correo);
           postFormulario1(rif,razonSocial,correo);
       }
       
   }
   
   function postFormulario1(formulario,rif,razonSocial,correo)
   {
       $.ajax({
    // la URL para la petición
            url : 'registrarse.php',
            data : { action:"formulario1",rif : rif,razonSocial: razonSocial,correo : correo },
            type : 'GET',
            dataType : 'text',
            success : function(json) {
              console.log(json);
            },
            error : function(xhr, status) {
              console.log('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
              console.log('Petición realizada');
            }
        });
   }
    
});
