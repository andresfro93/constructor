$(document).ready(function() {

	/*aparicion formulario*/

   $('.Footer-contact, .nav-contacto').click(function(event) {
   		/*aparicion de info*/
   		$('.Footer-list').slideToggle(500);
         $('html,body').stop(true,true).animate({
            scrollTop:$('.Footer-list').offset().top
         },1000);
   });

      /*cambio boton contacto*/

   $('.Footer-contact').mouseenter(function(event){
		$(this).css({color:'white',background:'#292929'});		
	});
   $('.Footer-contact').mouseout(function(event){
		$(this).css({color:'#292929',background:'#ffbf00'});
	});

	/*aparicion info*/

   $('.block1-boton').click(function(event) {
   		/*aparicion de info*/
   		$('.block2').slideToggle(500);
         $('html,body').stop(true,true).animate({
            scrollTop:$('.block2').offset().top
         },1000);
   });

   /*cambio linea logo*/

   $('.logo').mouseenter(function(event){
		$('.amarillo').slideUp(200);
	});
   $('.logo').mouseout(function(event){
		$('.amarillo').slideDown(200);
	});

   /*cambio boton ver mas*/

   $('.block1-boton').mouseenter(function(event){
		$(this).css({color:'white',background:'#292929'});		
	});
   $('.block1-boton').mouseout(function(event){
		$(this).css({color:'black',background:'#ffbf00'});
	});

   /*galería*/

   $('.Lightbox-bottom').click(function(event) {
      $('.Lightbox').fadeIn(1000);
      $('body').css({
         overflow: 'hidden'
      });
   });

   /*cerrar galeria*/

   $('.cerrar-boton').click(function(event) {
      $('.Lightbox').fadeOut(1000);
   });

   /*cambio boton volver*/

   $('.cerrar-boton').mouseenter(function(event){
      $(this).css({color:'white',background:'#292929'});    
   });
   $('.cerrar-boton').mouseout(function(event){
      $(this).css({color:'black',background:'#ffbf00'});
   });


});

