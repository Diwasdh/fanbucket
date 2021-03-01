$(document).ready(function(){

	$('header .dropdown').hover(function(){
		$(this).find('.dropdown-menu').addClass('show');
	},
	function(){
		$(this).find('.dropdown-menu').removeClass('show');
	});

	
	const currentLocation = location.href;
	const menuItem = $('header .navbar .nav__item');
	
	if(currentLocation === 'http://localhost/fanbucket/' || currentLocation === 'http://sunbi.live/projects/ap/fanbucket/' ){
		menuItem[0].children[0].classList.add('active')
	}
	const menuLength = menuItem.length;

	for (let i = 0; i < menuLength; i++) {
		if (menuItem[i].children[0].href === currentLocation) {
			menuItem[i].children[0].classList.add('active');
		}
	}

	$('.love').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
	});

	$('.bookmark').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			//do this 
		}
		else{
			// do this one
		}
	});

	// 

	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight , navbar;
	if($( window ).width()> 601){
		navbar = $('.post');
	}else {
		navbar = $('.mob--header');
		$('input:not([type="checkbox"]):not([type="radio"])').focusin(  
			function(){  
				$('.header--primary').addClass('relative');  
			}).focusout(  
			function(){  
				$('.header--primary').removeClass('relative');  
			});
		}
		navbarHeight = navbar.outerHeight() + 50;

		$(window).scroll(function(event){
			didScroll = true;
		});

		setInterval(function() {
			if (didScroll) {
				hasScrolled();
				didScroll = false;
			}
		}, 250);

		function hasScrolled() {
			var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
    	return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.

    if ( (st > lastScrollTop && st > navbarHeight) || st < navbarHeight ){
        // Scroll Down
        navbar.removeClass('active');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
        	navbar.addClass('active');
        }
    }

    
    lastScrollTop = st;
}


$("a.comments").click(function(e){
	$(this).parents('.card').find('.card__comments').slideDown(300);
	$(this).parents('.card').find('.card__comments input.comment__text').focus();
	// $(this).parents('.card').find('.card__comments').show()
})

$('.moment .carousel').slick({
	infinite: false,
	lazyLoad: 'ondemand',
	slidesToShow: 2.7,
	slidesToScroll: 1,
	arrows:true,
	autoplay:false,	
	dots:false,
	prevArrow:`<button class='slick-prev'><svg xmlns="http://www.w3.org/2000/svg" width="6.707" height="10.138" viewBox="0 0 6.707 10.138">
	<path id="Path_75" data-name="Path 75" d="M-6066.839-6256.145l-6.707-5.147,6.707-4.991Z" transform="translate(6073.546 6266.283)" fill="#d8d9db"/>
	</svg></button>`,
	nextArrow:`<button class='slick-next active'><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6.707" height="10.138" viewBox="0 0 6.707 10.138">
	<defs>
	<linearGradient id="linear-gradient" x1="0.564" y1="0.796" x2="-0.32" y2="0.212" gradientUnits="objectBoundingBox">
	<stop offset="0" stop-color="#d70153"/>
	<stop offset="1" stop-color="#fe4545"/>
	</linearGradient>
	</defs>
	<path id="Path_74" data-name="Path 74" d="M-6052.295-6266.283l6.707,5.147-6.707,4.991Z" transform="translate(6052.295 6266.283)"  fill="#d8d9db"/>
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
			slidesToShow: 1.3,
			arrows:false,
		}
	},

	]
});


// search
$('.form input[type=search]').keyup( function(e) {
	if($(this).val()){
		$(this).next().addClass('active');
		$(this).next().next().addClass('active');
		$(this).parents('form').find('.searchList').show(300)
	}
	else{
		$(this).next().removeClass('active');
		$(this).next().next().removeClass('active');
		$(this).parents('form').find('.searchList').hide(300)

	}

});

$('form .cross').click(function(e){
	let parent = $(this).parent().find('input[type="search"]');
	$(this).removeClass('active');
	$(this).prev().removeClass('active');
	$(this).parents('form').find('.searchList').hide(300)
	
	parent.val(null);
	parent.focus();

});

$('form .searchList .copy--text').click(function(e){
	e.preventDefault();
	let elemVal = $(this).text();
	$(this).parents('form').find('input[type="search"]').val(elemVal);
	$(this).parents('.searchList').hide('300')

})

// $('.form input[type=search]').blur( function() {
// 	$(this).next().removeClass('active');
// 	$(this).next().next().removeClass('active');
// });

$('.post input').focus(function(){
	$(this).parents('.profile--card').addClass('active')
})

$('.post input').blur( function() {
	$(this).parents('.profile--card').removeClass('active')
});



// logout modal
$('#modal--logout').on('shown.bs.modal', function () {
	$(this).find('button:last-child').trigger('focus');
})


// post modal 
// modal post things



$('.modal--post').on('shown.bs.modal', function () {
	$(this).find('form textarea').trigger('focus');
})

$('.modal--post form').submit(function(e){
	e.preventDefault();
	let hideElem = $(this).find('.form__wrapper');
	let showElem =$(this).next('.loader__wrapper');
	let modalParent = $(this).parents('.modal')
	hideElem.hide(400);
	showElem.addClass('active');

	setTimeout(function(elem){
		modalParent.modal('hide');
		hideElem.show('slow');
		showElem.removeClass('active');
	}, 5000)
})

// all about post model
$('.public--or--paid').change(function(e){
	let paidElem = $(this).parent().next();
	// console.log(paidElem)
	if($(this)[0].selectedIndex ){
		paidElem.removeClass('hide') 
	} else{
		paidElem.addClass('hide')
		$('.modal--post .lock').addClass('unlocked')
	}
})


// date fail
let today = new Date();
let nextMonth ;
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
let yyyy = today.getFullYear();
let totalDay =new Date(yyyy, mm, 0).getDate();

today = dd == totalDay ? yyyy + '-' + (parseInt(mm) + 1) + '-' + dd   : yyyy + '-' + mm + '-' + dd ;

if(nextMonth==12){
	nextMonth = (parseInt(yyyy) + 1) + '-' + mm + '-' + dd;
} else{
	nextMonth = yyyy + '-' + String( parseInt(mm)+1).padStart(2, '0') + '-' + dd ;
}


tail.DateTime(".tail-datetime-field", {
	animate: true,
	static: null,
	position: "top",
	classNames: "",
	dateFormat: "YYYY-mm-dd",
	timeFormat: "HH:ii",
	dateStart: today,
	dateEnd: nextMonth,
	weekStart: "MON",
	startOpen: false,
	stayOpen: false,
	today: false,
	timeSeconds: false,
	timeIncrement: true, 
	timeIncrement:false,

});


// $('.timepicker-field.timepicker-seconds').remove();

$('picker-step.step-up').off( "mousedown" );

const calenderFull = $('.datetime-field.tail-datetime-field');
const calenderFullShow = $('#post--date--value');
const sheduleLink =  $('.shedule--link');
calenderFullShow.val(null);



$('#reset').click(function(e){
	$(this).prev().remove();
	$(this).addClass('hide');
	sheduleLink.removeClass('active');
	$('#post--modal form button[type="submit"]').text('post');

})

const calenderFullChange = () =>{

	let elemVal = new Date(calenderFull.val());

	let elemYYYY, elemMM, elemDD, elemHH, elemMm, elemDate;

	if (elemVal){
		elemYYYY = elemVal.getFullYear();
		elemMM = elemVal.toLocaleString('default', { month: 'short' });
		elemDD = elemVal.getDate();
		elemHH = elemVal.getHours();
		elemMm = elemVal.getMinutes();

		elemDate = elemMM + ' ' + elemDD + ' ' + elemYYYY + ' | ' + elemHH + ':' + elemMm  ;
		calenderFullShow.find('time').remove();
		calenderFullShow.prepend(`<time> ${elemDate} </time>`);
		$('#reset').removeClass('hide');
		sheduleLink.addClass('active');
		$('#post--modal form button[type="submit"]').text('schedule');

	}	
}

calenderFull.change(function(){
	calenderFullChange();
})

// modal form text length 

const progress = $('#post--modal .progress-bar');
const progressInput = $('#post--modal textarea[name="PostTitle"]');
const maxLength = progressInput.attr('maxlength');


const progressCalc = e =>{
	let length = progressInput.val().length
	let width = Math.floor(length * 100 / maxLength);
	progress.css('width', width + '%');
	$('#my-post--value').val(progressInput.val().replace(/\s/gm," "))
}

progressInput.keyup(function(e){
	progressCalc();
});

$(document).on('click', '.modal--post .lock', function(e){ 
	$(this).toggleClass('unlocked');
}); 

$(document).on('click', '#post--modal .trash', function(e){ 
	e.preventDefault();
	let parent = $(this).parents('.image');
	let  elemParent = $(this).parents('.modal--post__ph--upload');
	parent.remove();
	if(elemParent.children().length <= 1){
		elemParent.find('.image.empty--input').addClass('hide')
	}
}); 

$(document).on('change', '#post--modal input[name=uploadedImage]', function(e){
	let input = this;
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$(input).prev().attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]); 
	}

}); 

$('#post__card__link__input').change(function(e){
	let timestamp = e.timeStamp;
	uploadImage(this, '#post--modal .modal--post__ph--upload', timestamp);
});


const uploadImage = function(input, imageAppend, timestamp) {
	debugger;
	if (input.files) {
		let filesAmount = input.files.length;
		for (i = 0; i < filesAmount; i++) {
			timestamp++;
			
			var reader = new FileReader();
			reader.onload = (function(input) {
				return function(e) {
					result = e.target.result;
					if(input.type === 'video/webm' || input.type === 'video/mp4' ){
						// result = capture(result);
						result = './gallery'
					}

					let paidElem = $('#public--or--paid')[0].selectedIndex ;

					let image = `<div class="image uploading">
					<img src="${result}" alt="">
					<input type="file" accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" class="input__hide" name="uploadedImage" id="uploadedImage__${timestamp}" value="${result}">
					<a href="#!" class="lock  ${ paidElem ? ' ' : ' unlocked ' }">
					<svg xmlns="http://www.w3.org/2000/svg" width="502.571" height="562.771" viewBox="0 0 502.571 562.771">
					<path id="Subtraction_1" data-name="Subtraction 1" d="M-9212.429,706.77H-9715V347.906h47.059a205.856,205.856,0,0,1,4.235-41.035,203.366,203.366,0,0,1,11.938-38.224,204.484,204.484,0,0,1,18.827-34.6,205.982,205.982,0,0,1,24.9-30.155,206.034,206.034,0,0,1,30.159-24.9,204.617,204.617,0,0,1,34.6-18.825,203.485,203.485,0,0,1,38.234-11.938A205.907,205.907,0,0,1-9463.993,144a205.7,205.7,0,0,1,42.227,4.485,203.391,203.391,0,0,1,39.218,12.63A204.665,204.665,0,0,1-9347.23,181a206.061,206.061,0,0,1,30.527,26.251l-31.746,27.321a161.253,161.253,0,0,0-115.845-48.8c-89.36.085-162.129,72.816-162.214,162.129l324.388.044c0-.195,0-.388,0-.582v-.023h42.033v.025c0,.177,0,.359,0,.536h47.658V706.769Zm-251.865-221.811a46.223,46.223,0,0,0-46.156,46.071,45.909,45.909,0,0,0,28.683,42.592v56.721h35.036V573.715l-.047.019-.041.017.088-.129v.093a45.931,45.931,0,0,0,28.509-42.685A46.123,46.123,0,0,0-9464.294,484.959Z" transform="translate(9715 -143.999)" fill="#fff"/>

					<path id="Subtraction_2" data-name="Subtraction 1" d="M-9212.429,706.77H-9715V347.906h47.059a205.856,205.856,0,0,1,4.235-41.035,203.366,203.366,0,0,1,11.938-38.224,204.484,204.484,0,0,1,18.827-34.6,205.982,205.982,0,0,1,24.9-30.155,206.034,206.034,0,0,1,30.159-24.9,204.617,204.617,0,0,1,34.6-18.825,203.485,203.485,0,0,1,38.234-11.938A205.907,205.907,0,0,1-9463.993,144a205.8,205.8,0,0,1,40.95,4.217,203.406,203.406,0,0,1,38.152,11.888,204.534,204.534,0,0,1,34.545,18.749,206.089,206.089,0,0,1,30.127,24.8,206.05,206.05,0,0,1,24.9,30.042,204.534,204.534,0,0,1,18.86,34.474,203.365,203.365,0,0,1,12.014,38.1,205.649,205.649,0,0,1,4.356,40.909l-42.033.031c-.482-88.885-73.231-161.3-162.171-161.43-89.36.085-162.129,72.816-162.214,162.129l324.388.044c0-.195,0-.388,0-.582v-.023h42.033v.025c0,.177,0,.359,0,.536h47.658V706.769Zm-251.865-221.811a46.223,46.223,0,0,0-46.156,46.071,45.909,45.909,0,0,0,28.683,42.592v56.721h35.036V573.715l-.047.019-.041.017.088-.129v.093a45.931,45.931,0,0,0,28.509-42.685A46.123,46.123,0,0,0-9464.294,484.959Z" transform="translate(9715 -143.999)" fill="#fff"/>


					</svg>
					</a>
					<div class="edit--wrapper">
					<label for="uploadedImage__${timestamp}">change</label>
					<a href="#" class="trash"><i class="bi bi-trash"></i></a>
					</div>
					<div class="loader__wrapper">
					<div class="loader">
					<div class="box">
					<img src="./gallery/logoWhite.png" alt="fanbucket">
					</div>
					<div class="shadow"></div>
					</div>
					</div>
					</div>` ;

					$(imageAppend).append(image);

					setTimeout(function(e){
						$(imageAppend).find('.uploading').removeClass('uploading');
					},3000)
				}

			})(input.files[i]);

			$('.image.empty--input.hide').removeClass('hide');
			reader.readAsDataURL(input.files[i]);
		}
	}
};

$(".feed .dropdown").on("click", ".dropdown-toggle", function(e) { 
	e.preventDefault();
	$(this).parent().addClass("show");
	$(this).attr("aria-expanded", "true");
	$(this).next().addClass("show"); 
});

$('button.follow').click(function(e){
	e.preventDefault();
	$(this).append(`<img src="gallery/rings.svg" alt="" >`);
	$(this).toggleClass('active');

	let elem = $(this);
	$('.toast').toast('show');
	
	if($(this).hasClass('active')){
		$(this).text('follow');
		
	}
	else{
		setTimeout(function(e){
			// console.log($(this).find('img'))
			// $(this).find('img').remove();
			console.log(elem)
			elem.text('following');
		}, 1500);
	}
})


$('.toast').toast({
	delay: 5000,
	// hide:'false'
});

// modal fullImage
const fullImageImg = $('#fullImage--modal .aside__left .card__img img');
function imageZoom(elem){
	elem.removeClass('active');
}
$('.feed .card__img:not(.locked)').click(function(e){
	debugger ;
	e.preventDefault();
	let elem = $(this);
	let elemImage = elem.find('img').attr('src');
	fullImageImg.attr('src', elemImage)
	$(this).addClass('active');
	setTimeout(()=>{
		imageZoom(elem)
	}, 1000);
	
	$('#fullImage--modal').modal('show');

})

$('#fullImage--modal').on('show.bs.modal', function (event) {
	let elem = $('#fullImage--modal .aside__left .card__img');
	console.log(elem)
	elem.addClass('active');
	setTimeout(()=>{
		imageZoom(elem)
	}, 500);
})




});



