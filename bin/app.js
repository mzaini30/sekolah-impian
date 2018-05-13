$('.sidenav').sidenav()
jika_elemen_nampak = function(){
	$('.medium h1, .medium p').each(function(){
		if($(this).is(':visible')){
			$(this).addClass('animated')
		}
	})
}
jika_elemen_nampak()
$(window).scroll(function(){
	jika_elemen_nampak()
})
list_animate = ['bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'headShake', 'swing', 'tada', 'wobble', 'jello', 'bounceIn', 'bounceInDown', 'bounceInLeft', 'bounceInRight', 'bounceInUp', 'fadeIn', 'fadeInDown', 'fadeInDownBig', 'fadeInLeft', 'fadeInLeftBig', 'fadeInRight', 'fadeInRightBig', 'fadeInUp', 'fadeInUpBig', 'flipInX', 'flipInY', 'lightSpeedIn', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight', 'hinge', 'jackInTheBox', 'rollIn', 'zoomIn', 'zoomInDown', 'zoomInLeft', 'zoomInRight', 'zoomInUp', 'slideInDown', 'slideInLeft', 'slideInRight', 'slideInUp']
$('.medium h1, .medium p').each(function(){
	$(this).addClass(list_animate[~~(Math.random() * list_animate.length)])
})