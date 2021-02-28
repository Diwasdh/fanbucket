const capture = (video) => {
	var canvas = document.getElementById('thumblain');  
	var fakeVideo = document.querySelector('#fakeVideo');
	fakeVideo.querySelector('source').src = video;
	fakeVideo.load();   
	console.log(fakeVideo) 
	video = document.getElementById('fakeVideo').preview;
	
	canvas.getContext('2d').drawImage(fakeVideo, 0, 0);  
	// canvas.toBlob = (blob) => {
	// 	imageSrc = window.URL.createObjectUrl(blob);
	// 	console.log('inside blob' + imageSrc)
	// 	return imageSrc;
	// };
	console.log(canvas)
	 let imageSrc  = canvas.toBlob(function(blob) {
		console.log(blob)
		var newImg = document.createElement('img');
		imageSrc = URL.createObjectURL(blob);
		newImg.onload = function() {
			URL.revokeObjectURL(imageSrc);
		};
		console.log('inside blob' + imageSrc)
		newImg.src = imageSrc;
		document.body.appendChild(newImg);
	}, 'image/png', 0.95);


	console.log(imageSrc)
	return imageSrc;
}