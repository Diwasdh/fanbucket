<div class="modal fade modal--post" id="post--modal"  data-keyboard="true" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header title__wrapper">
				<h2 class="section__title">New Post</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.73 13.73"><<g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="13.73 0.78 12.95 0 6.87 6.08 0.78 0 0 0.78 6.08 6.87 0 12.95 0.78 13.73 6.87 7.65 12.95 13.73 13.73 12.95 7.65 6.87 13.73 0.78"/></g></g></svg>	
				</button>
			</div>
			<div class="modal-body">

				<div class="progress">
					<div class="progress-bar " role="progressbar"  ></div>
				</div>

				<form action="#!" method="">
					<div class="form__wrapper">
						<div class="form-group">
							<textarea name="PostTitle" id="" class="form-control" id="modal--post__input" placeholder="Share to your fans" maxlength="200" ></textarea>
							<a href="#" class="emoji" title="emoji">
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

						

						<div class="modal--post__ph--upload">
							<div class="image empty--input hide">
								<label for="post__card__link__input"><i class="bi bi-plus"></i></label>
								<input type="file" accept="image/*,image/heif,image/heic,video/*,video/mp4,video/x-m4v,video/x-matroska,.mkv" multiple="" id="post__card__link__input" title="Add a new photo or video" name="new--image">
							</div>
						</div>

						<div class="poll__wrapper">
							<!-- poll with ratio -->
							<div class="poll--inside">
								<div class="custom-control">
									<input type="text" class="form-control result--box" placeholder="Option 1" name="pollwrapper" id="pollwrapper_0">
									<a class="count" href="#!" tabindex="-1"><i class="bi bi-x"></i></a>
								</div>
								<div class="custom-control">
									<input type="text" class="form-control result--box" placeholder="Option 2" name="pollwrapper" id="pollwrapper_1">
									<a class="count" href="#!" tabindex="-1"><i class="bi bi-x"></i></a>
								</div>
							</div>
							<input type="number" value="1" id="poll--inside--count" max="9" min="0">

							<div class="poll--buttom">
								<button type="button" class="poll--add">add option</button>
								<div class="d-flex">

									<div class="form-group select--input--wrapper">
										<div class="select-wrapper">
											<select class="form-control select__dynamic" id="poll--deadline" >
												<option selected="">Until I trun off</option>
												<option value="1">24 Hrs</option>
												<option value="2">3 days</option>
												<option value="2">1 week</option>
											</select>
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
												<path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
											</svg>
										</div>
									</div>
									<button class="poll--trash" type="button"><i class="bi bi-trash"></i></button>
								</div>
							</div>
						</div>

						<div class="text-muted para small" id="post--date--value">
							<a id="reset" href="#!" class="hide active"> Reset </a>
						</div>
						<hr>
						<div class="card__link">
							<div class="form-group select--input--wrapper">
								<div class="select-wrapper">
									<select class="form-control public--or--paid" id="public--or--paid">
										<option selected>Public</option>
										<option value="1">Paid</option>
									</select>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
										<path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
									</svg>
								</div>
								<div class="input--wrapper hide">
									<label for="input__paid">$</label>
									<input type="number" class="form-control" placeholder="0.00" id="input__paid">
								</div>

							</div>

							<a href="#" class="pr">
								<svg xmlns="http://www.w3.org/2000/svg" width="21.68" height="21.68" viewBox="0 0 21.68 21.68">
									<g id="Group_34" data-name="Group 34" transform="translate(6522.683 6688.971)">
										<path id="Path_41" data-name="Path 41" d="M-6507.2-6688.971h-9.29a6.2,6.2,0,0,0-6.19,6.19v9.29a6.06,6.06,0,0,0,.94,3.259,5.509,5.509,0,0,0,.96,1.2,6.144,6.144,0,0,0,4.29,1.74h9.29a6.205,6.205,0,0,0,6.2-6.2v-9.29A6.2,6.2,0,0,0-6507.2-6688.971Zm-9.29,20.18a4.686,4.686,0,0,1-3.38-1.441l4.5-5.939,2.76,4.01-2.14,3.37Zm12.46-1.231a4.684,4.684,0,0,1-3.17,1.231h-5.77l6.13-9.66,4.32,5.42A4.669,4.669,0,0,1-6504.033-6670.022Zm1.53-5.389-4.48-5.62-4.75,7.48-3.59-5.181-5.43,7.191a4.589,4.589,0,0,1-.43-1.95v-9.29a4.69,4.69,0,0,1,4.69-4.69h9.29a4.7,4.7,0,0,1,4.7,4.69Z" fill="#f28f8f"/>
										<path id="Path_42" data-name="Path 42" d="M-6510.4-6683.7a1.016,1.016,0,0,0-1.016,1.016,1.015,1.015,0,0,0,1.016,1.015,1.014,1.014,0,0,0,1.015-1.015A1.014,1.014,0,0,0-6510.4-6683.7Z" fill="#f28f8f"/>
									</g>
								</svg>

								<label class="user--gesture__blocked upload--photo--label" for="post__card__link__input"></label>
							</a>

							<a href="#" type="button" class="poll--trash" data-toggle="tooltip" data-placement="top" title="Poll">
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

							<a href="#" type="button">
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

							<button type="submit">
								Post
							</button>

							<a href="#" type="button" class="non-active shedule--link">
								<label for="post--date">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.43 17.41"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M11.73,1h-7A4.7,4.7,0,0,0,0,5.67v7a4.63,4.63,0,0,0,.71,2.47,4,4,0,0,0,.73.91,4.64,4.64,0,0,0,3.25,1.32h7a4.7,4.7,0,0,0,4.7-4.7v-7A4.69,4.69,0,0,0,11.73,1ZM15.47,12.3a4.15,4.15,0,0,1-4.15,4.15H5.1a4.11,4.11,0,0,1-2.71-1l-.26-.24a4,4,0,0,1-.54-.7A4,4,0,0,1,1,12.3V6.08a4.11,4.11,0,0,1,1-2.63,3.65,3.65,0,0,1,.79-.73,4.07,4.07,0,0,1,2.4-.78h6.22a4.08,4.08,0,0,1,2.68,1,1.71,1.71,0,0,1,.25.22,2.73,2.73,0,0,1,.23.25,4.1,4.1,0,0,1,1,2.68Z"/><path class="cls-1" d="M6.75,6.12H5.32a1,1,0,0,0-1,1V8.51a.92.92,0,0,0,.15.5.9.9,0,0,0,.15.19.92.92,0,0,0,.66.27H6.75a1,1,0,0,0,1-1V7.08A1,1,0,0,0,6.75,6.12Z"/><path class="cls-1" d="M11.11,6.12H9.68a1,1,0,0,0-1,1V8.51a.92.92,0,0,0,.15.5A.9.9,0,0,0,9,9.2a.92.92,0,0,0,.66.27h1.43a1,1,0,0,0,1-1V7.08A1,1,0,0,0,11.11,6.12Z"/><path class="cls-1" d="M11.11,10.44H9.68a1,1,0,0,0-1,1v1.44a1,1,0,0,0,.15.5.9.9,0,0,0,.15.19,1,1,0,0,0,.66.27h1.43a1,1,0,0,0,1-1V11.39A1,1,0,0,0,11.11,10.44Z"/><path class="cls-1" d="M6.75,10.44H5.32a1,1,0,0,0-1,1v1.44a1,1,0,0,0,.15.5.9.9,0,0,0,.15.19,1,1,0,0,0,.66.27H6.75a1,1,0,0,0,1-1V11.39A1,1,0,0,0,6.75,10.44Z"/><rect class="cls-1" x="10.03" width="1.48" height="3.1" rx="0.74"/><rect class="cls-1" x="4.92" width="1.48" height="3.1" rx="0.74"/></g></g></svg>
								</label>


								<input type="text" class="datetime-field tail-datetime-field user--gesture__blocked" data-tail-datetime="tail-11" title="shedule-date">

							</a>
						</div>
					</div>
				</form>
				<div class="form-upolading loader__wrapper">
					<div class="loader">
						<div class="box">
							<img src="./gallery/logoWhite.png" alt="fanbucket">
						</div>
						<div class="shadow"></div>
					</div>
					<h2 class="section__title">Creating a Post ...</h2>
				</div>
			</div>
		</div>
	</div>
</div>