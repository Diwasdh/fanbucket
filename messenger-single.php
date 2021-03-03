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
		<div class="chat--wrapper" id="drop-wrapper">
			<div class="chat--wrapper--top">
				<div class="card chat--card ">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
							<div class="online">
							</div>
						</div>

						<div class="card__top__body">
							<h2 class="card__title">Tonny Ray</h2>
							<small class="text-muted">Active Now 
							</small>
						</div>

						<div class="title__wrapper search-wrapper--main">
							<a href="#" class="title__link ml-auto" data-toggle="modal">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" ></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z"></path>
									</g>
								</svg>
							</a>

							<form class="title__link form-inline search-wrapper">
								<div class="form-group">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.8 12.61" class="search--icon"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M12.8,11.89,9.86,9a5.58,5.58,0,1,0-.7.73l2.92,2.93ZM10,5.53A4.51,4.51,0,1,1,5.53,1,4.51,4.51,0,0,1,10,5.53Z"></path></g></g></svg>
									<input class="form-control" type="search"  name="chatOrSearchInside">
									<i class="bi bi-x close--icon"></i>
								</div>
							</form>

							<a href="#" class="title__link search--icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.8 12.61"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M12.8,11.89,9.86,9a5.58,5.58,0,1,0-.7.73l2.92,2.93ZM10,5.53A4.51,4.51,0,1,1,5.53,1,4.51,4.51,0,0,1,10,5.53Z"></path></g></g></svg>
							</a>
							<a href="#" class="title__link">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.783" height="2.703" viewBox="0 0 11.783 2.703">
									<g id="Group_446" data-name="Group 446" transform="translate(-5985.636 -315.167)">
										<path id="Path_237" data-name="Path 237" d="M5994.717,316.519a1.351,1.351,0,1,0,1.351-1.352A1.351,1.351,0,0,0,5994.717,316.519Z" fill="#232323"/>
										<path id="Path_238" data-name="Path 238" d="M5992.879,316.519a1.352,1.352,0,1,0-1.352,1.351A1.352,1.352,0,0,0,5992.879,316.519Z" fill="#232323"/>
										<path id="Path_239" data-name="Path 239" d="M5988.338,316.519a1.351,1.351,0,1,0-1.351,1.351A1.351,1.351,0,0,0,5988.338,316.519Z" fill="#232323"/>
									</g>
								</svg>

							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="chat--wrapper__body">
				<article class="chat--box">
					<a class="card__img card--pp" data-toggle="tooltip" data-placement="right" title="View Profile" href="#!">
						<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
					</a>
					<div class="chat--box__body">
						<div class="image--wrapper">
							<a class="card__img" href="#!" title="View Full Size" >
								<img src="./gallery/yoel-peterson-mMv_e4F-VU4-unsplash-min.jpg" alt="">
							</a>
						</div>
						<div class="user--text">
							<p class="para">Yo! How do I look in this picture? I had clicked in my travel </p>
						</div>
						<time class="date small text-muted">Sep 18</time>
						
					</div>
				</article>
				<article class="chat--box active">
					<div class="chat--box__body">
						<div class="user--text">
							<p class="para">Not gonna lie. you look pretty hot man. </p>
						</div>
						<time class="date small text-muted">Sep 18 <i class="bi bi-check2-all"></i></time>
					</div>
				</article>
				<article class="chat--box">
					<a class="card__img card--pp" data-toggle="tooltip" data-placement="right" title="View Profile" href="#!">
						<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
					</a>
					<div class="chat--box__body">
						<div class="image--wrapper">
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/ali-yahya-kK47cG2EyMk-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" data-toggle="tooltip" data-placement="right bottom" data-html="true" title='<i class="bi bi-fullscreen"></i>' href="#!">
								<img src="./gallery/allef-vinicius-QHvtBAYVcfw-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/allef-vinicius-xxTHuC_wdn0-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/devon-byers-M-Zr085ub6Q-unsplash-min.jpg" alt="">
							</a>
						</div>
						<div class="user--text">
							<p class="para">then here's the bunch of my collection </p>
						</div>
						<div class="user--text">
							<p class="para">And Im typing this just to see , how it'll work when i typed shortly after</p>
						</div>
						<time class="date small text-muted">Sep 18</time>
						
					</div>
				</article>
				<article class="chat--box active">
					<div class="chat--box__body">
						<div class="user--text">
							<p class="para">
								let me text long text with mine photograph underneath it.
							</p>
						</div>
						<div class="user--text">
							<p class="para">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
						</div>
						<div class="image--wrapper">
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/hanny-naibaho-Wx_ThCrudko-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" data-toggle="tooltip" data-placement="right bottom" data-html="true" title='<i class="bi bi-fullscreen"></i>' href="#!">
								<img src="./gallery/laura-chouette-JWufxD3YMLg-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/maulana-VlJyvM20U98-unsplash-min.jpg" alt="">
							</a>
							<a class="card__img" href="#!" title="View Full Size">
								<img src="./gallery/mohamed-lammah-CcOPMtEQqEQ-unsplash-min.jpg" alt="">
							</a>
							
						</div>
						<time class="date small text-muted">Sep 18 <i class="bi bi-check2"></i></time>
					</div>
				</article>
				<article class="chat--box">
					<a class="card__img card--pp" data-toggle="tooltip" data-placement="right" title="View Profile" href="#!">
						<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
					</a>
					<div class="chat--box__body">
						<div class="shared-feed">
							<div class="feed ">
								<a href="./index.php" class="card">
									<div class="card__body">

										<div class="card__img">
											<img src="./gallery/yoel-peterson-mMv_e4F-VU4-unsplash-min.jpg" alt="">
										</div>

										<p class="user__text">Chilling out on my own !
										life goes brrr..</p>

									</div>
									<div class="card__top">
										<div class="card__img">
											<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
										</div>

										<div class="card__top__body">
											<h2 class="card__title">Simon Hensberg</h2>
											<time>3 minutes ago</time>
										</div>
									</div>
									<button type="submit">
										Unlock Post: $20
									</button>
								</a>
							</div>
							<div class="user--text">
								<p class="para">Yo! How do I look in this picture? I had clicked in my travel </p>
							</div>
							<time class="date small text-muted">Sep 18</time>
						</div>
					</div>
				</article>
			</div>
			<div class="drag--here--wrapper" id="drop-area">
				<article class="drag--here " >
					<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68" class="animate__swing animate__animated">
						<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
							<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z"></path>
							<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z"></path>
						</g>
					</svg>
					<h2 class="section__title">Drop Your Image / Video Here</h2>
				</article>
			</div>
			<form class="chat--wrapper__bottom" >
				<div class="chat__ph--upload  hide">
					<div class="image empty--input">
						<label for="chat__link__input"><i class="bi bi-plus"></i></label>
						<input type="file" accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" multiple="" id="chat__link__input" title="Add a new photo or video" name="chat--new--image">
					</div>
				</div>
				<div class="profile--card comment--card ">
					<div class="card__img pp--image">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</div>
					<div class="card__body form-group">
						
						<input type="text" placeholder="write a message" class="form-control comment__text">
						<div class="card__link">
							<a href="#" class="nav__link " data-toggle="modal" data-target="#modal--tips">
								<div data-toggle="tooltip" data-placement="top" title="Send Tips 💲💲">
									<svg xmlns="http://www.w3.org/2000/svg" width="14.05" height="14.05" viewBox="0 0 14.05 14.05" >
										<g id="Group_524" data-name="Group 524" transform="translate(-5913.624 -1592.745)">
											<path id="Path_282" data-name="Path 282" d="M5923.656,1592.745h-6.021a4.014,4.014,0,0,0-4.011,4.011v6.021a3.889,3.889,0,0,0,.609,2.106,3.43,3.43,0,0,0,.622.784,3.979,3.979,0,0,0,2.78,1.128h6.021a4.022,4.022,0,0,0,4.018-4.018v-6.021A4.016,4.016,0,0,0,5923.656,1592.745Zm3.2,9.682a3.546,3.546,0,0,1-3.545,3.545h-5.321a3.5,3.5,0,0,1-2.32-.882c-.078-.065-.149-.136-.22-.207a3.094,3.094,0,0,1-.46-.6,3.431,3.431,0,0,1-.538-1.86v-5.321a3.509,3.509,0,0,1,.81-2.249,3.1,3.1,0,0,1,.674-.622,3.473,3.473,0,0,1,2.054-.667h5.321a3.474,3.474,0,0,1,2.287.842,1.507,1.507,0,0,1,.214.194,1.665,1.665,0,0,1,.195.214,3.485,3.485,0,0,1,.849,2.288Z" fill="#f28f8f"/>
											<path id="Path_283" data-name="Path 283" d="M5920.384,1602.664a2.86,2.86,0,0,1-1.96-.875l.546-.757a2.431,2.431,0,0,0,1.414.749v-1.624c-.866-.219-1.784-.53-1.784-1.632a1.73,1.73,0,0,1,1.784-1.623v-.783h.673v.791a2.829,2.829,0,0,1,1.691.757l-.564.732a2.257,2.257,0,0,0-1.127-.589v1.447c.875.235,1.817.563,1.817,1.691,0,.858-.555,1.606-1.817,1.716v.757h-.673Zm0-3.584v-1.312c-.48.05-.774.32-.774.69C5919.61,1598.786,5919.938,1598.954,5920.384,1599.08Zm.673,1.253v1.456c.58-.093.816-.429.816-.749C5921.873,1600.662,5921.519,1600.476,5921.057,1600.333Z" fill="#f28f8f"/>
										</g>
									</svg>
								</div>

							</a>
							<label href="#" data-toggle="tooltip" data-placement="top" title="Send Image or Video" for="chat__link__input">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" ></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" ></path>
									</g>
								</svg>
							</label>
							<a href="#" data-toggle="tooltip" data-placement="top" title="Send ??">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" ></path>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="rgba(35,35,35,0.3)" stroke-miterlimit="10" stroke-width="0.75"></circle>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" ></path>
									</g>
								</svg>
							</a>
							<a href="#" data-toggle="tooltip" data-placement="top" title="emoji">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" ></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" ></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" ></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" ></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>
			</form>
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

<div class="modal fade" id="modal--tips"  data-keyboard="true" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal--tips">
		<div class="modal-content">
			<div class="modal-header title__wrapper">
				<h2 class="section__title">Send Tips </h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x"></i>
				</button>
			</div>
			<div class="modal-body">


				<form action="#1">
					<label for="amount--number">Amount</label>
					<div class="form-group">
						<i>$</i>
						<input type="number" class="form-control" placeholder="0.00" id="amount--number" min="5.00">
						<small>min $5.00</small>
					</div>
					<button type="submit">
						Send 
					</button>
				</form>

			</div>
		</div>
	</div>
</div>



<script src="./node_modules/@popperjs/popper.min.js" type="text/javascript"></script>
<?php
include 'footer.php';
?>

<script type="module" src="./js/chat.js"></script>

</body>
</html>