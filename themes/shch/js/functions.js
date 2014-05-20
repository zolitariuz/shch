(function($){

	"use strict";

	$(function(){

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
		$('.empresa img').hover(
			function() {
				src = $(this).attr('src');
				var srcColor = src.replace('images/', 'images/color-' );
				//console.log(src);
				$(this).attr('src', srcColor);
			}, function() {
				$(this).attr('src', src);
			}
		);


	});

})(jQuery);
