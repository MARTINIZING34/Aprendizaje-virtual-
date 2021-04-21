jQuery(document).ready(listo); /*llamar a toda nuestra web*/
	
function listo()
{
	jQuery(".hamb").clik(function(e){
	e.preventDefault();/*Aparezca el ícono*/
		jQuery("header .container nav").toggleClass("open");
		jQuery(".hamb i").toggleClass("fa-times")
	});
	jQuery("header .container nav").clik(function){
		jQuery("header .container nav").removeClass("open");
		jQuery("hamb i").removeClass("fa-times");
		var dev=jQuery(this).attr("href");
		jQuery("html,body").animate({
			"scrolltop":jQuery(dev).offset().top - 76
		})
	}
}
 




