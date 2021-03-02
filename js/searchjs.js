$(document).ready(function(){
	$('.form input[type=search]').keyup( function(e) {
		if($(this).val()){
			$(this).next().addClass('active');
			$(this).next().next().addClass('active');
			$(this).parents('form').find('.searchList').show(300)
		}
		else{
			$(this).next().removeClass('active');
			$(this).next().next().removeClass('active');
			$(this).parents('form').find('.searchList').hide(300);
		}

	});
	if($('.form input[type=search]').val()){
		$(this).next().addClass('active');
		$(this).next().next().addClass('active');
	}

	$.ajax({
		url: "https://restcountries.eu/rest/v2/all"
	}).then(function(data) {


		$.each( data, function( key, elem ) {
			$("#countryName").append($('<option>', {
				value: elem.alpha2Code,
				text: elem.name
			}));
		});


	})

	$('.feed button.seeAll').click(function(e){
		debugger;
		$('.nav-link[href="#tab2"]').click();
	})
})

document.addEventListener("DOMContentLoaded", function(){
	let today = new Date();
	tail.DateTime(".tail-datetime-field--search", { 
		animate: true,
		static: null,
		position: "top",
		classNames: "",
		dateFormat: "dd-mm-YYYY",
		timeFormat: false,
		dateEnd:today,
		weekStart: "MON",
		startOpen: false,
		stayOpen: false,
		today: true,
		
	});
});