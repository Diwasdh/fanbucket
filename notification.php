<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>

<main class="main notification--main">

	<?php 
	include './template/mobnav.php';
	?>

	<section class="profile__card profile__card__wallpaper">
		<div class="card__wallpaper">
			<img src="./gallery/allef-vinicius-QHvtBAYVcfw-unsplash-min.jpg" alt="">
		</div>
	</section>


	<div class="title__wrapper">
		<h2 class="section__title">Notifications</h2>
		<a href="#" class="title__link">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.92 17.46"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M19.77,8.26C18.4,5.91,17,3.43,15.27.46A.81.81,0,0,0,14.48,0h-9a.88.88,0,0,0-.85.5C3.16,3.06,1.65,5.67.15,8.26a.8.8,0,0,0,0,.92c1.5,2.58,3,5.21,4.5,7.81a.83.83,0,0,0,.83.47H14.4a.92.92,0,0,0,.91-.51c1.31-2.32,2.78-4.84,4.45-7.72A.84.84,0,0,0,19.77,8.26Zm-1.3.86c-1.33,2.27-2.65,4.56-3.93,6.79a.7.7,0,0,1-.69.38H6.07a.72.72,0,0,1-.7-.4c-.57-1-1.16-2-1.73-3-.73-1.27-1.47-2.54-2.19-3.81a.83.83,0,0,1,0-.72C2.2,7.07,2.94,5.77,3.69,4.49c.56-1,1.12-1.94,1.67-2.9a.74.74,0,0,1,.71-.42c2.41,0,4.95,0,7.77,0a.73.73,0,0,1,.71.4l3.9,6.77A.69.69,0,0,1,18.47,9.12Z"/><path class="cls-1" d="M10,4.26h0a4.48,4.48,0,0,0-3.17,7.63A4.4,4.4,0,0,0,9.9,13.2h0a4.52,4.52,0,0,0,3.2-1.3,4.4,4.4,0,0,0,1.31-3.15A4.48,4.48,0,0,0,10,4.26Zm2,6.54a3,3,0,0,1-2.09.85h0A2.92,2.92,0,0,1,7,8.71,2.86,2.86,0,0,1,7.9,6.66a2.82,2.82,0,0,1,2-.85h0a2.9,2.9,0,0,1,2.94,2.93A2.94,2.94,0,0,1,12,10.8Z"/></g></g></svg>
		</a>
	</div>


	<section class="feed">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="active nav-link" data-toggle="tab" href="#tab1" role="tab">
					All Notifications (5)

				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.16 13.16"><defs><style>.cls-1{fill:#232323;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M9.4,0H3.76A3.76,3.76,0,0,0,0,3.76V9.4a3.66,3.66,0,0,0,.57,2,3.22,3.22,0,0,0,.58.74,3.77,3.77,0,0,0,2.61,1.05H9.4A3.76,3.76,0,0,0,13.16,9.4V3.76A3.76,3.76,0,0,0,9.4,0Zm3,9.07a3.31,3.31,0,0,1-3.32,3.32h-5a3.32,3.32,0,0,1-2.18-.82l-.2-.2a2.88,2.88,0,0,1-.43-.56A3.12,3.12,0,0,1,.77,9.07v-5A3.3,3.3,0,0,1,1.53,2a2.48,2.48,0,0,1,.63-.58A3.23,3.23,0,0,1,4.09.77h5a3.22,3.22,0,0,1,2.14.79,1.81,1.81,0,0,1,.21.18l.18.2a3.27,3.27,0,0,1,.79,2.15Z"/><path class="cls-1" d="M8.39,4.92l-.06,0a3,3,0,0,0-1.19-.24A2.43,2.43,0,0,0,4.69,7.09a1.25,1.25,0,0,0,1.2,1.38A1.58,1.58,0,0,0,7.2,7.79a.82.82,0,0,0,.87.68C9.22,8.47,10,7.45,10,6A2.93,2.93,0,0,0,7,3a3.78,3.78,0,0,0-3.8,3.92,3.11,3.11,0,0,0,3.18,3.24,3.91,3.91,0,0,0,1.85-.39l.07,0L8,9l-.1.05a3.11,3.11,0,0,1-1.43.32A2.35,2.35,0,0,1,4,6.85a2.87,2.87,0,0,1,2.82-3.1A2.14,2.14,0,0,1,9.16,6a2.05,2.05,0,0,1-.48,1.45.61.61,0,0,1-.44.2.19.19,0,0,1-.15-.07c-.06-.08-.12-.28,0-.8ZM7,5.51a.86.86,0,0,1,.28,0l-.16.93c-.1.58-.53,1.11-.92,1.11S5.74,7.22,5.74,7A1.4,1.4,0,0,1,7,5.51Z"/></g></g></svg>
					Mentions (2)

				</a>
			</li>
			<li class="nav-item ml-auto">
				<a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.16 13.16"><defs><style>.cls-1{fill:#232323;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M9.4,0H3.76A3.76,3.76,0,0,0,0,3.76V9.4a3.66,3.66,0,0,0,.57,2,3.22,3.22,0,0,0,.58.74,3.77,3.77,0,0,0,2.61,1.05H9.4A3.76,3.76,0,0,0,13.16,9.4V3.76A3.76,3.76,0,0,0,9.4,0Zm3,9.07a3.31,3.31,0,0,1-3.32,3.32h-5a3.32,3.32,0,0,1-2.18-.82l-.2-.2a2.88,2.88,0,0,1-.43-.56A3.12,3.12,0,0,1,.77,9.07v-5A3.3,3.3,0,0,1,1.53,2a2.48,2.48,0,0,1,.63-.58A3.23,3.23,0,0,1,4.09.77h5a3.22,3.22,0,0,1,2.14.79,1.81,1.81,0,0,1,.21.18l.18.2a3.27,3.27,0,0,1,.79,2.15Z"/><path class="cls-1" d="M10.38,3.6a1.13,1.13,0,0,0-.86-.86H6.75a2.14,2.14,0,0,0-1.29.77c-1,1-2,2-3,3A1.54,1.54,0,0,0,2,7.18v.36a1.59,1.59,0,0,0,.48.73L4.86,10.6a1.46,1.46,0,0,0,.8.49H5.9a1.47,1.47,0,0,0,.77-.47c1.07-1.08,2-2,2.89-2.89a2.25,2.25,0,0,0,.83-1.4V3.6ZM9.65,6.07A1.13,1.13,0,0,1,9.29,7C8.51,7.73,7.74,8.49,7,9.26l-.91.91a.48.48,0,0,1-.31.18h0a.45.45,0,0,1-.3-.18L3,7.66a.45.45,0,0,1-.18-.3.47.47,0,0,1,.17-.3l1-1c.76-.77,1.53-1.53,2.3-2.3A.94.94,0,0,1,7,3.47H9.27c.27,0,.38.12.38.38V6.07Z"/><path class="cls-1" d="M8.75,5.51A1.09,1.09,0,0,1,7.63,6.62,1.1,1.1,0,0,1,6.52,5.5,1.13,1.13,0,0,1,7.63,4.39,1.11,1.11,0,0,1,8.75,5.51Zm-.49,0a.63.63,0,0,0-.63-.62.63.63,0,1,0,.63.62Z"/></g></g></svg>
					Promotions (0)

				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
					
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.78 11.1"><defs><style>.cls-1{fill:#232323;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" width="12.78" height="1.11"/><rect class="cls-1" y="4.99" width="9.47" height="1.11"/><rect class="cls-1" y="9.99" width="6.17" height="1.11"/></g></g></svg>
				</a>
			</li>
			<li class="indicator"></li>

		</ul>
		

		<div class="tab-content">
			<div class="tab-pane fade show active" id="tab1" role="tabpanel">

				<article class="card notification--card">
					<div class="card__top">
						<a class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
						</a>

						<div class="card__top__body">
							<h2 class="card__title"><a href="#">Tonny Ray</a></h2>
							<div class="card__body">
								<div class="user__text">
									<p >Offered you a free subscription for 7 days. Follow <a href="#" class="hash">this link</a> to claim. 
									</p>
									<p>What is your best wish? I will realize it for you.</p>
								</div>

							</div>
							<time>Nov 17</time>
						</div>


						<div class="card__top__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</a>
						</div>
					</div>
				</article>


				<article class="card notification--card">
					<div class="card__top">
						<a class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
						</a>
						<div class="card__top__body">
							<h2 class="card__title"><a href="#">Tonny Ray</a></h2>
							<div class="card__body">
								<p class="user__text">Chilling out on my own !</p>
								<div class="image--multi">
									<div class="card__img">
										<img src="./gallery/yoel-peterson-mMv_e4F-VU4-unsplash-min.jpg" alt="">
									</div>
									<div class="card__img small__img locked">
										<img src="./gallery/blur.png" alt="">
										<a href="#" class="absolute__link">
											<svg xmlns="http://www.w3.org/2000/svg" width="16.652" height="18.656" viewBox="0 0 16.652 18.656">
												<path id="Path_94" data-name="Path 94" d="M-6463.081-6072.09a6.775,6.775,0,0,0-6.767-6.767,6.775,6.775,0,0,0-6.767,6.767h0a1.559,1.559,0,0,0-1.559,1.559v8.77a1.559,1.559,0,0,0,1.559,1.56h13.534a1.56,1.56,0,0,0,1.559-1.56v-8.77a1.559,1.559,0,0,0-1.559-1.559Zm-6.186,7.48v1.88h-1.162v-1.88a1.524,1.524,0,0,1-.947-1.41,1.529,1.529,0,0,1,1.528-1.529,1.529,1.529,0,0,1,1.528,1.529A1.524,1.524,0,0,1-6469.267-6064.61Zm-5.954-7.48a5.379,5.379,0,0,1,5.373-5.373,5.378,5.378,0,0,1,5.373,5.373Z" transform="translate(6478.174 6078.857)" fill="#fff"/>
											</svg>

										</a>
									</div>
									<a href="#" class="card__img small__img locked">
										<div class="absolute__link">
											<div class="card__img__content">
												<svg xmlns="http://www.w3.org/2000/svg" width="16.652" height="18.656" viewBox="0 0 16.652 18.656">
													<path id="Path_94" data-name="Path 94" d="M-6463.081-6072.09a6.775,6.775,0,0,0-6.767-6.767,6.775,6.775,0,0,0-6.767,6.767h0a1.559,1.559,0,0,0-1.559,1.559v8.77a1.559,1.559,0,0,0,1.559,1.56h13.534a1.56,1.56,0,0,0,1.559-1.56v-8.77a1.559,1.559,0,0,0-1.559-1.559Zm-6.186,7.48v1.88h-1.162v-1.88a1.524,1.524,0,0,1-.947-1.41,1.529,1.529,0,0,1,1.528-1.529,1.529,1.529,0,0,1,1.528,1.529A1.524,1.524,0,0,1-6469.267-6064.61Zm-5.954-7.48a5.379,5.379,0,0,1,5.373-5.373,5.378,5.378,0,0,1,5.373,5.373Z" transform="translate(6478.174 6078.857)" fill="#fff"/>
												</svg>
												<h2 class="card__title">+4 Photos</h2>

											</div>
										</div>
									</a>
								</div>
							</div>
							<time>Nov 2</time>
						</div>
						<div class="card__top__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>

							</a>
						</div>
					</div>
				</article>

				<article class="card notification--card">
					<div class="card__top">
						<a class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
						</a>

						<div class="card__top__body">
							<h2 class="card__title"><a href="#">Tonny Ray</a></h2>
							<div class="card__body">
								<div class="user__text">
									<p >Mention you in a  <a href="#" class="hash">post</a> .
									</p>
									
								</div>

							</div>
							<time>Sep 18</time>
						</div>


						<div class="card__top__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</a>
						</div>
					</div>
					
				</article>


			</div>
		</div>
	</section>
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
			<h2 class="section__title">Popular Buckets</h2>
		</section>

		<section class="other--nav" >
			<ul class="list-group">
				<li class="list-group-item">
					<h2 class="card__title">Winter Vibes</h2>
					<div class="tags">
						<a href="#" title="300 posts" class="hash text-muted" >#winterbaby</a>
						<a href="#" title="300 posts" class="hash text-muted" >#wastedwinter</a>
						<a href="#" title="300 posts" class="hash text-muted" >#wintersplinter</a>
					</div>
					<p class="text-muted">2,583 Posts</p>
				</li>
				<li class="list-group-item">
					<h2 class="card__title">Evening Lounger</h2>
					<div class="tags">
						<a href="#" title="300 posts" class="hash text-muted" >#eveningvibes</a>
						<a href="#" title="300 posts" class="hash text-muted" >#eveninglife</a>
						<a href="#" title="300 posts" class="hash text-muted" >#eveningsetups</a>
					</div>
					<p class="text-muted">8,863 Posts</p>
				</li>
				<li class="list-group-item">
					<h2 class="card__title">Daily Dose</h2>
					<div class="tags">
						<a href="#" title="300 posts" class="hash text-muted" >#eveningvibes</a>
						<a href="#" title="300 posts" class="hash text-muted" >#eveninglife</a>
						<a href="#" title="300 posts" class="hash text-muted" >#eveningsetups</a>
					</div>
					<p class="text-muted">8,863 Posts</p>
				</li>
			</ul>
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
include 'footer.php';
?>
<!-- <script type="text/javascript" src="./node_modules/scrollreveal/dist/scrollreveal.min.js" ></script> -->
<!-- custom -->
<script type="text/javascript" src="./js/profile.js"></script>


</body>
</html>