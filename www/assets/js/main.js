$(document).ready(function(){

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



});