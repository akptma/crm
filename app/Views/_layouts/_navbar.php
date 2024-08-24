<!-- sidebar -->
<nav class="pcoded-navbar menupos-fixed menu-dark menu-item-icon-style6 ">
		<div
			class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="index.html" class="b-brand">

					<img src="<?= base_url('_template/assets'); ?>/images/logo.svg" alt="logo" class="logo images">
					<img src="<?= base_url('_template/assets'); ?>/images/logo-icon.svg" alt="logo" class="logo-thumb images">
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div" id="layout-sidenav" >
				<ul class="nav pcoded-inner-navbar sidenav-inner">
					<?php 
						helper('url');
						$uri = uri_string(0);
						$this->db = \Config\Database::connect();
						$this->session = \Config\Services::session();
						$accessMenu = $this->db->table('roles_permission')->where('user_id',$this->session->get('id'))->orderBy('parent_iteration','ASC')->get()->getResult();
					;?>

					<?php 
						$parentMenu = null;
						foreach ($accessMenu as $am) : 
							$menu = $this->db->table('menu')->where('id',$am->parent_menu)->orderBy('iteration')->get()->getFirstRow();
							
							$subMenu = $this->db->table('sub_menu')->where('parent_id', $am->parent_menu)->orderBy('iteration')->get()->getResult();
							if ($parentMenu !== $am->parent_menu) :
								$parentMenu = $am->parent_menu;
					?>
							<li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
								class="nav-item pcoded-hasmenu active pcoded-trigger">

								<a href="#!" class="nav-link"><span class="pcoded-micon"><?= $menu->icons;?></span><span
										class="pcoded-mtext"><?= $menu->name;?></span></a>

									<ul class="pcoded-submenu" style="display: none;">
										<?php foreach ($subMenu as $sm) :?>
											<?php 
												$subSubMenu = $this->db->table('sub_sub_menu')->where('parent_sub_id',$sm->id)->orderBy('iteration')->get()->getResult();	
												if (count($subSubMenu) > 0) :
											?>
												<li class="pcoded-hasmenu"><a href="#!" class=""><?= $sm->name?></a>
													<ul class="pcoded-submenu">
														<?php foreach ($subSubMenu as $key => $ssm) :?>
															<li id="sub1" class=""><a href="<?= $ssm->routes;?>"><?= $ssm->name?></a></li>
														<?php endforeach;?>
													</ul>
												</li>
											<?php else :?>
												<li  class=""><a href="<?= $sm->routes;?>"><?= $sm->name?></a></li>
										<?php endif; endforeach;?>
										
									</ul>

							</li>
					<?php endif; endforeach;?>
	
					<li class="nav-item pcoded-menu-caption">
						<label>Support</label>
					</li>
					<li data-username="documentation" class="nav-item"><a href="../doc/index.html" class="nav-link" target="_blank"><span
								class="pcoded-micon"><i class="feather icon-book"></i></span><span
								class="pcoded-mtext">Documentation</span></a></li>
					<li data-username="need support" class="nav-item"><a href="#" class="nav-link" target="_blank"><span
								class="pcoded-micon"><i class="feather icon-help-circle"></i></span><span class="pcoded-mtext">Need support
								?</span></a></li>
				</ul>
				
				
				
			</div>
			
		</div>
</nav>
<!-- end sidebar -->


<!-- header profile -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		
			<div class="m-header">
				<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
				<a href="index.html" class="b-brand">

					<img src="<?= base_url('_template/')?>assets/images/logo.svg" alt="" class="logo images">
					<img src="<?= base_url('_template/')?>assets/images/logo-icon.svg" alt="" class="logo-thumb images">
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
							<a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon feather icon-bell"></i></a>
							<div class="dropdown-menu dropdown-menu-end notification">
								<div class="noti-head">
									<h6 class="d-inline-block m-b-0">Notifications</h6>
									<div class="float-end">
										<a href="#!" class="m-r-10">mark as read</a>
										<a href="#!">clear all</a>
									</div>
								</div>
								<ul class="noti-body ps">
									<li class="n-title">
										<p class="m-b-0">NEW</p>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/')?>assets/images/user/avatar-1.jpg" alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
												<p>New ticket Added</p>
											</div>
										</div>
									</li>
									<li class="n-title">
										<p class="m-b-0">EARLIER</p>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/')?>assets/images/user/avatar-2.jpg" alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
												<p>Prchace New Theme and make payment</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/')?>assets/images/user/avatar-3.jpg" alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
												<p>currently login</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/')?>assets/images/user/avatar-1.jpg" alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
												<p>Prchace New Theme and make payment</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/')?>assets/images/user/avatar-3.jpg" alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
												<p>currently login</p>
											</div>
										</div>
									</li>
									<li class="notification">
										<div class="d-flex">
											<img class="img-radius" src="<?= base_url('_template/')?>assets/images/user/avatar-1.jpg" alt="Profile Image">
											<div class="flex-grow-1">
												<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
												<p>Prchace New Theme and make payment</p>
											</div>
										</div>
									</li>
								<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
								<div class="noti-footer">
									<a href="#!">show all</a>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
					<li>
						<div class="dropdown drp-user">
							<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="icon feather icon-settings"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end profile-notification">
								<div class="pro-head">
									<img src="<?= base_url('_template/')?>assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
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
									<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									<li><a href="<?= base_url('logout')?>" class="dropdown-item"><i class="feather icon-power text-danger"></i> Logout</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
	</header>
	<body class="auth-prod-slider">
	<section class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							

							
<!-- end header profile -->

	