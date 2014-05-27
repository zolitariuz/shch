(function($){

	"use strict";

	$(function(){

		// Menú móvil
		mostrarMenu();
		toggleMenuMovil();

		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}

		//Contacto
		$('form.contacto').validate();
		procesaContacto();

		//Nuestras empresas - isotope
		var $container = $('#isotope');

		$container.isotope({
			itemSelector: '.columna',
			layoutMode: 'fitRows'
		});

		$('.divisiones li').on( 'click', function() {
			var filterValue = $(this).attr('data-filter');
			$container.isotope({ filter: filterValue });
			$('.divisiones li').removeClass('activo');
			$(this).addClass('activo');
		});

		//Nuestras empresas - link a empresa
		var empresa,
			divPosicion;

		$('#isotope a').on('click', function(){

			empresa = $(this).data('empresa');
			divPosicion = $('.'+empresa).offset().top,
			divPosicion = divPosicion - 100;

			$('html, body').animate({scrollTop: divPosicion}, 500);

		});

		//Nuestras empresas - color en hover
		var src;
		$('.empresa img.gris').mouseenter( function() {
			$(this).addClass('hide');
			$(this).parent().find('.color').removeClass('hide').addClass('show');
		});

		$('.empresa img.color').mouseleave( function() {
			$(this).addClass('hide');
			$(this).parent().find('.gris').removeClass('hide').addClass('show');
		});

		


	});

	function procesaContacto(){
		$('.contacto input[type="submit"]').on('click', function(e){
			var nombre = $('input[name="nombre"').val();
			var email = $('input[name="email"').val();
			var mensaje = $('textarea[name="mensaje"').text();

			e.preventDefault();
			$.ajax({
			  	type: 'POST',
			  	url: ajax_url,
			  	data: {
			  		nombre: nombre,
			  		email: email,
			  		mensaje: mensaje,
			  		action: "procesa_contacto"
			  	},
			  	success: function(data){
			  		var json = $.parseJSON(data);
			  		$('form').html('<p>Gracias por contactarnos '+json.nombre+', en breve nos pondremos en contacto contigo.</p>');
			  	}
			});
		});
	}

	function mostrarMenu() {
		$(window).resize(function(){
			if ($(window).width() > 750)
		   		$('.menu').attr('style', 'display: block');
		   	else
		   		$('.menu').attr('style', 'display: none');

		});
	}

	function toggleMenuMovil(){

		$('#btn-movil').on('click', function(e){
			e.preventDefault();
			if($('.menu').css('display')=='none'){
				$('.menu').slideDown('fast');
			} else {
				$('.menu').slideUp('fast');
			}
		});
	}

})(jQuery);


