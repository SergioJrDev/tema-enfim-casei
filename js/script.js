$(document).ready(function(){
	document.cookie = "screenwidth="+window.innerWidth;
	$('.hamburger').click(function() {
		if(!$(this).hasClass('demo')) {
			$(this).toggleClass('is-active');
			if($(".nav-content").hasClass('showMenu')) {
				$(".nav-content").removeClass('showMenu').slideUp('slow');
			} else {
				$(".nav-content").addClass('showMenu').slideDown('slow');	 
			}  
		}
	});
	
	$(document).on('submit', "form", function(e) {
		$(this).find('.submit').prop('disabled', true).addClass('disabled');
		$('.lds-css').addClass('display-block');
	});
	

	$('.btn-acount').click(function() {
		$('.modal').addClass('active');
	});

	$('.btn-close').click(function() {
		$('.modal').removeClass('active');
	});

	$('#create-login').validate({
	  rules: {
	    user_name: {
	    	required: true
		},
	    user_email: {
	      required: true,
	      email: true
	    },
		user_pass: {
			required: true,
			minlength: 6
		},
		user_repass: {
			required: true,
			minlength: 6,
			equalTo: "#user_pass"
		},
	  },
	  messages: {
	    user_name: "Digite seu nome.",
	    user_email: {
	      required: "Digite seu e-mail.",
	      email: "Digite um e-mail válido."
	    },
	    user_pass: {
			required: 'Digite sua senha',
			minlength: 'Digite uma senha com no mínimo 6 caracteres.'
	    },
	    user_repass: {
	    	required: 'Digite sua senha',
	    	minlength: 'Digite uma senha com no mínimo 6 caracteres.',
			equalTo: 'Por favor, confirma sua senha.'
	    }
	  }
	});




	$('#create_model').validate({
	  rules: {
	    noiva: {
	    	required: true
		},
		noivo: {
			required: true
		}
	  },
	  messages: {
	    noiva: "Digite o nome da noiva.",
	    noivo: {
			required: 'Digite o nome do noivo'
	    }
	  }
	});

// Set the date we're counting down to
var countDownDate = new Date("Jan 6, 2018 20:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
  

	$('.number-days').text(days);
	$('.number-hours').text(hours);
	$('.number-minutes').text(minutes);
	$('.number-seconds').text(seconds);

    // // If the count down is over, write some text 
    // if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("demo").innerHTML = "EXPIRED";
    // }
}, 1000);

 	function setRadio() {
 		setTimeout(function() {
 			$('.actived').find($('input:radio')).prop('checked', true);
 		}, 100);
 	}

 	setRadio();

	 $('.color').click(function(e){
		var color = $(this).data().color;
		document.documentElement.style.setProperty('--color_demo_theme', color);  
		document.getElementById('color').value = color;
		e.preventDefault();
	 });  

	$('.question-title').click(function(e) {
		const next = $(this).next();
		if(next.hasClass('active')) {
			next.slideUp().removeClass('active');
			$(this).removeClass('changeIcon');
		} else {
			$('.question-p').slideUp().removeClass('active');
			$(this).addClass('changeIcon');
			next.addClass('active').slideDown();
		}
		e.preventDefault();
	});

	$('.a-next').click(function(e) {
		const group = this.dataset.group
		const length = document.querySelectorAll('.'+group+'_item').length;
		const actived = document.querySelector('.'+group+'_item.actived');
		if(parseInt(actived.dataset.order) === length - 1) {
			$(this).addClass('disabled');
		}
		$('.'+group+'_a.a-prev').removeClass('disabled');
		actived.classList.remove('actived')
		actived.classList.add('pos-left');
		actived.classList.add('absolute');
		actived.nextElementSibling.classList.add('actived')
		actived.nextElementSibling.classList.remove('absolute')
		setRadio();
		e.preventDefault(); 
	});

	$('.a-prev').click(function(e) {
		const group = this.dataset.group
		const length = document.querySelectorAll('.'+group+'_item').length;
		const actived = document.querySelector('.'+group+'_item.actived');
		if(parseInt(actived.dataset.order) === 1 + 1) {
			$(this).addClass('disabled');
		}
		$('.'+group+'_a.a-next').removeClass('disabled');
		actived.classList.remove('actived')
		actived.classList.remove('pos-left');
		actived.classList.add('absolute');
		actived.previousElementSibling.classList.add('actived')
		actived.previousElementSibling.classList.remove('absolute')
		setRadio();
		e.preventDefault(); 
	});
});

$(window).on('load', function() {
 	// $(".slidersingle").owlCarousel({
	//     autoHeight: true,
	//     items:1,
	//     nav: true,
	//     navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	// });

 	$(".slidertestimonial").owlCarousel({
	    autoHeight: true,
		responsive : {
		    0 : {
		        items:1,
		    },
		    768 : {
		       items:2, 
		    }
		},
	    loop:true,
	    nav: false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false, 
	    // nav: true,
	    // navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	});

 	$("#sliderhome").owlCarousel({
	    items:1,
	    loop:true,
	    nav: false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false, 
 	});
});