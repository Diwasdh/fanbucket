
$(document).ready(function(){

	$('.search-wrapper--main .title__link.search--icon').click(function(e){
		e.preventDefault();
		// console.log(this)
		$(this).parent().addClass('active');
		$(this).parents('.search-wrapper--main').find('input[type=search]').focus();
		// console.log('hi');
	})

	$('.search-wrapper .close--icon').click(function(e){
		e.preventDefault();
		$(this).prev().val('');
	})

	$('.search-wrapper input[type=search]').blur(function(e){
		$(this).parents('.search-wrapper--main').removeClass('active');
	})

	$('[data-toggle="tooltip"]').tooltip();


	// chat form
	$(document).on('click', '.chat--wrapper__bottom .trash', function(e){
		e.preventDefault(); 
		let parent = $(this).parents('.image');
		let  elemParent = $(this).parents('.chat__ph--upload');
		parent.remove();
		if(elemParent.children().length <= 1){
			elemParent.addClass('hide')
		}
	}); 


	$('#chat__link__input').change(function(e){
		uploadImage(this, '.chat--wrapper__bottom .chat__ph--upload');
	});

	const uploadImage = function(input, imageAppend) {
		// console.log(imageAppend);
		if (input.files) {
			let filesAmount = input.files.length;
			for (let i = 0; i < filesAmount; i++) {
				var reader = new FileReader();
				reader.onload = function(e) {
					let result = e.target.result;
					let image = `<div class="image uploading">
					<img src="${result}" alt="">
					<input type="file" accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" class="input__hide" name="chatUploadedImage"  value="${result}">
					<div class="edit--wrapper hide">
					<a href="#" class="trash "><i class="bi bi-x"></i></a>
					</div>
					<div class="loader__wrapper">
					<div class="loader">
					<div class="box">
					<img src="./gallery/logoWhite.png" alt="fanbucket">
					</div>
					<div class="shadow"></div>
					</div>
					</div>
					</div>
					` ;
					$(imageAppend).append(image);
					setTimeout(function(e){
						$(imageAppend).find('.uploading').removeClass('uploading');
					},3000)
					setTimeout(function(e){
						$(imageAppend).find('.edit--wrapper.hide').removeClass('hide');
					},3000-400)
				}
				$('.chat__ph--upload.hide').removeClass('hide');
				reader.readAsDataURL(input.files[i]);
			}
		}

	};

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

	const inputFile = document.getElementById('chat__link__input');

	document.querySelector('.chat--box:last-child .chat--box__body').lastElementChild.scrollIntoView();

	let dropBody = document.querySelector('body');
	let dropWrapper = document.getElementById('drop-wrapper');
	let dropArea = document.getElementById('drop-area');

	const highlight = (e) =>  {
		dropArea.classList.add('highlight');
	}

	const unhighlight = (e) => {
		dropArea.classList.remove('highlight');

	}
	const dropHandler = ev =>{
		console.log('files are dropped');
		if (ev.dataTransfer.items) {
    		// Use DataTransferItemList interface to access the file(s)
    		for (var i = 0; i < ev.dataTransfer.items.length; i++) {
    			if (ev.dataTransfer.items[i].kind === 'file') {
    				var file = ev.dataTransfer.items[i].getAsFile();
    				// console.log('... file[' + i + '].name = ' + file.name);
    		
    				inputFile.files = ev.dataTransfer.files;
    				uploadImageVanilla('.chat--wrapper__bottom .chat__ph--upload', file.name)
    			}

    		}
    	} else {
    		// Use DataTransfer interface to access the file(s)
    		for (var i = 0; i < ev.dataTransfer.files.length; i++) {
    			console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
    		}
    	}
    }

    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    	dropArea.addEventListener(eventName, function  (e) {
    		e.preventDefault();
    	}, false);
    	dropBody.addEventListener(eventName, function  (e) {
    		e.preventDefault();
    	}, false);
    	dropWrapper.addEventListener(eventName, function  (e) {
    		e.preventDefault();
    	}, false);
    })



    ;['dragenter', 'dragover'].forEach(eventName => {
    	dropBody.addEventListener(eventName, highlight, false)
    })


    ;['dragleave', 'drop'].forEach(eventName => {
    	dropBody.addEventListener(eventName, unhighlight, false);
    });

    dropWrapper.addEventListener('drop', dropHandler, false);

    const uploadImageVanilla = (imageAppend, fileName) => {
		// console.log(inputFile.files);
		if (inputFile.files) {
			let filesAmount = inputFile.files.length;
			for (let i = 0; i < filesAmount; i++) {
				var reader = new FileReader();
				reader.onload = function(e) {
					let result = e.target.result;
					let image = `<div class="image uploading">
					<img src="${result}" alt="${fileName}">
					<input type="file" accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" class="input__hide" name="chatUploadedImage"  value="${result}">
					<div class="edit--wrapper hide">
					<a href="#" class="trash "><i class="bi bi-x"></i></a>
					</div>
					<div class="loader__wrapper">
					<div class="loader">
					<div class="box">
					<img src="./gallery/logoWhite.png" alt="fanbucket">
					</div>
					<div class="shadow"></div>
					</div>
					</div>
					</div>
					` ;
					$(imageAppend).append(image);
					setTimeout(function(e){
						$(imageAppend).find('.uploading').removeClass('uploading');
					},3000)
					setTimeout(function(e){
						$(imageAppend).find('.edit--wrapper.hide').removeClass('hide');
					},3000-400)
				}
				$('.chat__ph--upload.hide').removeClass('hide');
				reader.readAsDataURL(inputFile.files[i]);
			}
		}
};


});