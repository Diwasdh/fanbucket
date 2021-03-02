<?php
$currentpage = 'home';
include 'header.php';
include './template/nav.php';
?>

<main class="main">
	<?php 
	include './template/mobnav.php';
	?>
	<section class="post">
		<article class="profile--card">
			<a class="card__img">
				<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
			</a>
			<div class="card__body form-group pr">
				<input id="my-post--value" type="text" placeholder="Share to your fans" class="form-control">
				<div  type="button" class="user--gesture__blocked post--modal__trigger" data-toggle="modal" data-target="#post--modal" id="my-post--value"></div>
			</div>
			<div class="card__link">
				<a href="#" class="pr">
					<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
						<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
							<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"/>
							<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"/>
						</g>
					</svg>
					<!-- <input type="file" accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" multiple="" id="post__card__link__input"> -->
					<label for="post__card__link__input" class="user--gesture__blocked"></label>
				</a>
				<a href="#" type="button" class=" post--modal__trigger" data-toggle="modal" data-target="#post--modal">
					<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
						<g id="Group_39" data-name="Group 39" transform="translate(6481.337 6688.971)">
							<path id="Path_43" data-name="Path 43" d="M-6465.857-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.334,5.334,0,0,0,.96,1.21,6.142,6.142,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6465.857-6688.971Zm4.93,14.94a5.471,5.471,0,0,1-5.47,5.469h-8.21a5.393,5.393,0,0,1-3.58-1.359c-.12-.1-.23-.21-.34-.32a4.81,4.81,0,0,1-.71-.92,5.3,5.3,0,0,1-.83-2.87v-8.21a5.415,5.415,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.363,5.363,0,0,1,3.17-1.03h8.21a5.362,5.362,0,0,1,3.53,1.3,2.284,2.284,0,0,1,.33.3,2.408,2.408,0,0,1,.3.33,5.38,5.38,0,0,1,1.31,3.531Z" fill="#f28f8f"/>
							<g id="Group_38" data-name="Group 38">
								<path id="Path_44" data-name="Path 44" d="M-6474.774-6683.192a1.252,1.252,0,0,0-1.253,1.252,1.253,1.253,0,0,0,1.253,1.253,1.252,1.252,0,0,0,1.252-1.253A1.251,1.251,0,0,0-6474.774-6683.192Z" fill="#f28f8f"/>
								<g id="Group_35" data-name="Group 35">
									<rect id="Rectangle_15" data-name="Rectangle 15" width="7.493" height="1" transform="translate(-6472.46 -6682.44)" fill="#f28f8f"/>
								</g>
								<path id="Path_45" data-name="Path 45" d="M-6474.774-6679.384a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6474.774-6679.384Z" fill="#f28f8f"/>
								<g id="Group_36" data-name="Group 36">
									<rect id="Rectangle_16" data-name="Rectangle 16" width="7.493" height="1" transform="translate(-6472.46 -6678.631)" fill="#f28f8f"/>
								</g>
								<path id="Path_46" data-name="Path 46" d="M-6474.774-6675.575a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6474.774-6675.575Z" fill="#f28f8f"/>
								<g id="Group_37" data-name="Group 37">
									<rect id="Rectangle_17" data-name="Rectangle 17" width="7.493" height="1" transform="translate(-6472.46 -6674.823)" fill="#f28f8f"/>
								</g>
							</g>
						</g>
					</svg>

				</a>
				<a href="#" type="button" class="post--modal__trigger" data-toggle="modal" data-target="#post--modal">
					<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
						<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
							<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"/>
							<g id="Group_40" data-name="Group 40">
								<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"/>
								<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"/>
							</g>
							<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"/>
						</g>
					</svg>
				</a>
			</div>
		</article>
	</section>

	<section class="moments">
		<div class="title__wrapper">
			<h2 class="section__title">Moments</h2>
			<a href="#" class="title__link">Watch All</a>
		</div>
		
		<div class="stories d-flex ">
			<div class="img__wrapper">
				<a class="card__img	 active self" href="#">
					<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					<div class="add">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.53 14.53"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="6.26" width="2.01" height="14.53"></rect><rect class="cls-1" y="6.26" width="14.53" height="2.01"></rect></g></g></svg>
					</div>
				</a>
				<a  href="#" class="para small">Add Moments</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/mohamed-lammah-CcOPMtEQqEQ-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Mathew</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/hanny-naibaho-Wx_ThCrudko-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Michel Stone</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/prince-akachi-4Yv84VgQkRM-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Gazmair Iray</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/josh-parsons-qBA9e_Sv-jY-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Amoir Nas</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Latifa Krox</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/matheus-ferrero-pg_WCHWSdT8-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Sumnaz Hafi</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Lisa</a>
			</div>
			<div class="img__wrapper">
				<a class="card__img  active" href="#">
					<img src="./gallery/yingchou-han-v-A6xhBPtM4-unsplash-min.jpg" alt="">
				</a>
				<a  href="#" class="para small">Ella</a>
			</div>
		</div>
	</section>

	<section class="accounts--top">
		<h2 class="section__title">Top Accounts</h2>
		<div class="carousel">
			<div class="item">
				<div class="card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/mohamed-lammah-CcOPMtEQqEQ-unsplash-min.jpg" alt="">
						</div>
						<div class="card__img">
							<img src="./gallery/devon-byers-M-Zr085ub6Q-unsplash-min.jpg" alt="">
						</div>
					</div>
					<div class="profile__img--wrapper">
						<a href="#" class="profile__img">
							<img src="./gallery/hanny-naibaho-Wx_ThCrudko-unsplash-min.jpg" alt="">
						</a>
					</div>
					<div class="card__body text-center">
						<h2 class="card__title"><a href="#">Sofir Namba</a> </h2>
						<p class="para small">Frankfurt, Germany</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/laura-chouette-VF2YfHA18vc-unsplash-min.jpg" alt="">
						</div>
						<div class="card__img">
							<img src="./gallery/matheus-ferrero-pg_WCHWSdT8-unsplash-min.jpg" alt="">
						</div>
					</div>
					<div class="profile__img--wrapper">
						<a href="#" class="profile__img">
							<img src="./gallery/maulana-VlJyvM20U98-unsplash-min.jpg" alt="">
						</a>
						<div class="lock">
							<svg xmlns="http://www.w3.org/2000/svg" width="6.408" height="7.18" viewBox="0 0 6.408 7.18">
								<path id="Path_68" data-name="Path 68" d="M-6464.549-6355.328a2.608,2.608,0,0,0-2.6-2.6,2.608,2.608,0,0,0-2.6,2.6h-.6v4.575h6.408v-4.575Zm-2.38,2.878v.723h-.447v-.723a.587.587,0,0,1-.365-.543.589.589,0,0,1,.588-.588.588.588,0,0,1,.588.588A.587.587,0,0,1-6466.929-6352.45Zm-2.292-2.878a2.07,2.07,0,0,1,2.068-2.068,2.07,2.07,0,0,1,2.068,2.068Z" transform="translate(6470.357 6357.933)" fill="#fff"/>
							</svg>

						</div>
					</div>
					<div class="card__body text-center">
						<h2 class="card__title"><a href="#">Onas Ray</a> </h2>
						<p class="para small">New York, USA</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/yingchou-han-v-A6xhBPtM4-unsplash-min.jpg" alt="">
						</div>
						<div class="card__img">
							<img src="./gallery/allef-vinicius-xxTHuC_wdn0-unsplash-min.jpg" alt="">
						</div>
					</div>
					<div class="profile__img--wrapper">
						<a href="#" class="profile__img">
							<img src="./gallery/liliia-beda-_z3ze-sfZ9M-unsplash-min.jpg" alt="">
						</a>
						<div class="lock">
							<svg xmlns="http://www.w3.org/2000/svg" width="6.408" height="7.18" viewBox="0 0 6.408 7.18">
								<path id="Path_68" data-name="Path 68" d="M-6464.549-6355.328a2.608,2.608,0,0,0-2.6-2.6,2.608,2.608,0,0,0-2.6,2.6h-.6v4.575h6.408v-4.575Zm-2.38,2.878v.723h-.447v-.723a.587.587,0,0,1-.365-.543.589.589,0,0,1,.588-.588.588.588,0,0,1,.588.588A.587.587,0,0,1-6466.929-6352.45Zm-2.292-2.878a2.07,2.07,0,0,1,2.068-2.068,2.07,2.07,0,0,1,2.068,2.068Z" transform="translate(6470.357 6357.933)" fill="#fff"/>
							</svg>

						</div>
					</div>
					<div class="card__body text-center">
						<h2 class="card__title"><a href="#">Anastesia Khsi</a> </h2>
						<p class="para small">Keiv, Ukraine</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/devon-byers-M-Zr085ub6Q-unsplash-min.jpg" alt="">
						</div>
						<div class="card__img">
							<img src="./gallery/grant-porter-O8QalALjy4E-unsplash-min.jpg" alt="">
						</div>
					</div>
					<div class="profile__img--wrapper">
						<a href="#" class="profile__img">
							<img src="./gallery/josh-parsons-qBA9e_Sv-jY-unsplash-min.jpg" alt="">
						</a>
					</div>
					<div class="card__body text-center">
						<h2 class="card__title"><a href="#">Ella</a> </h2>
						<p class="para small">Keiv, Philiphines</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<div class="card__top">
						<div class="card__img">
							<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
						</div>
						<div class="card__img">
							<img src="./gallery/maulana-VlJyvM20U98-unsplash-min.jpg" alt="">
						</div>
					</div>
					<div class="profile__img--wrapper">
						<a href="#" class="profile__img">
							<img src="./gallery/mohamed-lammah-CcOPMtEQqEQ-unsplash-min.jpg" alt="">
						</a>
					</div>
					<div class="card__body text-center">
						<h2 class="card__title"><a href="#">Aayano Kanji</a> </h2>
						<p class="para small">Yokito, Japan</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="feed">
		<h2 class="section__title">Your Feed</h2>
		<article class="card">
			<div class="card__top">
				<a class="card__img">
					<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
				</a>
				<div class="card__top__body">
					<h2 class="card__title"><a href="#">Simon Hensberg</a></h2>
					<time>3 minutes ago</time>
				</div>
				<div class="card__top__link dropdown " >
					<a class="dropdown-toggle" type="button"  data-toggle="dropdown" href="#!" data-target="postone__dropdown" data-disabled="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
							<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
								<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
								<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
								<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
							</g>
						</svg>
					</a>
					<div class="dropdown-menu" id="postone__dropdown">
						<li class="nav-item">
							<button class="nav-link dropdown-item edit--post--trigger" href="#" data-toggle="modal" data-target="#edit--modal">
								Edit Post
							</button>
						</li>
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Comments Setting
							</button>
						</li>
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Delet Post
							</button>
						</li>
					</div>
				</div>
			</div>
			<div class="card__body">
				<p class="user__text">Chilling out on my own !
				life goes brrr..</p>
				<div class="image--multi">
					<div class="card__img">
						<img src="./gallery/yoel-peterson-mMv_e4F-VU4-unsplash-min.jpg" alt="">
					</div>
					<div class="image--multi__left ">
						<div class="card__img small__img locked">
							<img src="./gallery/blur.png" alt="">
							<a href="#" class="absolute__link">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.652" height="18.656" viewBox="0 0 16.652 18.656">
									<path id="Path_94" data-name="Path 94" d="M-6463.081-6072.09a6.775,6.775,0,0,0-6.767-6.767,6.775,6.775,0,0,0-6.767,6.767h0a1.559,1.559,0,0,0-1.559,1.559v8.77a1.559,1.559,0,0,0,1.559,1.56h13.534a1.56,1.56,0,0,0,1.559-1.56v-8.77a1.559,1.559,0,0,0-1.559-1.559Zm-6.186,7.48v1.88h-1.162v-1.88a1.524,1.524,0,0,1-.947-1.41,1.529,1.529,0,0,1,1.528-1.529,1.529,1.529,0,0,1,1.528,1.529A1.524,1.524,0,0,1-6469.267-6064.61Zm-5.954-7.48a5.379,5.379,0,0,1,5.373-5.373,5.378,5.378,0,0,1,5.373,5.373Z" transform="translate(6478.174 6078.857)" fill="#fff"/>
								</svg>

							</a>
						</div>
						<a href="#" class="card__img small__img locked bg">
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
			</div>
			<div class="card__action">
				<!-- active fill="url(#linear-gradient)" -->
				<a href="#" class="love">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.915" height="12.902" viewBox="0 0 13.915 12.902">
						<defs>
							<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#d70153"/>
								<stop offset="1" stop-color="#fe4545"/>
							</linearGradient>
						</defs>
						<path id="Path_89" data-name="Path 89" d="M-6897.567-5852.808a3.708,3.708,0,0,0-3.708-3.709,3.694,3.694,0,0,0-3.225,1.885,3.694,3.694,0,0,0-3.225-1.885,3.708,3.708,0,0,0-3.709,3.709s-.8,3.064,6.934,9.193C-6896.762-5849.744-6897.567-5852.808-6897.567-5852.808Z" transform="translate(6911.458 5856.517)" />
					</svg>
					<span class="number">164</span>
					<span class="label">Hearts</span>
					
				</a>
				<a  data-toggle="collapse" href="#!" class="comments">
					<svg xmlns="http://www.w3.org/2000/svg" width="13.604" height="15.246" viewBox="0 0 13.604 15.246">
						<path id="Path_90" data-name="Path 90" d="M-6793.061-5850.866c0,3.481-2.163,7.555-6.511,7.9l-.012-2.154c-3.365-.131-6.081-2.351-6.081-5.748a6.3,6.3,0,0,1,6.3-6.3A6.3,6.3,0,0,1-6793.061-5850.866Z" transform="translate(6806.165 5857.668)" fill="none"  stroke-miterlimit="10" stroke-width="1"/>
					</svg>
					<span class="label">Comment</span>

				</a>
				<a href="#" class="bookmark">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"/>
					</svg>

					<span class="label">Bookmark</span>
				</a>
				<a href="#" class="share">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.26" height="12.332" viewBox="0 0 10.26 12.332">
						<path id="Path_92" data-name="Path 92" d="M-6576.9-5846.836a1.453,1.453,0,0,0-.921.333l-4.962-2.786a1.459,1.459,0,0,0,.027-.262,1.454,1.454,0,0,0-.075-.44l5.1-3.562a1.463,1.463,0,0,0,.83.257,1.468,1.468,0,0,0,1.468-1.468,1.469,1.469,0,0,0-1.468-1.468,1.469,1.469,0,0,0-1.469,1.468,1.481,1.481,0,0,0,.061.4l-5.13,3.582a1.459,1.459,0,0,0-.786-.232,1.468,1.468,0,0,0-1.468,1.468,1.468,1.468,0,0,0,1.468,1.468,1.453,1.453,0,0,0,.934-.344l4.95,2.779a1.431,1.431,0,0,0-.029.28,1.469,1.469,0,0,0,1.469,1.468,1.468,1.468,0,0,0,1.468-1.468A1.468,1.468,0,0,0-6576.9-5846.836Z" transform="translate(6585.689 5856.232)" />
					</svg>

					<span class="label">Share</span>
				</a>
				<button >
					Unlock Post: $10
				</button>
			</div>
			<div class="card__comments collapse">
				<div class="profile--card comment--card">
					<a class="card__img">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</a>
					<div class="card__body form-group">
						<input type="text" placeholder="Write a comment" class="form-control comment__text">
						<div class="card__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" fill="#f28f8f"/>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="#f28f8f" stroke-miterlimit="10" stroke-width="0.75"/>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" fill="#f28f8f"/>
									</g>
								</svg>


							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Latifa Krox</h2>
						</a>

						<p class="para">I cannot deside which to choose. Arrrr..</p>
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
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/sinval-carvalho-OF_lAQBbnEY-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Mark Menon</h2>
						</a>

						<p class="para">Well, I Liked the menu.</p>
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
			</div>
		</article>

		<article class="card">
			<div class="card__top">
				<a class="card__img">
					<img src="./gallery/prince-akachi-4Yv84VgQkRM-unsplash-min.jpg" alt="">
				</a>
				<div class="card__top__body">
					<h2 class="card__title"><a href="#">Gazmair Iray</a></h2>
					<time>2 days ago</time>
				</div>
				<div class="card__top__link dropdown " >
					<a class="dropdown-toggle" type="button"  data-toggle="dropdown" href="#!" data-target="postone__dropdown" data-disabled="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
							<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
								<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
								<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
								<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
							</g>
						</svg>
					</a>
					<div class="dropdown-menu" id="postone__dropdown">
						<li class="nav-item">
							<button class="nav-link dropdown-item " href="#">
								Not Intrested
							</button>
						</li>
						
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Report
							</button>
						</li>
					</div>
				</div>
			</div>
			<div class="card__body">
				<p class="user__text">Do you like more about this design? Like really? <a href="#" class="hash">#nofilters</a> <a href="#" class="hash">#fanbucket</a>
				</p>
				<div class="poll__wrapper" >
					<!-- poll with ratio -->
					<div class="custom-control custom-checkbox">
						<input type="radio" class="custom-control-input" id="votingone" checked="" name="poll__voting__one">
						<label class="custom-control-label" for="votingone">
							<span class="result--box" value="14">Menu Bar <span class="absolute--sorry" style="width: 80%"></span></span><span class="count">+14</span>
						</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="radio" class="custom-control-input" id="votingtwo" name="poll__voting__one">
						<label class="custom-control-label" for="votingtwo">
							<span class="result--box" value="1">Side Station <span class="absolute--sorry" style="width: 20%"></span></span><span class="count">+1</span>
						</label>
					</div>
				</div>
			</div>
			<div class="card__action">
				<!-- active fill="url(#linear-gradient)" -->
				<a href="#" class="love">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.915" height="12.902" viewBox="0 0 13.915 12.902">
						<defs>
							<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#d70153"/>
								<stop offset="1" stop-color="#fe4545"/>
							</linearGradient>
						</defs>
						<path id="Path_89" data-name="Path 89" d="M-6897.567-5852.808a3.708,3.708,0,0,0-3.708-3.709,3.694,3.694,0,0,0-3.225,1.885,3.694,3.694,0,0,0-3.225-1.885,3.708,3.708,0,0,0-3.709,3.709s-.8,3.064,6.934,9.193C-6896.762-5849.744-6897.567-5852.808-6897.567-5852.808Z" transform="translate(6911.458 5856.517)" />
					</svg>
					<span class="number">14</span>
					<span class="label">Hearts</span>
				</a>
				<a  data-toggle="collapse" href="#!" class="comments">
					<svg xmlns="http://www.w3.org/2000/svg" width="13.604" height="15.246" viewBox="0 0 13.604 15.246">
						<path id="Path_90" data-name="Path 90" d="M-6793.061-5850.866c0,3.481-2.163,7.555-6.511,7.9l-.012-2.154c-3.365-.131-6.081-2.351-6.081-5.748a6.3,6.3,0,0,1,6.3-6.3A6.3,6.3,0,0,1-6793.061-5850.866Z" transform="translate(6806.165 5857.668)" fill="none"  stroke-miterlimit="10" stroke-width="1"/>
					</svg>
					<span class="label">2 Comment</span>

				</a>
				<a href="#" class="bookmark">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"/>
					</svg>

					<span class="label">Bookmark</span>
				</a>
				<a href="#" class="share">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.26" height="12.332" viewBox="0 0 10.26 12.332">
						<path id="Path_92" data-name="Path 92" d="M-6576.9-5846.836a1.453,1.453,0,0,0-.921.333l-4.962-2.786a1.459,1.459,0,0,0,.027-.262,1.454,1.454,0,0,0-.075-.44l5.1-3.562a1.463,1.463,0,0,0,.83.257,1.468,1.468,0,0,0,1.468-1.468,1.469,1.469,0,0,0-1.468-1.468,1.469,1.469,0,0,0-1.469,1.468,1.481,1.481,0,0,0,.061.4l-5.13,3.582a1.459,1.459,0,0,0-.786-.232,1.468,1.468,0,0,0-1.468,1.468,1.468,1.468,0,0,0,1.468,1.468,1.453,1.453,0,0,0,.934-.344l4.95,2.779a1.431,1.431,0,0,0-.029.28,1.469,1.469,0,0,0,1.469,1.468,1.468,1.468,0,0,0,1.468-1.468A1.468,1.468,0,0,0-6576.9-5846.836Z" transform="translate(6585.689 5856.232)" />
					</svg>

					<span class="label">Share</span>
				</a>
				<button class="deactive">
					Unlocked Post
				</button>
			</div>
			<div class="card__comments collapse">
				<div class="profile--card comment--card">
					<a class="card__img">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</a>
					<div class="card__body form-group">
						<input type="text" placeholder="Write a comment" class="form-control comment__text">
						<div class="card__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" fill="#f28f8f"/>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="#f28f8f" stroke-miterlimit="10" stroke-width="0.75"/>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" fill="#f28f8f"/>
									</g>
								</svg>


							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Latifa Krox</h2>
						</a>

						<p class="para">I cannot deside which to choose. Arrrr..</p>
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
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/sinval-carvalho-OF_lAQBbnEY-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Mark Menon</h2>
						</a>

						<p class="para">Well, I Liked the menu.</p>
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


			</div>
		</article>

		<article class="card">
			<div class="card__top">
				<a class="card__img">
					<img src="./gallery/josh-parsons-qBA9e_Sv-jY-unsplash-min.jpg" alt="">
				</a>
				<div class="card__top__body">
					<h2 class="card__title"><a href="#">Amoir Nas</a></h2>
					<time>1 minutes ago</time>
				</div>
				<div class="card__top__link dropdown " >
					<a class="dropdown-toggle" type="button"  data-toggle="dropdown" href="#!" data-target="postone__dropdown" data-disabled="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
							<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
								<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
								<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
								<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
							</g>
						</svg>
					</a>
					<div class="dropdown-menu" id="postone__dropdown">
						<li class="nav-item">
							<button class="nav-link dropdown-item " href="#">
								Not Intrested
							</button>
						</li>
						
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Report
							</button>
						</li>
					</div>
				</div>
			</div>
			<div class="card__body">
				<p class="user__text">Rocking my way in.</p>
				<div class="">
					<a href="#" class="card__img locked bg">
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
			<div class="card__action">
				<!-- active fill="url(#linear-gradient)" -->
				<a href="#" class="love">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.915" height="12.902" viewBox="0 0 13.915 12.902">
						<defs>
							<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#d70153"/>
								<stop offset="1" stop-color="#fe4545"/>
							</linearGradient>
						</defs>
						<path id="Path_89" data-name="Path 89" d="M-6897.567-5852.808a3.708,3.708,0,0,0-3.708-3.709,3.694,3.694,0,0,0-3.225,1.885,3.694,3.694,0,0,0-3.225-1.885,3.708,3.708,0,0,0-3.709,3.709s-.8,3.064,6.934,9.193C-6896.762-5849.744-6897.567-5852.808-6897.567-5852.808Z" transform="translate(6911.458 5856.517)" />
					</svg>
					<span class="number">269</span>
					<span class="label">Hearts</span>
				</a>
				<a  data-toggle="collapse" href="#!" class="comments">
					<svg xmlns="http://www.w3.org/2000/svg" width="13.604" height="15.246" viewBox="0 0 13.604 15.246">
						<path id="Path_90" data-name="Path 90" d="M-6793.061-5850.866c0,3.481-2.163,7.555-6.511,7.9l-.012-2.154c-3.365-.131-6.081-2.351-6.081-5.748a6.3,6.3,0,0,1,6.3-6.3A6.3,6.3,0,0,1-6793.061-5850.866Z" transform="translate(6806.165 5857.668)" fill="none"  stroke-miterlimit="10" stroke-width="1"/>
					</svg>
					<span class="label">1k Comment</span>

				</a>
				<a href="#" class="bookmark active">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"/>
					</svg>

					<span class="label">Bookmark</span>
				</a>
				<a href="#" class="share">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.26" height="12.332" viewBox="0 0 10.26 12.332">
						<path id="Path_92" data-name="Path 92" d="M-6576.9-5846.836a1.453,1.453,0,0,0-.921.333l-4.962-2.786a1.459,1.459,0,0,0,.027-.262,1.454,1.454,0,0,0-.075-.44l5.1-3.562a1.463,1.463,0,0,0,.83.257,1.468,1.468,0,0,0,1.468-1.468,1.469,1.469,0,0,0-1.468-1.468,1.469,1.469,0,0,0-1.469,1.468,1.481,1.481,0,0,0,.061.4l-5.13,3.582a1.459,1.459,0,0,0-.786-.232,1.468,1.468,0,0,0-1.468,1.468,1.468,1.468,0,0,0,1.468,1.468,1.453,1.453,0,0,0,.934-.344l4.95,2.779a1.431,1.431,0,0,0-.029.28,1.469,1.469,0,0,0,1.469,1.468,1.468,1.468,0,0,0,1.468-1.468A1.468,1.468,0,0,0-6576.9-5846.836Z" transform="translate(6585.689 5856.232)" />
					</svg>

					<span class="label">Share</span>
				</a>
				<button >
					Unlock Post: $20
				</button>
			</div>
			<div class="card__comments collapse">
				<div class="profile--card comment--card">
					<a class="card__img">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</a>
					<div class="card__body form-group">
						<input type="text" placeholder="Write a comment" class="form-control comment__text">
						<div class="card__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" fill="#f28f8f"/>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="#f28f8f" stroke-miterlimit="10" stroke-width="0.75"/>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" fill="#f28f8f"/>
									</g>
								</svg>


							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Latifa Krox</h2>
						</a>

						<p class="para">I cannot deside which to choose. Arrrr..</p>
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
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/sinval-carvalho-OF_lAQBbnEY-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Mark Menon</h2>
						</a>

						<p class="para">Well, I Liked the menu.</p>
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
				<div class="text-center">
					<button class="deactive">
						More Comments ..
					</button>
				</div>


			</div>
		</article>

		<article class="card">
			<div class="card__top">
				<a class="card__img">
					<img src="./gallery/matheus-ferrero-weKST3rzpkM-unsplash-min.jpg" alt="">
				</a>

				<div class="card__top__body">
					<h2 class="card__title"><a href="#">Amir Hasan</a></h2>
					<time>Just Now</time>
				</div>

				<div class="card__top__link dropdown " >
					<a class="dropdown-toggle" type="button"  data-toggle="dropdown" href="#!" data-target="postone__dropdown" data-disabled="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
							<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
								<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
								<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
								<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
							</g>
						</svg>
					</a>
					<div class="dropdown-menu" id="postone__dropdown">
						<li class="nav-item">
							<button class="nav-link dropdown-item " href="#">
								Not Intrested
							</button>
						</li>
						
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Report
							</button>
						</li>
					</div>
				</div>
			</div>

			<div class="card__body">
				<p class="user__text">    “Success isn’t always about greatness. It’s about consistency. Consistent hard work
				leads to success. Greatness will come.”</p>

			</div>
			<div class="card__action">
				<!-- active fill="url(#linear-gradient)" -->
				<a href="#" class="love">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.915" height="12.902" viewBox="0 0 13.915 12.902">
						<defs>
							<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#d70153"/>
								<stop offset="1" stop-color="#fe4545"/>
							</linearGradient>
						</defs>
						<path id="Path_89" data-name="Path 89" d="M-6897.567-5852.808a3.708,3.708,0,0,0-3.708-3.709,3.694,3.694,0,0,0-3.225,1.885,3.694,3.694,0,0,0-3.225-1.885,3.708,3.708,0,0,0-3.709,3.709s-.8,3.064,6.934,9.193C-6896.762-5849.744-6897.567-5852.808-6897.567-5852.808Z" transform="translate(6911.458 5856.517)" />
					</svg>
					<span class="number">269</span>
					<span class="label">Hearts</span>
				</a>
				<a  data-toggle="collapse" href="#!" class="comments">
					<svg xmlns="http://www.w3.org/2000/svg" width="13.604" height="15.246" viewBox="0 0 13.604 15.246">
						<path id="Path_90" data-name="Path 90" d="M-6793.061-5850.866c0,3.481-2.163,7.555-6.511,7.9l-.012-2.154c-3.365-.131-6.081-2.351-6.081-5.748a6.3,6.3,0,0,1,6.3-6.3A6.3,6.3,0,0,1-6793.061-5850.866Z" transform="translate(6806.165 5857.668)" fill="none"  stroke-miterlimit="10" stroke-width="1"/>
					</svg>
					<span class="label">1k Comment</span>

				</a>
				<a href="#" class="bookmark active">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"/>
					</svg>

					<span class="label">Bookmark</span>
				</a>
				<a href="#" class="share">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.26" height="12.332" viewBox="0 0 10.26 12.332">
						<path id="Path_92" data-name="Path 92" d="M-6576.9-5846.836a1.453,1.453,0,0,0-.921.333l-4.962-2.786a1.459,1.459,0,0,0,.027-.262,1.454,1.454,0,0,0-.075-.44l5.1-3.562a1.463,1.463,0,0,0,.83.257,1.468,1.468,0,0,0,1.468-1.468,1.469,1.469,0,0,0-1.468-1.468,1.469,1.469,0,0,0-1.469,1.468,1.481,1.481,0,0,0,.061.4l-5.13,3.582a1.459,1.459,0,0,0-.786-.232,1.468,1.468,0,0,0-1.468,1.468,1.468,1.468,0,0,0,1.468,1.468,1.453,1.453,0,0,0,.934-.344l4.95,2.779a1.431,1.431,0,0,0-.029.28,1.469,1.469,0,0,0,1.469,1.468,1.468,1.468,0,0,0,1.468-1.468A1.468,1.468,0,0,0-6576.9-5846.836Z" transform="translate(6585.689 5856.232)" />
					</svg>

					<span class="label">Share</span>
				</a>
				<button class="deactive">
					Unlocked Post
				</button>
			</div>
			<div class="card__comments collapse">
				<div class="profile--card comment--card">
					<a class="card__img">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</a>
					<div class="card__body form-group">
						<input type="text" placeholder="Write a comment" class="form-control comment__text">
						<div class="card__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" fill="#f28f8f"/>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="#f28f8f" stroke-miterlimit="10" stroke-width="0.75"/>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" fill="#f28f8f"/>
									</g>
								</svg>


							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>



			</div>
		</article>

		<article class="card">
			<div class="card__top">
				<a class="card__img">
					<img src="./gallery/josh-parsons-qBA9e_Sv-jY-unsplash-min.jpg" alt="">
				</a>
				<div class="card__top__body">
					<h2 class="card__title"><a href="#">Amoir Nas</a></h2>
					<time>1 minutes ago</time>
				</div>
				<div class="card__top__link dropdown " >
					<a class="dropdown-toggle" type="button"  data-toggle="dropdown" href="#!" data-target="postone__dropdown" data-disabled="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
							<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
								<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
								<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
								<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
							</g>
						</svg>
					</a>
					<div class="dropdown-menu" id="postone__dropdown">
						<li class="nav-item">
							<button class="nav-link dropdown-item " href="#">
								Not Intrested
							</button>
						</li>
						
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Report
							</button>
						</li>
					</div>
				</div>
			</div>
			<div class="card__body">
				<p class="user__text">Rocking my way in.</p>
				<div class="card--img--wrapper">
					<a href="#" class="card__img">
						<img src="./gallery/maulana-VlJyvM20U98-unsplash-min.jpg" alt="">
					</a>
				</div>
			</div>
			<div class="card__action">
				<!-- active fill="url(#linear-gradient)" -->
				<a href="#" class="love">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.915" height="12.902" viewBox="0 0 13.915 12.902">
						<defs>
							<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#d70153"/>
								<stop offset="1" stop-color="#fe4545"/>
							</linearGradient>
						</defs>
						<path id="Path_89" data-name="Path 89" d="M-6897.567-5852.808a3.708,3.708,0,0,0-3.708-3.709,3.694,3.694,0,0,0-3.225,1.885,3.694,3.694,0,0,0-3.225-1.885,3.708,3.708,0,0,0-3.709,3.709s-.8,3.064,6.934,9.193C-6896.762-5849.744-6897.567-5852.808-6897.567-5852.808Z" transform="translate(6911.458 5856.517)" />
					</svg>
					<span class="number">269</span>
					<span class="label">Hearts</span>
				</a>
				<a  data-toggle="collapse" href="#!" class="comments">
					<svg xmlns="http://www.w3.org/2000/svg" width="13.604" height="15.246" viewBox="0 0 13.604 15.246">
						<path id="Path_90" data-name="Path 90" d="M-6793.061-5850.866c0,3.481-2.163,7.555-6.511,7.9l-.012-2.154c-3.365-.131-6.081-2.351-6.081-5.748a6.3,6.3,0,0,1,6.3-6.3A6.3,6.3,0,0,1-6793.061-5850.866Z" transform="translate(6806.165 5857.668)" fill="none"  stroke-miterlimit="10" stroke-width="1"/>
					</svg>
					<span class="label">1k Comment</span>

				</a>
				<a href="#" class="bookmark active">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"/>
					</svg>

					<span class="label">Bookmark</span>
				</a>
				<a href="#" class="share">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.26" height="12.332" viewBox="0 0 10.26 12.332">
						<path id="Path_92" data-name="Path 92" d="M-6576.9-5846.836a1.453,1.453,0,0,0-.921.333l-4.962-2.786a1.459,1.459,0,0,0,.027-.262,1.454,1.454,0,0,0-.075-.44l5.1-3.562a1.463,1.463,0,0,0,.83.257,1.468,1.468,0,0,0,1.468-1.468,1.469,1.469,0,0,0-1.468-1.468,1.469,1.469,0,0,0-1.469,1.468,1.481,1.481,0,0,0,.061.4l-5.13,3.582a1.459,1.459,0,0,0-.786-.232,1.468,1.468,0,0,0-1.468,1.468,1.468,1.468,0,0,0,1.468,1.468,1.453,1.453,0,0,0,.934-.344l4.95,2.779a1.431,1.431,0,0,0-.029.28,1.469,1.469,0,0,0,1.469,1.468,1.468,1.468,0,0,0,1.468-1.468A1.468,1.468,0,0,0-6576.9-5846.836Z" transform="translate(6585.689 5856.232)" />
					</svg>

					<span class="label">Share</span>
				</a>
				<button >
					Unlock Post: $20
				</button>
			</div>
			<div class="card__comments collapse">
				<div class="profile--card comment--card">
					<a class="card__img">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</a>
					<div class="card__body form-group">
						<input type="text" placeholder="Write a comment" class="form-control comment__text">
						<div class="card__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" fill="#f28f8f"/>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="#f28f8f" stroke-miterlimit="10" stroke-width="0.75"/>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" fill="#f28f8f"/>
									</g>
								</svg>


							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Latifa Krox</h2>
						</a>

						<p class="para">I cannot deside which to choose. Arrrr..</p>
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
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/sinval-carvalho-OF_lAQBbnEY-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Mark Menon</h2>
						</a>

						<p class="para">Well, I Liked the menu.</p>
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
				<div class="text-center">
					<button class="deactive">
						More Comments ..
					</button>
				</div>


			</div>
		</article>

		<article class="card">
			<div class="card__top">
				<a class="card__img">
					<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
				</a>
				<div class="card__top__body">
					<h2 class="card__title"><a href="#">Charles</a></h2>
					<time>3 minutes ago</time>
				</div>
				<div class="card__top__link dropdown " >
					<a class="dropdown-toggle" type="button"  data-toggle="dropdown" href="#!" data-target="postone__dropdown" data-disabled="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="11.784" height="2.703" viewBox="0 0 11.784 2.703">
							<g id="Group_144" data-name="Group 144" transform="translate(6425.085 6208.133)" opacity="0.3">
								<path id="Path_95" data-name="Path 95" d="M-6416-6206.782a1.351,1.351,0,0,0,1.351,1.352,1.351,1.351,0,0,0,1.351-1.352,1.351,1.351,0,0,0-1.351-1.351A1.351,1.351,0,0,0-6416-6206.782Z"/>
								<path id="Path_96" data-name="Path 96" d="M-6417.842-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6417.842-6206.782Z"/>
								<path id="Path_97" data-name="Path 97" d="M-6422.383-6206.782a1.35,1.35,0,0,0-1.351-1.351,1.351,1.351,0,0,0-1.351,1.351,1.351,1.351,0,0,0,1.351,1.352A1.351,1.351,0,0,0-6422.383-6206.782Z"/>
							</g>
						</svg>
					</a>
					<div class="dropdown-menu" id="postone__dropdown">
						<li class="nav-item">
							<button class="nav-link dropdown-item edit--post--trigger" href="#" data-toggle="modal" data-target="#edit--modal">
								Edit Post
							</button>
						</li>
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Comments Setting
							</button>
						</li>
						<li class="nav-item">
							<button class="nav-link dropdown-item" href="#">
								Delet Post
							</button>
						</li>
					</div>
				</div>
			</div>
			<div class="card__body">
				<p class="user__text">Chilling out on my own !
				Everyone lie about it</p>
				<div class="image--multi">
					<div class="card__img">
						<img src="./gallery/devon-byers-M-Zr085ub6Q-unsplash-min.jpg" alt="">
					</div>
					<!-- <div class="image--multi__left"> -->
						<div class="card__img image--multi__left h-auto">
							<img src="./gallery/laura-chouette-VF2YfHA18vc-unsplash-min.jpg" alt="">
						</div>
					<!-- </div> -->
					
				</div>
			</div>
			<div class="card__action">
				<!-- active fill="url(#linear-gradient)" -->
				<a href="#" class="love">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.915" height="12.902" viewBox="0 0 13.915 12.902">
						<defs>
							<linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#d70153"/>
								<stop offset="1" stop-color="#fe4545"/>
							</linearGradient>
						</defs>
						<path id="Path_89" data-name="Path 89" d="M-6897.567-5852.808a3.708,3.708,0,0,0-3.708-3.709,3.694,3.694,0,0,0-3.225,1.885,3.694,3.694,0,0,0-3.225-1.885,3.708,3.708,0,0,0-3.709,3.709s-.8,3.064,6.934,9.193C-6896.762-5849.744-6897.567-5852.808-6897.567-5852.808Z" transform="translate(6911.458 5856.517)" />
					</svg>
					<span class="number">164</span>
					<span class="label">Hearts</span>
					
				</a>
				<a  data-toggle="collapse" href="#!" class="comments">
					<svg xmlns="http://www.w3.org/2000/svg" width="13.604" height="15.246" viewBox="0 0 13.604 15.246">
						<path id="Path_90" data-name="Path 90" d="M-6793.061-5850.866c0,3.481-2.163,7.555-6.511,7.9l-.012-2.154c-3.365-.131-6.081-2.351-6.081-5.748a6.3,6.3,0,0,1,6.3-6.3A6.3,6.3,0,0,1-6793.061-5850.866Z" transform="translate(6806.165 5857.668)" fill="none"  stroke-miterlimit="10" stroke-width="1"/>
					</svg>
					<span class="label">Comment</span>

				</a>
				<a href="#" class="bookmark">
					<svg xmlns="http://www.w3.org/2000/svg" width="9.023" height="14.973" viewBox="0 0 9.023 14.973">
						<path id="Path_91" data-name="Path 91" d="M-6690.989-5842.579l-4.62-3.179-4.4,3.029v-14.823h9.023Zm-4.62-4.393,3.62,2.491v-12.071h-7.023v11.921Z" transform="translate(6700.012 5857.552)"/>
					</svg>

					<span class="label">Bookmark</span>
				</a>
				<a href="#" class="share">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.26" height="12.332" viewBox="0 0 10.26 12.332">
						<path id="Path_92" data-name="Path 92" d="M-6576.9-5846.836a1.453,1.453,0,0,0-.921.333l-4.962-2.786a1.459,1.459,0,0,0,.027-.262,1.454,1.454,0,0,0-.075-.44l5.1-3.562a1.463,1.463,0,0,0,.83.257,1.468,1.468,0,0,0,1.468-1.468,1.469,1.469,0,0,0-1.468-1.468,1.469,1.469,0,0,0-1.469,1.468,1.481,1.481,0,0,0,.061.4l-5.13,3.582a1.459,1.459,0,0,0-.786-.232,1.468,1.468,0,0,0-1.468,1.468,1.468,1.468,0,0,0,1.468,1.468,1.453,1.453,0,0,0,.934-.344l4.95,2.779a1.431,1.431,0,0,0-.029.28,1.469,1.469,0,0,0,1.469,1.468,1.468,1.468,0,0,0,1.468-1.468A1.468,1.468,0,0,0-6576.9-5846.836Z" transform="translate(6585.689 5856.232)" />
					</svg>

					<span class="label">Share</span>
				</a>
				<button >
					Unlock Post: $10
				</button>
			</div>
			<div class="card__comments collapse">
				<div class="profile--card comment--card">
					<a class="card__img">
						<img src="./gallery/ali-yahya-43cZUXtT3yc-unsplash-min.jpg" alt="">
					</a>
					<div class="card__body form-group">
						<input type="text" placeholder="Write a comment" class="form-control comment__text">
						<div class="card__link">
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"></path>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.164" height="13.164" viewBox="0 0 13.164 13.164">
									<g id="Group_153" data-name="Group 153" transform="translate(6461.747 5542.819)">
										<path id="Path_110" data-name="Path 110" d="M-6452.348-5542.819h-5.64a3.761,3.761,0,0,0-3.759,3.759v5.64a3.64,3.64,0,0,0,.571,1.974,3.209,3.209,0,0,0,.583.735,3.73,3.73,0,0,0,2.6,1.056h5.64a3.768,3.768,0,0,0,3.765-3.765v-5.64A3.763,3.763,0,0,0-6452.348-5542.819Zm2.994,9.072a3.323,3.323,0,0,1-3.321,3.321h-4.986a3.272,3.272,0,0,1-2.173-.826c-.073-.061-.14-.127-.207-.194a2.918,2.918,0,0,1-.431-.559,3.217,3.217,0,0,1-.5-1.742v-4.986a3.287,3.287,0,0,1,.759-2.107,2.874,2.874,0,0,1,.632-.583,3.258,3.258,0,0,1,1.924-.625h4.986a3.261,3.261,0,0,1,2.143.789,1.421,1.421,0,0,1,.2.182,1.464,1.464,0,0,1,.183.2,3.268,3.268,0,0,1,.795,2.143Z" fill="#f28f8f"/>
										<circle id="Ellipse_26" data-name="Ellipse 26" cx="3.058" cy="3.058" r="3.058" transform="translate(-6458.224 -5539.295)" fill="none" stroke="#f28f8f" stroke-miterlimit="10" stroke-width="0.75"/>
										<path id="Path_111" data-name="Path 111" d="M-6453.965-5535.037a1.7,1.7,0,0,1-2.4,0,1.7,1.7,0,0,1,0-2.4Z" fill="#f28f8f"/>
									</g>
								</svg>


							</a>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.679" height="21.68" viewBox="0 0 21.679 21.68">
									<g id="Group_41" data-name="Group 41" transform="translate(6439.991 6688.971)">
										<path id="Path_47" data-name="Path 47" d="M-6424.511-6688.971h-9.29a6.194,6.194,0,0,0-6.19,6.19v9.29a6,6,0,0,0,.94,3.25,5.294,5.294,0,0,0,.96,1.21,6.139,6.139,0,0,0,4.29,1.74h9.29a6.2,6.2,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6424.511-6688.971Zm4.929,14.94a5.469,5.469,0,0,1-5.469,5.469h-8.21a5.39,5.39,0,0,1-3.58-1.359c-.121-.1-.23-.21-.34-.32a4.771,4.771,0,0,1-.71-.92,5.291,5.291,0,0,1-.83-2.87v-8.21a5.413,5.413,0,0,1,1.25-3.471,4.736,4.736,0,0,1,1.04-.959,5.361,5.361,0,0,1,3.17-1.03h8.21a5.36,5.36,0,0,1,3.529,1.3,2.234,2.234,0,0,1,.33.3,2.476,2.476,0,0,1,.3.33,5.376,5.376,0,0,1,1.309,3.531Z" fill="#f28f8f"></path>
										<g id="Group_40" data-name="Group 40">
											<path id="Path_48" data-name="Path 48" d="M-6432.622-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.252,1.252,0,0,0,1.252-1.252A1.253,1.253,0,0,0-6432.622-6681.94Z" fill="#f28f8f"></path>
											<path id="Path_49" data-name="Path 49" d="M-6425.68-6681.94a1.253,1.253,0,0,0-1.253,1.253,1.252,1.252,0,0,0,1.253,1.252,1.251,1.251,0,0,0,1.252-1.252A1.252,1.252,0,0,0-6425.68-6681.94Z" fill="#f28f8f"></path>
										</g>
										<path id="Path_50" data-name="Path 50" d="M-6432.2-6675.277a3.044,3.044,0,0,0,3.045,3.043,3.044,3.044,0,0,0,3.044-3.043Z" fill="#f28f8f"></path>
									</g>
								</svg>
							</a>
						</div>
					</div>

				</div>
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/charles-etoroma-NPF8rG7pmAw-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Latifa Krox</h2>
						</a>

						<p class="para">I cannot deside which to choose. Arrrr..</p>
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
				<div class="card__top profile--card">

					<div class="card__top__body">
						<a href="#!" class="d-flex align-items-center">
							<div class="card__img">
								<img src="./gallery/sinval-carvalho-OF_lAQBbnEY-unsplash-min.jpg" alt="">
							</div>
							<h2 class="card__title ">Mark Menon</h2>
						</a>

						<p class="para">Well, I Liked the menu.</p>
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
			</div>
		</article>

	</section>

	<?php 
	include './template/modal--edit.php'
	?>

</main>
<?php 
include './template/right--aside.php'
?>


<?php
include 'footer.php';
?>

<!-- custom -->
<script type="text/javascript" src="./js/custom.js"></script>
<!-- <script type="text/javascript" src="./js/formEdit.js"></script> -->


</body>
</html>
