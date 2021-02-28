$(document).ready(function(){
	$('form #searchFriend').val(null)
	$('#message--new').on('show.bs.modal', function () {
		$('form #searchFriend').first().focus();
	});
	$('form #searchFriend').keyup(function(e){
		$(this).val() ? $(this).parents('.modal-content').find('.modal-body h2.section__title').text('Result') : $(this).parents('.modal-content').find('.modal-body h2.section__title').text('Online')
		
	})
})

window.addEventListener('DOMContentLoaded', (event) => {
	let marker = document.querySelector('.indicator');
	let item = document.querySelectorAll('.nav.nav-tabs .nav-link');
	let itemActive = document.querySelector('.nav.nav-tabs .nav-link.active');
	
	function indicator(e){
		marker.style.left = e.offsetLeft  + "px";
		marker.style.width = e.offsetWidth  + "px";
	}
	indicator(itemActive);
	item.forEach(link => {
		link.addEventListener('click', (e)=>{
			indicator(e.target);
		})
	})
});