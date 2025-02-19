<?= $this->include('_layouts/_header') ?>


<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
    <?= $this->include('_layouts/_navbar') ?>
	<!-- [ navigation menu ] end -->

	

	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		
			<div class="m-header">
				<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
				<a href="index.html" class="b-brand">

					<img src="<?= base_url('_template/assets'); ?>/images/logo.svg" alt="" class="logo images">
					<img src="<?= base_url('_template/assets'); ?>/images/logo-icon.svg" alt="" class="logo-thumb images">
				</a>
			</div>
			<a class="mobile-menu" id="mobile-header" href="#!">
				<i class="feather icon-more-horizontal"></i>
			</a>
			<div class="collapse navbar-collapse">
				<a href="#!" class="mob-toggler"></a>
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<div class="main-search open">
							<div class="input-group">
								<input type="text" id="m-search" class="form-control" placeholder="Search . . .">
								<a href="#!" class="input-group-append search-close">
									<i class="feather icon-x input-group-text"></i>
								</a>
								<span class="ms-1 input-group-append search-btn btn btn-primary">
									<i class="feather icon-search input-group-text"></i>
								</span>
							</div>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
									class="icon feather icon-bell"></i></a>
							<div class="dropdown-menu dropdown-menu-end notification">
								<div class="noti-head">
									<h6 class="d-inline-block m-b-0">Notifications</h6>
									<div class="float-end">
										<a href="#!" class="m-r-10">mark as read</a>
										<a href="#!">clear all</a>
									</div>
								</div>
								<ul class="noti-body">
									<li class="n-title">
										<p class="m-b-0">NEW</p>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg"
												alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>John Doe</strong><span class="n-time text-muted"><i
															class="icon feather icon-clock m-r-10"></i>5 min</span></p>
												<p>New ticket Added</p>
											</div>
										</div>
									</li>
									<li class="n-title">
										<p class="m-b-0">EARLIER</p>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg"
												alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Joseph William</strong><span class="n-time text-muted"><i
															class="icon feather icon-clock m-r-10"></i>10 min</span></p>
												<p>Prchace New Theme and make payment</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/assets'); ?>/images/user/avatar-3.jpg"
												alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
															class="icon feather icon-clock m-r-10"></i>12 min</span></p>
												<p>currently login</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg"
												alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Joseph William</strong><span class="n-time text-muted"><i
															class="icon feather icon-clock m-r-10"></i>30 min</span></p>
												<p>Prchace New Theme and make payment</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/assets'); ?>/images/user/avatar-3.jpg"
												alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
															class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
												<p>currently login</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg"
												alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Joseph William</strong><span class="n-time text-muted"><i
															class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
												<p>Prchace New Theme and make payment</p>
											</div>
										</div>
									</li>
								</ul>
								<div class="noti-footer">
									<a href="#!">show all</a>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
					<li>
						<div class="dropdown drp-user">
							<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
								<i class="icon feather icon-settings"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end profile-notification">
								<div class="pro-head">
									<img src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" class="img-radius"
										alt="User-Profile-Image">
									<span>
										<span class="text-muted">Free Trial</span>
										<span class="h6">doe@company.com</span>
									</span>
								</div>
								<ul class="pro-body">
									<li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
											Settings</a></li>
									<li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a>
									</li>
									<li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i>
											My Messages</a></li>
									<li><a href="auth-signin.html" class="dropdown-item"><i
												class="feather icon-lock"></i> Lock Screen</a></li>
									<li><a href="#!" class="dropdown-item"><i
												class="feather icon-power text-danger"></i> Logout</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
	</header>
	<!-- [ Header ] end -->
	

	<!-- [ chat user list ] start -->
	<section class="header-user-list">
		<a href="#!" class="h-close-text"><i class="feather icon-x"></i></a>
		<ul class="nav nav-tabs" id="chatTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active text-uppercase" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab"
					aria-controls="chat" aria-selected="true"><i class="feather icon-message-circle me-2"></i>Chat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-uppercase" id="user-tab" data-bs-toggle="tab" href="#user" role="tab"
					aria-controls="user" aria-selected="false"><i class="feather icon-users me-2"></i>User</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-uppercase" id="setting-tab" data-bs-toggle="tab" href="#setting" role="tab"
					aria-controls="setting" aria-selected="false"><i class="feather icon-settings me-2"></i>Setting</a>
			</li>
		</ul>
		<div class="tab-content" id="chatTabContent">
			<div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
				<div class="h-list-header">
					<div class="input-group">
						<input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
					</div>
				</div>
				<div class="h-list-body">
					<div class="main-friend-cont scroll-div">
						<div class="main-friend-list">
							<div class="d-flex userlist-box" data-id="1" data-status="online"
								data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" alt="Profile Image ">
									<div class="live-status">3</div>
								</a>
								<div class="flex-grow-1">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
										</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg" alt="Profile Image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-3.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" alt="Profile Image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-4.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online"
								data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" alt="Profile Image ">
									<div class="live-status">3</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
										</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg" alt="Profile Image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-3.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" alt="Profile Image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-4.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online"
								data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" alt="Profile Image ">
									<div class="live-status">3</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . .
										</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg" alt="Profile Image">
									<div class="live-status">1</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small>
									</h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-3.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
				<div class="h-list-body">
					<div class="main-friend-cont scroll-div">
						<div class="main-friend-list">
							<div class="media px-3 d-flex align-items-center mt-3">
								<a class="media-left m-r-15" href="#!">
									<div
										class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
										<i class="icon feather icon-users"></i>
									</div>
								</a>
								<div class="media-body">
									<p class="chat-header f-w-600 mb-0">New Group</p>
								</div>
							</div>
							<div class="media p-3 d-flex align-items-center">
								<a class="media-left m-r-15" href="#!">
									<div
										class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
										<i class="icon feather icon-user-plus"></i>
									</div>
								</a>
								<div class="media-body">
									<p class="chat-header f-w-600 mb-0">New Contact</p>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online"
								data-username="Josephin Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg" alt="Profile Image "></a>
								<div class="media-body">
									<p class="chat-header">Josephin Doe<small class="d-block">i am not what happened .
											.</small></p>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block">Avalable</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-3.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Alice<small class="d-block">hear using Dasho</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
								<a class="media-left" href="#!">
									<div
										class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center">
										A</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Alia<small class="d-block text-muted">Avalable</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-4.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Suzen<small class="d-block text-muted">Avalable</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="1" data-status="online"
								data-username="Josephin Doe">
								<a class="media-left" href="#!">
									<div
										class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center">
										JD</div>
								</a>
								<div class="media-body">
									<h6 class="chat-header">Josephin Doe<small class="d-block text-muted">Don't send me
											image</small></h6>
								</div>
							</div>
							<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
								<a class="media-left" href="#!"><img class="media-object img-radius"
										src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg" alt="Profile Image"></a>
								<div class="media-body">
									<h6 class="chat-header">Lary Doe<small class="d-block text-muted">not send free
											msg</small></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
				<div class="p-4 main-friend-cont scroll-div">
					<h6 class="mt-2"><i class="feather icon-monitor me-2"></i>Desktop settings</h6>
					<hr>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-1" checked>
							<label for="cn-p-1" class="cr switch-alignment"></label>
						</div>
						<label class="f-w-600">Allow desktop notification</label>
					</div>
					<p class="text-muted ms-5">You get latest content at a time when data will updated</p>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-5">
							<label for="cn-p-5" class="cr switch-alignment"></label>
						</div>
						<label class="f-w-600">Store Cookie</label>
					</div>
					<h6 class="mb-0 mt-5"><i class="feather icon-layout me-2"></i>Application settings</h6>
					<hr>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-3" checked>
							<label for="cn-p-3" class="cr switch-alignment"></label>
						</div>
						<label class="f-w-600">Backup Storage</label>
					</div>
					<p class="text-muted mb-0 ms-5">Automaticaly take backup as par schedule</p>
					<div class="form-group mb-4">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-4" checked>
							<label for="cn-p-4" class="cr switch-alignment"></label>
						</div>
						<label class="f-w-600">Allow guest to print file</label>
					</div>
					<h6 class="mb-0 mt-5"><i class="feather icon-globe me-2"></i>System settings</h6>
					<hr>
					<div class="form-group mb-0">
						<div class="switch switch-primary d-inline m-r-10">
							<input type="checkbox" id="cn-p-2">
							<label for="cn-p-2" class="cr switch-alignment"></label>
						</div>
						<label class="f-w-600">View other user chat</label>
					</div>
					<p class="text-muted ms-5">Allow to show public user message</p>
				</div>
			</div>
		</div>
	</section>
	<!-- [ chat user list ] end -->

	<!-- [ chat message ] start -->
	<section class="header-chat">
		<div class="h-list-header">
			<h6>Josephin Doe</h6>
			<a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
		</div>
		<div class="h-list-body">
			<div class="main-chat-cont scroll-div">
				<div class="main-friend-chat">
					<div class="d-flex chat-messages">
						<a class="media-left photo-table" href="#!"><img
								class="media-object img-radius img-radius m-t-5" src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg"
								alt="Profile Image"></a>
						<div class="flex-grow-1 chat-menu-content">
							<div class="">
								<p class="chat-cont">hello tell me something</p>
								<p class="chat-cont">about yourself?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
					<div class="d-flex chat-messages">
						<div class="flex-grow-1 chat-menu-reply">
							<div class="">
								<p class="chat-cont">Ohh! very nice</p>
							</div>
							<p class="chat-time">8:22 a.m.</p>
						</div>
						<a class="media-right photo-table" href="#!"><img
								class="media-object img-radius img-radius m-t-5" src="<?= base_url('_template/assets'); ?>/images/user/avatar-1.jpg"
								alt="Profile Image"></a>
					</div>
					<div class="d-flex chat-messages">
						<a class="media-left photo-table" href="#!"><img
								class="media-object img-radius img-radius m-t-5" src="<?= base_url('_template/assets'); ?>/images/user/avatar-2.jpg"
								alt="Profile Image"></a>
						<div class="flex-grow-1 chat-menu-content">
							<div class="">
								<p class="chat-cont">can you help me?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="h-list-footer">
			<div class="input-group">
				<input type="file" class="chat-attach" style="display:none">
				<a href="#!" class="input-group-prepend btn btn-success btn-attach">
					<i class="feather icon-paperclip"></i>
				</a>
				<input type="text" name="h-chat-text" class="form-control h-send-chat" placeholder="Write hear . . ">
				<button type="submit" class="input-group-append btn-send btn btn-primary">
					<i class="feather icon-message-circle"></i>
				</button>
			</div>
		</div>
	</section>
	<!-- [ chat message ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Sample Page</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ sample-page ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Hello card</h5>
                                        <div class="card-header-right">
                                            <div class="btn-group card-option">
                                                <button type="button" class="btn dropdown-toggle btn-icon"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="feather icon-more-horizontal"></i>
                                                </button>
                                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                                    <li class="dropdown-item full-card"><a href="#!"><span><i
                                                                    class="feather icon-maximize"></i>
                                                                maximize</span><span style="display:none"><i
                                                                    class="feather icon-minimize"></i>
                                                                Restore</span></a></li>
                                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                                    class="feather icon-minus"></i> collapse</span><span
                                                                style="display:none"><i class="feather icon-plus"></i>
                                                                expand</span></a></li>
                                                    <li class="dropdown-item reload-card"><a href="#!"><i
                                                                class="feather icon-refresh-cw"></i> reload</a></li>
                                                    <li class="dropdown-item close-card"><a href="#!"><i
                                                                class="feather icon-trash"></i> remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui
                                            officia deserunt mollit anim id est laborum."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- [ sample-page ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<?= $this->include('_layouts/_footer') ?>


