<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>

<main class="main profile--main profile--edit">
	<?php 
	include './template/mobnav.php';
	?>
	<div class="profile--edit--wrapper">
		

		<section class="profile__card profile__card__wallpaper">
			<div class="card__wallpaper">
				<img src="./gallery/yingchou-han-v-A6xhBPtM4-unsplash-min.jpg" alt="">
				<input type="file" class="custom-file-input" id="ppImageInput" accept="image/*">
			</div>
			<div class="card__body">
				<div class="card__top">
					<div class="card__img active">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" id="ppImage" alt="">
						<input type="file" class="custom-file-input" id="ppImageInput" accept="image/*" value="anjit">
						<div class="circle circle--camera">
							<svg xmlns="http://www.w3.org/2000/svg" width="14.938" height="13.07" viewBox="0 0 14.938 13.07">
								<g id="Group_11" data-name="Group 11" transform="translate(555.029 -226.881)">
									<path id="Path_3" data-name="Path 3" d="M-544.476,227.639l.417,1.109h2.567a1.4,1.4,0,0,1,1.4,1.4v8.4a1.4,1.4,0,0,1-1.4,1.4h-12.136a1.4,1.4,0,0,1-1.4-1.4v-8.4a1.4,1.4,0,0,1,1.4-1.4h2.567l.362-.96a1.4,1.4,0,0,1,1.31-.907h3.821A1.161,1.161,0,0,1-544.476,227.639Zm-4.913.175a.468.468,0,0,0-.438.3l-.586,1.564h-3.215a.468.468,0,0,0-.467.466v8.4a.468.468,0,0,0,.467.466h12.136a.468.468,0,0,0,.467-.466v-8.4a.468.468,0,0,0-.467-.466H-544.7l-.645-1.716a.237.237,0,0,0-.219-.152Zm-1.672,6.535a3.5,3.5,0,0,1,3.5-3.5,3.5,3.5,0,0,1,3.5,3.5,3.5,3.5,0,0,1-3.5,3.5A3.5,3.5,0,0,1-551.061,234.349Zm.934,0a2.571,2.571,0,0,0,2.567,2.568,2.571,2.571,0,0,0,2.567-2.568,2.571,2.571,0,0,0-2.567-2.567A2.571,2.571,0,0,0-550.127,234.349Z" fill="#fff"/>
								</g>
							</svg>
						</div>
					</div>
				</div>
				<h2 class="section__title mb-0">Tonny Ray</h2>
				<p class="user--name">@tonyphotography</p>
			</div>
		</section>

		<section class="feed">
			<nav class="nav">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="active nav-link" data-toggle="tab" href="#tab1" role="tab">
							Profile
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
							Account
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab4" role="tab">
							Privacy & Safety
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab5" role="tab">
							Fans & Followings
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab6" role="tab">
							Notifications
						</a>
					</li>

					<li class="indicator"></li>
				</ul>
			</nav>

			<aside class="tab-content">
				<div class="tab-pane fade show active" id="tab1" role="tabpanel">
					<form class="form">
						<div class="form-group ">
							<label for="displayName">Name</label>
							<input type="text" class="form-control br" name="Fullname" placeholder="Fullname" required="required" value="Tony Tonny Ray" id="displayName">
						</div>

						<div class="form-group ">
							<label for="userName">Username</label>
							<input type="text" class="form-control br" name="Fullname" placeholder="Fullname" required="required" value="@tonyphotography" id="userName">
							<p class="small text-right text-muted">Can be changed only for 2 times.</p>
						</div>
						<div class="form-group ">
							<label for="bioText">Short Bio</label>
							<textarea class="form-control br" name="Fullname" placeholder="Short Bio" required="required" value="" id="bioText" maxlength="100">Fashion Photographer, London</textarea>
							<p class="small text-right text-muted"><span id="textareaCount">28</span>/100</p>
						</div>

						<div class="form-group ">
							<label for="Location">Location</label>
							<div class="form-control__wrapper">
								<input type="text" class="form-control br" name="Fullname" placeholder="Fullname" required="required" value="12 Street | North, Toronto, Canada" id="Location">
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="14.492" height="14.491" viewBox="0 0 14.492 14.491">
										<g id="Group_14" data-name="Group 14" transform="translate(121.905 -573.842)">
											<path id="Path_4" data-name="Path 4" d="M-107.413,580.861v.453a.227.227,0,0,1-.227.227h-1.607a5.43,5.43,0,0,1-4.959,4.958v1.608a.226.226,0,0,1-.227.226h-.453a.226.226,0,0,1-.226-.226V586.5a5.43,5.43,0,0,1-4.959-4.958h-1.608a.227.227,0,0,1-.226-.227v-.453a.226.226,0,0,1,.226-.226h1.608a5.43,5.43,0,0,1,4.959-4.959v-1.608a.226.226,0,0,1,.226-.226h.453a.227.227,0,0,1,.227.226v1.608a5.43,5.43,0,0,1,4.959,4.959h1.607A.227.227,0,0,1-107.413,580.861Zm-2.718.227a4.534,4.534,0,0,0-4.528-4.529,4.535,4.535,0,0,0-4.529,4.529,4.534,4.534,0,0,0,4.529,4.528A4.533,4.533,0,0,0-110.131,581.088Zm-1.811,0a2.717,2.717,0,0,1-2.717,2.717,2.717,2.717,0,0,1-2.717-2.717,2.718,2.718,0,0,1,2.717-2.718A2.718,2.718,0,0,1-111.942,581.088Zm-.906,0a1.813,1.813,0,0,0-1.811-1.812,1.814,1.814,0,0,0-1.812,1.812,1.813,1.813,0,0,0,1.812,1.811A1.813,1.813,0,0,0-112.848,581.088Z" fill="#d8d9db"/>
										</g>
									</svg>
								</a>

							</div>
						</div>

						
						<div class="form-group text-right">
							<button type="submit">Save</button>
						</div>

					</form>
					
				</div>
			</aside>
		</section>
	</div>
	
</main>
<aside class="right--aside profile--right--aside">
	<div class="sticky-top right--aside__wrapper">
		<form action="./search-page.php" class="form">
			<div class="form-group">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.2 17.92" class="search"><defs><style>.cls-1{opacity:0.2;}.cls-2{fill:#03010e;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-1"><path class="cls-2" d="M7.87,15.74a7.87,7.87,0,1,1,7.87-7.87A7.88,7.88,0,0,1,7.87,15.74ZM7.87,1a6.87,6.87,0,1,0,6.87,6.87A6.88,6.88,0,0,0,7.87,1Z"/><rect class="cls-2" x="15.03" y="11.96" width="1" height="6.56" transform="translate(-6.23 15.45) rotate(-45)"/></g></g></g></svg>

				<input type="search" class="form-control" required="" placeholder="Search">

				<a href="#!" class="voice voice__only">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 10.95 16.79"><defs><style>.cls-1{opacity:0.8;}.cls-2{fill:url(#linear-gradient);}.cls-3{fill:url(#linear-gradient-2);}</style><linearGradient id="linear-gradient" x1="8.77" y1="8.76" x2="2.18" y2="2.17" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#d70153"/><stop offset="1" stop-color="#fe4545"/></linearGradient><linearGradient id="linear-gradient-2" x1="10.24" y1="15.49" x2="0.71" y2="5.96" xlink:href="#linear-gradient"/></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-1"><path class="cls-2" d="M5.47,10.93A2.74,2.74,0,0,0,8.21,8.19V2.73a2.74,2.74,0,0,0-5.47,0V8.19A2.74,2.74,0,0,0,5.47,10.93Z"/><path class="cls-3" d="M10.15,6.66V8.32a4.68,4.68,0,1,1-9.35,0V6.66H0V8.32a5.48,5.48,0,0,0,5,5.45V16H2v.8H9V16H6V13.77A5.48,5.48,0,0,0,11,8.32V6.66Z"/></g></g></g></svg>
				</a>
				<a href="#!" class="cross voice">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
					</svg>
				</a>
			</div>
		</form>

		<section class="profile">
			<h2 class="section__title">My Profile</h2>
			<div class="d-flex">
				<p class="wallet active"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.48 12.46"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M12.57,5h-.11V3.56A3.56,3.56,0,0,0,8.89,0H3.56A3.56,3.56,0,0,0,0,3.56V8.89a3.5,3.5,0,0,0,.54,1.87A2.75,2.75,0,0,0,.73,11a2.36,2.36,0,0,0,.36.42,3.54,3.54,0,0,0,2.47,1H8.89A3.54,3.54,0,0,0,11.73,11a3.45,3.45,0,0,0,.5-.9,3.77,3.77,0,0,0,.23-1.21h.11A.91.91,0,0,0,13.48,8V5.92A.91.91,0,0,0,12.57,5Zm-4,6.72H3.87A3.15,3.15,0,0,1,1.81,11l-.2-.19a2.55,2.55,0,0,1-.4-.53A3,3,0,0,1,.73,8.58V3.87a3.12,3.12,0,0,1,.72-2,2.62,2.62,0,0,1,.6-.55A3.09,3.09,0,0,1,3.87.73H8.58a3.08,3.08,0,0,1,2,.75,1.54,1.54,0,0,1,.19.17,1,1,0,0,1,.17.19,3,3,0,0,1,.76,2v0a3.55,3.55,0,0,0-2.34-.87H3.48a.38.38,0,0,0-.37.37.37.37,0,0,0,.3.36H9.08a3.08,3.08,0,0,1,2,.75,1.54,1.54,0,0,1,.19.17,1,1,0,0,1,.17.19l.1.12h-1.5a2,2,0,0,0-2,2,2,2,0,0,0,2,2H11.7A3.13,3.13,0,0,1,8.58,11.73ZM10.72,7A.73.73,0,1,1,10,6.25.72.72,0,0,1,10.72,7Z"/></g></g></svg> $158.00</p>
				<a href="#" class="wallet">Load Wallet</a>
			</div>
		</section>
		<section class="other--nav accordion" id="accordionLinks">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action ">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"></path>
					</svg> Bookmarks
				</a>
				<a href="#" class="list-group-item list-group-item-action collapsed level-1" data-toggle="collapse" data-target="#collapseLink1"> <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.81 14.82"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="4.04" y="3.92" width="6.73" height="0.81"/><rect class="cls-1" x="4.04" y="7.01" width="6.73" height="0.81"/><rect class="cls-1" x="4.04" y="10.09" width="6.73" height="0.81"/><path class="cls-1" d="M10.58,0H4.23A4.24,4.24,0,0,0,0,4.23v6.35A4.09,4.09,0,0,0,.64,12.8a3.77,3.77,0,0,0,.66.83,4.18,4.18,0,0,0,2.93,1.19h6.35a4.23,4.23,0,0,0,4.23-4.24V4.23A4.23,4.23,0,0,0,10.58,0ZM14,10.21A3.74,3.74,0,0,1,10.21,14H4.6A3.71,3.71,0,0,1,2.15,13a2.39,2.39,0,0,1-.23-.22,3.33,3.33,0,0,1-.49-.63,3.6,3.6,0,0,1-.56-2V5.52h0v-1A3.72,3.72,0,0,1,4.6.87h5.61a3.67,3.67,0,0,1,2.41.89l.23.2a2.2,2.2,0,0,1,.2.23,3.69,3.69,0,0,1,.89,2.31v1h0Z"/></g></g></svg>Lists</span> <svg class="toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.71 4.89"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="9.71 0.07 4.89 4.89 0 0 9.71 0.07"/></g></g></svg></a>
				<div class="list-group level-2 collapse" id="collapseLink1" data-parent="#accordionLinks">
					<a href="#" class="list-group-item list-group-item-action ">
						List one
					</a>
					<a href="#" class="list-group-item list-group-item-action ">
						List two
					</a>

				</div>
				<a href="#" class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.82 14.82"><<g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10.58,0H4.23A4.23,4.23,0,0,0,0,4.23v6.35A4.09,4.09,0,0,0,.64,12.8a3.77,3.77,0,0,0,.66.83,4.24,4.24,0,0,0,2.93,1.19h6.35a4.24,4.24,0,0,0,4.24-4.24V4.23A4.23,4.23,0,0,0,10.58,0ZM1.72,2.23A3.76,3.76,0,0,1,4.6.87h5.61a3.67,3.67,0,0,1,2.41.89l.23.2a1.5,1.5,0,0,1,.2.23,3.67,3.67,0,0,1,.89,2.31H.88A3.65,3.65,0,0,1,1.72,2.23ZM10.21,14H4.6A3.71,3.71,0,0,1,2.15,13l-.23-.22a2.92,2.92,0,0,1-.48-.63,3.57,3.57,0,0,1-.57-2V5.51H14v4.7A3.75,3.75,0,0,1,10.21,14Z"/></g></g></svg>Your Cards</a>
				<a href="#" class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.81 14.82"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10.58,0H4.23A4.24,4.24,0,0,0,0,4.23v6.35A4.09,4.09,0,0,0,.64,12.8a3.77,3.77,0,0,0,.66.83,4.18,4.18,0,0,0,2.93,1.19h6.35a4.23,4.23,0,0,0,4.23-4.24V4.23A4.23,4.23,0,0,0,10.58,0ZM14,10.21A3.74,3.74,0,0,1,10.21,14H4.6A3.71,3.71,0,0,1,2.15,13a2.39,2.39,0,0,1-.23-.22,3.33,3.33,0,0,1-.49-.63,3.6,3.6,0,0,1-.56-2V5.52h0v-1A3.72,3.72,0,0,1,4.6.87h5.61a3.67,3.67,0,0,1,2.41.89l.23.2a2.2,2.2,0,0,1,.2.23,3.69,3.69,0,0,1,.89,2.31v1h0Z"/><path class="cls-1" d="M6.71,7.92c0-1.2,1.59-1.33,1.59-2.16,0-.39-.3-.71-.94-.71A1.69,1.69,0,0,0,6,5.74L5.33,5A2.74,2.74,0,0,1,7.48,4c1.24,0,2,.66,2,1.55C9.48,7,7.72,7.14,7.72,8a.6.6,0,0,0,.21.44l-.86.29A1.12,1.12,0,0,1,6.71,7.92Zm0,2.19a.69.69,0,1,1,.69.69A.7.7,0,0,1,6.73,10.11Z"/></g></g></svg>
				Help & Support</a>

				<a href="#" class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.82 14.82"><<g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10.58,0H4.23A4.23,4.23,0,0,0,0,4.23v6.35A4.09,4.09,0,0,0,.64,12.8a3.77,3.77,0,0,0,.66.83,4.24,4.24,0,0,0,2.93,1.19h6.35a4.24,4.24,0,0,0,4.24-4.24V4.23A4.23,4.23,0,0,0,10.58,0ZM1.72,2.23A3.76,3.76,0,0,1,4.6.87h5.61a3.67,3.67,0,0,1,2.41.89l.23.2a1.5,1.5,0,0,1,.2.23,3.67,3.67,0,0,1,.89,2.31H.88A3.65,3.65,0,0,1,1.72,2.23ZM10.21,14H4.6A3.71,3.71,0,0,1,2.15,13l-.23-.22a2.92,2.92,0,0,1-.48-.63,3.57,3.57,0,0,1-.57-2V5.51H14v4.7A3.75,3.75,0,0,1,10.21,14Z"/></g></g></svg>Dark Mode</a>

				<a href="#" class="list-group-item list-group-item-action collapsed level-1" data-toggle="collapse" data-target="#collapseLink2"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.81 14.82"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10.58,0H4.23A4.24,4.24,0,0,0,0,4.23v6.35A4.09,4.09,0,0,0,.64,12.8a3.77,3.77,0,0,0,.66.83,4.18,4.18,0,0,0,2.93,1.19h6.35a4.23,4.23,0,0,0,4.23-4.24V4.23A4.23,4.23,0,0,0,10.58,0ZM14,10.21A3.74,3.74,0,0,1,10.21,14H4.6A3.71,3.71,0,0,1,2.15,13a2.39,2.39,0,0,1-.23-.22,3.33,3.33,0,0,1-.49-.63,3.6,3.6,0,0,1-.56-2V5.52h0v-1A3.72,3.72,0,0,1,4.6.87h5.61a3.67,3.67,0,0,1,2.41.89l.23.2a2.2,2.2,0,0,1,.2.23,3.69,3.69,0,0,1,.89,2.31v1h0Z"/><path class="cls-1" d="M6.75,4.42l-2.35,6H5.59L6,9.25H8.78l.44,1.15h1.19l-2.35-6ZM6.33,8.33,7.41,5.48,8.48,8.33Z"/></g></g></svg>English</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.71 4.89" class="toggle"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="9.71 0.07 4.89 4.89 0 0 9.71 0.07"/></g></g></svg></a>
				<div class="list-group level-2 collapse" id="collapseLink2" data-parent="#accordionLinks">
					<a href="#" class="list-group-item list-group-item-action ">
						Language 1
					</a>
					<a href="#" class="list-group-item list-group-item-action ">
						Language 2
					</a>

				</div>
				<a href="#" class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.32 14.31"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M16.2,6.77,12.51.38A.66.66,0,0,0,11.86,0H4.49a.72.72,0,0,0-.7.41C2.59,2.51,1.35,4.65.12,6.77a.66.66,0,0,0,0,.75c1.23,2.12,2.47,4.27,3.69,6.4a.69.69,0,0,0,.68.39H11.8a.76.76,0,0,0,.74-.42c1.08-1.9,2.28-4,3.65-6.33A.69.69,0,0,0,16.2,6.77Zm-1.07.7C14,9.33,13,11.21,11.91,13a.57.57,0,0,1-.56.31H5A.59.59,0,0,1,4.4,13L3,10.56c-.6-1-1.2-2.08-1.79-3.12a.68.68,0,0,1,0-.59C1.8,5.79,2.41,4.73,3,3.68L4.39,1.3A.61.61,0,0,1,5,1C7,1,9,1,11.34,1a.59.59,0,0,1,.58.33l3.2,5.54A.56.56,0,0,1,15.13,7.47Z"/><path class="cls-1" d="M8.19,3.49h0a3.67,3.67,0,0,0-2.6,6.25,3.61,3.61,0,0,0,2.55,1.08h0a3.71,3.71,0,0,0,2.62-1.07,3.6,3.6,0,0,0,1.07-2.58A3.67,3.67,0,0,0,8.19,3.49ZM9.86,8.85a2.44,2.44,0,0,1-1.72.7h0A2.4,2.4,0,0,1,5.76,7.14a2.34,2.34,0,0,1,.71-1.68,2.31,2.31,0,0,1,1.67-.7h0a2.38,2.38,0,0,1,2.41,2.4A2.42,2.42,0,0,1,9.86,8.85Z"/></g></g></svg>Setting</a>


			</div>
		</section>
		<section class="recommended">

			<h2 class="section__title">Recommended</h2>
			<article class="profile--card ">
				<a class="card__img">
					<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
				</a>
				<div class="card__body">
					<h2 class="card__title"><a href="#">Latifa Krox</a></h2>
					<p class="para small">Fitness Guru, Dubai </p>
				</div>
			</article>
			<article class="profile--card ">
				<a class="card__img active">
					<img src="./gallery/sinval-carvalho-OF_lAQBbnEY-unsplash-min.jpg" alt="">
				</a>
				<div class="card__body">
					<h2 class="card__title"><a href="#">Mark Menon</a></h2>
					<p class="para small">Photographer</p>
				</div>
			</article>
			<article class="profile--card ">
				<a class="card__img">
					<img src="./gallery/laura-chouette-JWufxD3YMLg-unsplash-min.jpg" alt="">
				</a>
				<div class="card__body">
					<h2 class="card__title"><a href="#">Alsa Marry</a></h2>
					<p class="para small">Beach Model, Sydney </p>
				</div>
			</article>
		</section>

		<section class="moment">
			<h2 class="section__title">Moments of  the Day</h2>
			<div class="carousel">
				<div class="item">
					<a href="#" class="card__img">
						<img src="./gallery/josh-parsons-qBA9e_Sv-jY-unsplash-min.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#" class="card__img">
						<img src="./gallery/liliia-beda-_z3ze-sfZ9M-unsplash-min.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#" class="card__img">
						<img src="./gallery/yoel-peterson-mMv_e4F-VU4-unsplash-min.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#" class="card__img">
						<img src="./gallery/prince-akachi-4Yv84VgQkRM-unsplash-min.jpg" alt="">
					</a>
				</div>
			</div>
		</section>

		<footer>
			<div class="footer--link">
				<a href="#" class="para ">Terms of Services</a>
				<a href="#" class="para ">Private Policy</a>
				<a href="#" class="para ">Cookie Policy</a>
				<a href="#" class="para ">More</a>
				<a href="#" class="para ">&copy; 2020 Fanbucket</a>

			</div>
		</footer>
	</div>
</aside>


<?php
include './template/modal--edit.php' ;
include 'footer.php';
?>
<!-- <script type="text/javascript" src="./node_modules/scrollreveal/dist/scrollreveal.min.js" ></script> -->
<!-- custom -->
<script type="text/javascript" src="./js/formEdit.js"></script>

<script type="text/javascript" src="./js/profile.js"></script>
<script>
	$(document).ready(function(e){
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

    	$("#ppImageInput").change(function() {
    		readURL(this);
    	});

    	const bioCalc = e =>{
    		let length = $('#bioText').val().length
    		$('#textareaCount').text(length)
    	}
    	bioCalc();

    	$('#bioText').keyup(function(e){
    		debugger;
    		bioCalc();
    	});
    })


	window.addEventListener('DOMContentLoaded', (event) => {
		

    	let marker = document.querySelector('.indicator');
    	let item = document.querySelectorAll('.nav.nav-tabs .nav-link');
    	let itemActive = document.querySelector('.nav.nav-tabs .nav-link.active');

    	function indicator(e){
    		marker.style.top = e.offsetTop  + "px";
    	}

    	indicator(itemActive);
    	item.forEach(link => {
    		link.addEventListener('click', (e)=>{
    			indicator(e.target);
    		})
    	})
    });
	
</script>

</body>
</html>