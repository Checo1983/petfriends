
/***********************************************************/
/*              Hoja de funciones Ajax.js                  */
/*    Contiene el codigo javascript de todas las secciones */                         
/*              del sitio web PetsFriends                  */
/*                                                         */
/***********************************************************/

 /*******************************************/
/* Funcion para cargar entradas modo AJAX   */

$(document).ready(function(){
    $("#section").on("click",".pagination span a", function(){
        $("#section").html("<div class='loading'></div>");
        $.post($(this).attr("href"), function(data) {
            $('#section').html(data);
        });
        return false;
    });
});

/*********************************************/
/* Funcion para cargar comentarios modo AJAX */

$(document).ready(function() {
    $("#comments").on("click",".pagination span a", function(){
        $(".previous-comments").html("<div class='loading'></div>");
            $.get($(this).attr("href"), function(data) {
                $('.previous-comments').html(data);
            });
        return false;
    });
});

/**********************************************/
/* Funcion para abrir / cerrar menu de login */

$(document).ready(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});

/***********************************************/
/* Funciones para cargar JQuery UI Ventana Modal */

$(document).ready(function(){
    
    // Damos formato a la Ventana de Diálogo    
    $('#dialogoPerfilError').dialog({
        // Indica si la ventana se abre de forma automática
        autoOpen: true,
        // Indica si la ventana es modal
        modal: true,
        // Largo
        width: 350,
        closeOnEscape: false,
        // Alto
        height: 'auto',
        position: {my: "center", at: "center", of: window},
        resizable: false,
        draggable: false,
        show: { effect: "puff", duration: 800 },
        hide: { effect: "puff", duration: 1000 },
        open: function(event, ui) { $(".ui-dialog-titlebar-close", ui.dialog).hide(); }
    });
    
    $('#dialogoPerfil').dialog({
        // Indica si la ventana se abre de forma automática
        autoOpen: false,
        // Indica si la ventana es modal
        modal: true,
        // Largo
        width: 350,
        // Alto
        height: 'auto',
        position: {my: "center", at: "center", of: window},
        resizable: false,
        draggable: false,
        show: { effect: "puff", duration: 800 },
        hide: { effect: "puff", duration: 1000 },
    });

    // Mostrar Diálogo Sencillo
    $('.img_edit').click(function(){
        $('#dialogoPerfil').dialog('open');
    });

});


$(document).ready(function(){
	
	// Damos formato a la Ventana de Diálogo	
	$('#dialogoFormulario').dialog({
		// Indica si la ventana se abre de forma automática
		autoOpen: false,
		// Indica si la ventana es modal
		modal: true,
		// Largo
		width: 350,
		// Alto
		height: 'auto',
        position: {my: "center", at: "center", of: window},
        resizable: false,
        draggable: false,
        show: { effect: "puff", duration: 800 },
        hide: { effect: "puff", duration: 1000 },
	});
	
	// Mostrar Diálogo Sencillo
	$('.register_button').click(function(){
		$('#dialogoFormulario').dialog('open');
	});
});


/**********************************************/
/* Funcion para cargar Ciudades segun el Pais */

$(document).ready(function(){
    var $pais = $('.country');

    $pais.change(function() {

        var $form = $(this).closest('form');

        var data = {};
        data[$pais.attr('name')] = $pais.val();

        $.ajax({
            url : $form.attr('action'),
            type: $form.attr('method'),
            data : data,
            dataType: 'json',
            success: function(data) {
                $('.city')
                .empty()
                .append('<option value="">Selecciona ciudad...</option>')
                .find('option:first')
                .attr("selected","selected");
                    $.each(data.ciudades, function(i, value) {
                        $('.city').append('<option value='+value.id+'>'+value.ciudad+'</option>');
                    });
            }
        });
    });
});


/********************************************/
/* Funcion para cargar JQuery UI Datepicker */

$(document).ready(function(){
    $('.form_animal_date').datepicker({
        dateFormat: 'dd-MM-yy'
    });
});


/*****************************************/
/* Funcion para cargar JQuery Minicolors */

$(document).ready(function() {
    $('.form_color').minicolors({
        defaultValue: '#000000',
        theme: 'bootstrap',
        position: 'bottom right'
    });
});



/***********************************/
/* Funcion para cargar Google Maps */

function initialize(address) {
      var geoCoder = new google.maps.Geocoder(address);
      var request = {address:address};
      var icon = {
        url: 'http://maps.google.com/mapfiles/kml/pal3/icon48.png'
      }
      //var img = new google.maps.MarkerImage("http://google-maps-icons.googlecode.com/files/factory.png");
      geoCoder.geocode(request, function(result, status){
              var latlng = new google.maps.LatLng(result[0].geometry.location.lat(), result[0].geometry.location.lng());
              var myOptions = {
                zoom: 15,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
              };
              var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
              var marker = new google.maps.Marker({position:latlng,map:map,title:address,
                animation:google.maps.Animation.BOUNCE, icon:icon});
      });
};


/********************************************/
/* Funcion para cambiar pestañas del perfil */

$(document).ready(function() {
    $('#profiletabs ul li a').on('click', function(e) {
      e.preventDefault();
      var newcontent = $(this).attr('href');

      $('#profiletabs ul li a').removeClass('sel');
      $(this).addClass('sel');

      $('#content section').each(function() {
        if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
      });

      $(newcontent).removeClass('hidden');
    });
});

/*****************************************************/
/* Funcion AJAX para actualizar las fotos del perfil */

$(document).ready(function() {
    $('.form_photo_profile').submit(function(e) {
        e.preventDefault();
        var $url = $('.form_photo_profile').attr('action');
        var $data = new FormData(this);
        $.ajax({
            url: $url,
            data: $data,
            method: "POST",
            processData: false,
            contentType: false,
            success: function(data) {
                $imagen = "/proyecto/img/"+data;
                $('.img_profile').attr('src', $imagen);
                $('.form_photo_profile').each (function(){
                    this.reset();
                });
            }   
        });
    });
});

$(document).ready(function() {
    $('.form_photo_profile_pet').submit(function(e) {
        e.preventDefault();
        var $url = $('.form_photo_profile_pet').attr('action');
        var $data = new FormData(this);
        $.ajax({
            url: $url,
            data: $data,
            method: "POST",
            processData: false,
            contentType: false,
            success: function(data) {
                $imagen = "/proyecto/img/"+data;
                $('.img_pet').attr('src', $imagen);
                $('.form_photo_profile_pet').each (function(){
                    this.reset();
                });
            }   
        });
    });
});

/**********************************/
/* Carga el elemento JQuery toTop */

$(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
}); 

/******************************************/
/* Carga el carrusel de imagenes inferior */ 

$(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
        visible : {min: 3,
        max: 3},
        height: 'auto',
        width: 300
    }, responsive: true, 
    scroll: 1, 
    mousewheel: false,
    swipe: {onMouse: true, onTouch: true}});

    //Oculta los mensajes flash de confirmacion
    $(".flash-notice").fadeOut(8000);
}); 


/************************************************/
/* Carga una preview de una imagen seleccionada */
/* en input file                                */

$(window).load(function() {
    
   $(function() {
        $("input[type='file']").change(function(e) {
            addImage(e); 
           });

        function addImage(e) {
            var file = e.target.files[0],
            imageType = /image.*/;
      
            if (!file.type.match(imageType))
                return;
    
        var reader = new FileReader();
        reader.onload = fileOnload;
        reader.readAsDataURL(file);
        }
    
        function fileOnload(e) {
            var result=e.target.result;
            $('#img_preview').attr("src",result);
            
            $('#preview_img').dialog({
            // Indica si la ventana se abre de forma automática
            autoOpen: true,
            // Indica si la ventana es modal
            modal: true,
            // Largo
            width: 300,
            // Alto
            height: 'auto',
                position: {my: "center", at: "center", of: window},
                resizable: false,
                draggable: false,
                show: { effect: "puff", duration: 800 },
                hide: { effect: "puff", duration: 1000 },
            });
                
        }
    });
});

/***************************************************/
/* Funcion AJAX que controla que no haya registros */
/* de usuario con el mismo user y email            */

$(document).ready(function() {
    var $img_valid = "<div class='img_valid' title='Nombre o mail valido'></div>";
    var $img_invalid = "<div class='img_invalid' title='Este nombre o mail ya existe'></div>";
    var $loading =  "<div class='loading_mini' title='Buscando...'></div>";
    var $username = $("#fos_user_registration_form_username");
    var $email = $("#fos_user_registration_form_email");
    
    var data = {};
    
    $username.keyup(function() {               
        if ($username.val().length>=4) {
            var $url = $("#route_val_user").val();
            data[$username.attr('name')] = $username.val();
            $.ajax({
                url: $url,
                data: data,
                type: "POST",
                beforeSend: function (){
                                $(".check_user").html($loading);
                            },
                success: muestraMsg,
                cache: false
            });//ajax   
        }
        else {
            $username.html("");
        }
    });

    $email.change(function() {
        var $url = $("#route_val_email").val();
        data[$email.attr('name')] = $email.val();               
        $.ajax({
            url: $url,
            data: data,
            type: "POST",
            beforeSend: function (){
                                $(".check_email").html($loading);
                            },
            success: muestraMsgEmail,
            cache: false
        });//ajax   
    });
    
    function muestraMsg(data) {
        if (data==="0") {            
            $(".check_user").html($img_valid);
            $(".boton").removeAttr("disabled");
        }
        else {
            $(".boton").attr("disabled", "disabled");           
            $(".check_user").html($img_invalid);
        }
    }
        
    function muestraMsgEmail(data){
        if (data==="0") {            
            $(".check_email").html($img_valid);
            $(".boton").removeAttr("disabled");
        }
        else {
            $(".boton").attr("disabled", "disabled");           
            $(".check_email").html($img_invalid);
        }
    }
});

/****************************************************/
/* Funcion JQuery Validate que valida los campos de */
/* registro de usuario                              */

$(document).ready(function(e) {
    $(".fos_user_registration_register").validate();
    $("#fos_user_registration_form_email").rules("add", {
        required: true,
        email: true, messages: {
        required: "Campo obligatorio",
        email: "Campo con formato e-mail"
    }});
    $("#fos_user_registration_form_username").rules("add", {
        required: true,
        rangelength: [6,10], messages: {
        required: "Campo obligatorio",
        rangelength: "Entre 6 y 10 caracteres"
    }});
     $("#fos_user_registration_form_plainPassword_first").rules("add", {
        required: true,
        rangelength: [6,15], messages: {
        required: "Campo obligatorio",
        rangelength: "Entre 6 y 15 caracteres"
    }});
    $("#fos_user_registration_form_plainPassword_second").rules("add", {
        required: true,
        equalTo: "#fos_user_registration_form_plainPassword_first", messages: {
        required: "Campo obligatorio",
        equalTo: "Contraseña no coincide"
    }});
    $("#fos_user_registration_form_nombre").rules("add", {
        required: true,
        rangelength: [10,25], messages: {
        required: "Campo obligatorio",
        rangelength: "Entre 10 y 25 caracteres"
    }});
    $("#fos_user_registration_form_nombre_pais").rules("add", {
        required: true, messages: {
        required: "Campo obligatorio"
    }});
    $("#fos_user_registration_form_nombre_ciudad").rules("add", {
        required: true, messages: {
        required: "Campo obligatorio"
    }});
    $("#fos_user_registration_form_nombre_mascota").rules("add", {
        required: true, 
        rangelength: [4,20], messages: {
        required: "Campo obligatorio",
        rangelength: "Entre 4 y 20 caracteres"
    }});
    $("#fos_user_registration_form_sobre_vosotros").rules("add", {
        required: true,
        minlength: 25, messages: {
        required: "Campo obligatorio",
        minlength: "Escribe algo más, por favor"
    }});
});