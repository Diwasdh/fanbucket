<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>

<main class="main messenger--main">
	<div class="title__wrapper search-wrapper--main">
		<h2 class="section__title">Messages</h2>
		<a href="#" class="title__link ml-auto" data-toggle="modal" data-target="#message--new">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.53 14.53"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="6.26" width="2.01" height="14.53"></rect><rect class="cls-1" y="6.26" width="14.53" height="2.01"></rect></g></g></svg>
		</a>

		<form class="title__link form-inline search-wrapper">
			<div class="form-group">

				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.8 12.61" class="search--icon"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M12.8,11.89,9.86,9a5.58,5.58,0,1,0-.7.73l2.92,2.93ZM10,5.53A4.51,4.51,0,1,1,5.53,1,4.51,4.51,0,0,1,10,5.53Z"></path></g></g></svg>

				<input class="form-control"   type="search"  name="chatOrSearch">
				<i class="bi bi-x close--icon"></i>
			</div>
		</form>

		<a href="#" class="title__link search--icon" >
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.8 12.61"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M12.8,11.89,9.86,9a5.58,5.58,0,1,0-.7.73l2.92,2.93ZM10,5.53A4.51,4.51,0,1,1,5.53,1,4.51,4.51,0,0,1,10,5.53Z"></path></g></g></svg>
		</a>
		<a href="#" class="title__link">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.78 11.1"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" width="12.78" height="1.11"></rect><rect class="cls-1" y="4.99" width="9.47" height="1.11"></rect><rect class="cls-1" y="9.99" width="6.17" height="1.11"></rect></g></g></svg>
		</a>
	</div>
	<section class="feed">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="active nav-link" data-toggle="tab" href="#tab1" role="tab">
					Subscriptions

				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
					Primary (2)
				</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
					Promotions (1)
				</a>
			</li>
			
			<li class="indicator"></li>

		</ul>

		<div class="tab-content">
			<div class="tab-pane fade show active" id="tab1" role="tabpanel">

				<a href="#" title="Send message to Person Name" class="card chat--card readed">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
							<div class="online">
								
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<p class="user__text">Offered you a free subscription for 7 days. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time><i class="bi bi-circle-fill"></i> Now</time>
						</div>
					</div>
				</a>

				<a href="#" title="Send message to Person Name" class="card chat--card ">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-kK47cG2EyMk-unsplash-min.jpg" alt="">
							<div class="online">
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Simon Ray</h2>
							<p class="user__text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.16 13.16"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M9.4,0H3.76A3.76,3.76,0,0,0,0,3.76V9.4a3.66,3.66,0,0,0,.57,2,3.22,3.22,0,0,0,.58.74,3.77,3.77,0,0,0,2.61,1.05H9.4A3.76,3.76,0,0,0,13.16,9.4V3.76A3.76,3.76,0,0,0,9.4,0Zm3,9.07a3.31,3.31,0,0,1-3.32,3.32h-5a3.32,3.32,0,0,1-2.18-.82l-.2-.2a2.88,2.88,0,0,1-.43-.56A3.12,3.12,0,0,1,.77,9.07v-5A3.3,3.3,0,0,1,1.53,2a2.48,2.48,0,0,1,.63-.58A3.23,3.23,0,0,1,4.09.77h5a3.22,3.22,0,0,1,2.14.79,1.81,1.81,0,0,1,.21.18l.18.2a3.27,3.27,0,0,1,.79,2.15Z"></path><path class="cls-1" d="M6.58,10A3.44,3.44,0,1,1,10,6.58,3.44,3.44,0,0,1,6.58,10Zm0-6.12A2.69,2.69,0,1,0,9.27,6.58,2.68,2.68,0,0,0,6.58,3.9Z"></path><path class="cls-1" d="M7.78,7.78a1.7,1.7,0,0,1-2.4-2.4Z"></path></g></g></svg> Yo! How do I look in this picture? I hope you liked it. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time>Sep 18</time>
						</div>
					</div>
				</a>

				<a href="#" title="Send message to Person Name" class="card chat--card readed">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/allef-vinicius-QHvtBAYVcfw-unsplash-min.jpg" alt="">
							
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<p class="user__text">Offered you a free subscription for 7 days. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time><i class="bi bi-circle-fill"></i> Now</time>
						</div>
					</div>
				</a>

				<a href="#" title="Send message to Person Name" class="card chat--card readed">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/allef-vinicius-QHvtBAYVcfw-unsplash-min.jpg" alt="">
							<div class="online">
								
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<p class="user__text">Offered you a free subscription for 7 days. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time><i class="bi bi-circle-fill"></i> Now</time>
						</div>
					</div>
				</a>

				<a href="#" class="card chat--card ">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-kK47cG2EyMk-unsplash-min.jpg" alt="">
							<div class="online">
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Simon Ray</h2>
							<p class="user__text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.16 13.16"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M9.4,0H3.76A3.76,3.76,0,0,0,0,3.76V9.4a3.66,3.66,0,0,0,.57,2,3.22,3.22,0,0,0,.58.74,3.77,3.77,0,0,0,2.61,1.05H9.4A3.76,3.76,0,0,0,13.16,9.4V3.76A3.76,3.76,0,0,0,9.4,0Zm3,9.07a3.31,3.31,0,0,1-3.32,3.32h-5a3.32,3.32,0,0,1-2.18-.82l-.2-.2a2.88,2.88,0,0,1-.43-.56A3.12,3.12,0,0,1,.77,9.07v-5A3.3,3.3,0,0,1,1.53,2a2.48,2.48,0,0,1,.63-.58A3.23,3.23,0,0,1,4.09.77h5a3.22,3.22,0,0,1,2.14.79,1.81,1.81,0,0,1,.21.18l.18.2a3.27,3.27,0,0,1,.79,2.15Z"></path><path class="cls-1" d="M6.58,10A3.44,3.44,0,1,1,10,6.58,3.44,3.44,0,0,1,6.58,10Zm0-6.12A2.69,2.69,0,1,0,9.27,6.58,2.68,2.68,0,0,0,6.58,3.9Z"></path><path class="cls-1" d="M7.78,7.78a1.7,1.7,0,0,1-2.4-2.4Z"></path></g></g></svg> Yo! How do I look in this picture? I hope you liked it. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time>Sep 18</time>
						</div>
					</div>
				</a>

				<a href="#" class="card chat--card readed">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
							
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<p class="user__text">Offered you a free subscription for 7 days. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time><i class="bi bi-circle-fill"></i> Now</time>
						</div>
					</div>
				</a>

				<a href="#" class="card chat--card readed">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
							<div class="online">
								
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<p class="user__text">Offered you a free subscription for 7 days. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time><i class="bi bi-circle-fill"></i> Now</time>
						</div>
					</div>
				</a>

				<a href="#" class="card chat--card ">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-kK47cG2EyMk-unsplash-min.jpg" alt="">
							<div class="online">
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Simon Ray</h2>
							<p class="user__text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.16 13.16"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M9.4,0H3.76A3.76,3.76,0,0,0,0,3.76V9.4a3.66,3.66,0,0,0,.57,2,3.22,3.22,0,0,0,.58.74,3.77,3.77,0,0,0,2.61,1.05H9.4A3.76,3.76,0,0,0,13.16,9.4V3.76A3.76,3.76,0,0,0,9.4,0Zm3,9.07a3.31,3.31,0,0,1-3.32,3.32h-5a3.32,3.32,0,0,1-2.18-.82l-.2-.2a2.88,2.88,0,0,1-.43-.56A3.12,3.12,0,0,1,.77,9.07v-5A3.3,3.3,0,0,1,1.53,2a2.48,2.48,0,0,1,.63-.58A3.23,3.23,0,0,1,4.09.77h5a3.22,3.22,0,0,1,2.14.79,1.81,1.81,0,0,1,.21.18l.18.2a3.27,3.27,0,0,1,.79,2.15Z"></path><path class="cls-1" d="M6.58,10A3.44,3.44,0,1,1,10,6.58,3.44,3.44,0,0,1,6.58,10Zm0-6.12A2.69,2.69,0,1,0,9.27,6.58,2.68,2.68,0,0,0,6.58,3.9Z"></path><path class="cls-1" d="M7.78,7.78a1.7,1.7,0,0,1-2.4-2.4Z"></path></g></g></svg> Yo! How do I look in this picture? I hope you liked it. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time>Sep 18</time>
						</div>
					</div>
				</a>

				<a href="#" class="card chat--card readed">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
							
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<p class="user__text">Offered you a free subscription for 7 days. 
							</p>
						</div>


						<div class="card__top__link">
							<button href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
									<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
										<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
										<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
										<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
									</g>
								</svg>
							</button>
							<time><i class="bi bi-circle-fill"></i> Now</time>
						</div>
					</div>
				</a>

			</div>
		</div>
	</section>
</main>

<aside class="right--aside profile--right--aside messenger--aside">
	<div class="sticky-top right--aside__wrapper">
		<div class="newMessage__wrapper">
			<h2 class="section__title">Select any Conversation or Send a New Messsage</h2>
			<button data-toggle="modal" data-target="#message--new">New Message</button>
		</div>
	</div>
</aside>

<div class="modal fade" id="message--new"  data-keyboard="true" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header title__wrapper">
				<form action="#!" method="" class="form">
					<div class="form-group">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.2 17.92" class="search"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-1"><path class="cls-2" d="M7.87,15.74a7.87,7.87,0,1,1,7.87-7.87A7.88,7.88,0,0,1,7.87,15.74ZM7.87,1a6.87,6.87,0,1,0,6.87,6.87A6.88,6.88,0,0,0,7.87,1Z"></path><rect class="cls-2" x="15.03" y="11.96" width="1" height="6.56" transform="translate(-6.23 15.45) rotate(-45)"></rect></g></g></g></svg>
						<input type="search" class="form-control" required=""  id="searchFriend">
					</div>
				</form>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x"></i>
				</button>
			</div>
			<div class="modal-body">
				<h2 class="section__title">Online</h2>
				<a href="./messenger-single.php" title="Send message to Person Name" class="card chat--card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
							<div class="online">
								
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
						</div>
					</div>
				</a>
				<a href="./messenger-single.php" title="Send message to Person Name" class="card chat--card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/allef-vinicius-xxTHuC_wdn0-unsplash-min.jpg" alt="">
							<div class="online">
								
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Simon Ray</h2>
						</div>
					</div>
				</a>
				<a href="./messenger-single.php" title="Send message to Person Name" class="card chat--card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/devon-byers-M-Zr085ub6Q-unsplash-min.jpg" alt="">
							<div class="online">
								
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Amoir Nas</h2>
						</div>
					</div>
				</a>
				

			</div>
		</div>
	</div>
</div>



<?php
include 'footer.php';
?>

<script type="module" src="./js/chat.js"></script>

</body>
</html>