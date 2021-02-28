$(document).ready(function(){
	// edit post
	let elem;
	const progressInput = $('#post--modal textarea[name="postContent"]');
	const maxLength = progressInput.attr('maxlength');

	let editFormText = $('.modal--edit textarea');
	$('.edit--post--trigger').click(function(e){
		elem = $(this).parents('.card ').find('.card__body .user__text');
		let elemVal = elem.text();
		editFormText.val(elemVal)
	})

	$('.modal--edit  form').submit(function(e){
		// let elemVal = editFormText.val().replace(/\n/g, '<br>'); 
		let elemVal = editFormText.val(); 
		elem.html(elemVal);
	})

	let progressEdit = $('.modal--edit .progress-bar');
	let progressInputEdit = $('.modal--edit textarea[name="editContent"]');


	const progressCalcEdit = e =>{
		let length = progressInputEdit.val().length
		let width = Math.floor(length * 100 / maxLength);
		progressEdit.css('width', width + '%');
	}
	progressCalcEdit();
	progressInputEdit.keyup(function(e){
		progressCalcEdit(e);
	})
})