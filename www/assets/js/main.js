$(document).ready(function(){

$('.listings ul li').click(function(){

/* Afficher les informations supplémentaires */

	var text = $(this).children('.hidden');

	if (text.is(':hidden')){
		text.slideDown('500');
		$(this).children('span').html('Moins de détails');
	}
	else{
		text.slideUp('300');
		$(this).children('span').html('Plus de détails');
	}

});
	/* Test fonction */

$('#paragraphe li').click(function(){

	var text = $(this).children('');

	if (text.is(':hidden')){
		text.slideDown('500');
		$(this).children('span').html('-');
	}
	else{
		text.slideUp('300');
		$(this).children('span').html('Plus de détails');
	}

});

/*  Hamburger Menu & Icon  - Responsive Design */
	$('.hamburger').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('opned');
		$('header nav').toggleClass('active');	
	});

/* Formulaire d'inscription et de connexion - Mouvement des labels de bas en haut, ligne 772 */
	$('.form').find('input, textarea').on('keyup blur focus', function (e) {
	  var $this = $(this),
	      label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
	          label.removeClass('active highlight');
	        } else {
	          label.addClass('active highlight');
	        }
	    } else if (e.type === 'blur') {
	    	if( $this.val() === '' ) {
	    		label.removeClass('active highlight'); 
				} else {
			    label.removeClass('highlight');   
				}   
	    } else if (e.type === 'focus') {
	      
	      if( $this.val() === '' ) {
	    		label.removeClass('highlight'); 
				} 
	      else if( $this.val() !== '' ) {
			    label.addClass('highlight');
				}
	    }
	});

/* Formulaire pour afficher soit l'un ou l'autre */
	$('.tab a').on('click', function (e) {
		  e.preventDefault();
		  
		  $(this).parent().addClass('active');
		  $(this).parent().siblings().removeClass('active');
		  
		  target = $(this).attr('href');

		  $('.tab-content > div').not(target).hide();
		  
		  $(target).fadeIn(600);
		  
		});


/* Input file */
// ajout de la classe JS à HTML
document.querySelector("html").classList.add('js');
 
// initialisation des variables
var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
 
// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});
 
// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});
 
// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});


});
