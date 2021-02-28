

$(document).ready(function(){
	
	
	$('.accounts--top .carousel').slick({
		infinite: false,
		lazyLoad: 'ondemand',
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows:true,
		autoplay:false,	
		dots:false,
		prevArrow:`<button class='slick-prev'><svg xmlns="http://www.w3.org/2000/svg" width="6.707" height="10.138" viewBox="0 0 6.707 10.138">
		<defs>
		
		</defs>
		<path id="Path_75" data-name="Path 75" d="M-6066.839-6256.145l-6.707-5.147,6.707-4.991Z" transform="translate(6073.546 6266.283)" fill="#d8d9db"/>
		</svg></button>`,
		nextArrow:`<button class='slick-next active'><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6.707" height="10.138" viewBox="0 0 6.707 10.138">
		<defs>
		<linearGradient id="linear-gradient" x1="0.564" y1="0.796" x2="-0.32" y2="0.212" gradientUnits="objectBoundingBox">
		<stop offset="0" stop-color="#d70153"/>
		<stop offset="1" stop-color="#fe4545"/>
		</linearGradient>
		</defs>
		<path id="Path_74" data-name="Path 74" d="M-6052.295-6266.283l6.707,5.147-6.707,4.991Z" transform="translate(6052.295 6266.283)" fill="#d8d9db"/>
		</svg>
		</button>`,
		responsive: [
		{
			breakpoint: 836,
			settings: {
				slidesToShow: 1.3,
			}
		},
		{
			breakpoint: 601,
			settings: {
				slidesToShow: 1.65,
				arrows:false,
			}
		},

		]
	});


	$('.accounts--top .carousel').on('afterChange', function (event, slick, currentSlide) {
		if(currentSlide > 0) {
			// $(this).find('.slick-next').removeClass('active');
			$(this).find('.slick-prev').addClass('active');	
		} else{
			$(this).find('.slick-prev').removeClass('active');

		}
		
	});

	
	

	$('#post__card__link__input').change(function(e){
		$('#post--modal').modal('show');
		readURL(this);
	})

	$('.post--modal__trigger').click(function(e){
		
	})


	// update image change
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#ppImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]); 
    			// convert to base64 string
    		}
    	}

    });











