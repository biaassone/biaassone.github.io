$(document).ready(function() {
	// Verifica o tamanho da tela para tablet e mobile
	if ($(document.body).width() <= 992) {
		// ativa o menu
		$('.header-menu-toggle').click(function() {
			$(document.body).toggleClass('menu-active');
		});

		// fecha o menu
		$('.header-menu-mobile-close, .components-overlay').click(function() {
			$(document.body).removeClass('menu-active');
		});

		// Ativar sub menu
		$('.header-menu > li > ul').parent().addClass('sub').find('> a').click(function() {
			$(this).toggleClass('active').find('+ ul').slideToggle('400');
		});
	}

	// carousel
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
});
