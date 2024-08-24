<?php helper('form'); ?>
<?= $this->include('_layouts/_header') ;?>
	<div class="blur-bg-images"></div>
	<div class="auth-wrapper">
		<div class="auth-content container">
			<div class="card">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="card-body">
						
                            <?= form_open('login') ;?>
                                <img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
                                <h4 class="mb-3 f-w-400">Login into your account</h4>
								<?php if (session()->get('message')) :?>
									<div class="alert alert-warning" role="alert">
										<?= session()->get('message');?>
									</div>
								<?php endif;?>
                                <div class="form-group mb-2">
                                    <?= form_label('Enter Email','for-email',['class' => 'form-label']);?>
                                    <?= form_input(['type'=> 'email', 'class' => 'form-control', 'name' => 'email', 'placeholder' => 'name@sitename.com']) ;?>
                                </div>
                                <div class="form-group mb-3">
                                    <?= form_label('Enter Password','for-password', ['class' => 'form-label']);?>
                                    <?= form_input(['type'=> 'password', 'class' => 'form-control', 'name' => 'password', 'placeholder' => 'Allow only max 14 character']) ;?>
                                </div>
                                <div class="form-group text-start mt-2">
                                    <div class="checkbox checkbox-primary d-inline">
                                        <?= form_checkbox(['type'=>'checkbox', 'name'=>'for-remember', 'id'=>'for-remember' ,'value' => 'true','checked' => '']);?>
                                        <?= form_label('Remember Me', 'for-remember', ['class' => 'cr']);?>
                                    </div>
                                </div>
                                <?= form_submit(['value' => 'Login', 'class' => 'btn btn-primary mb-4']);?>
                            <?= form_close();?>
						</div>
					</div>
					<div class="col-md-6 d-none d-md-block">
						<div id="carouselExampleCaptions" class="carousel slide auth-slider" data-bs-ride="carousel">

							<ol class="carousel-indicators">
								<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
								<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
								<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
								<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="auth-prod-slidebg bg-1"></div>
									<div class="carousel-caption d-none d-md-block">
										<img src="assets/images/product/prod-1.jpg" alt="product images"
											class="img-fluid mb-5">
										<h5>First slide label</h5>
										<p class="mb-5">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="auth-prod-slidebg bg-2"></div>
									<div class="carousel-caption d-none d-md-block">
										<img src="assets/images/product/prod-2.jpg" alt="product images"
											class="img-fluid mb-5">
										<h5>Second slide label</h5>
										<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="auth-prod-slidebg bg-3"></div>
									<div class="carousel-caption d-none d-md-block">
										<img src="assets/images/product/prod-1.jpg" alt="product images"
											class="img-fluid mb-5">
										<h5>Third slide label</h5>
										<p class="mb-5">Praesent commodo cursus magna, vel scelerisque nisl consectetur.
										</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="auth-prod-slidebg bg-4"></div>
									<div class="carousel-caption d-none d-md-block">
										<img src="assets/images/product/prod-2.jpg" alt="product images"
											class="img-fluid mb-5">
										<h5>Forth slide label</h5>
										<p class="mb-5">Praesent commodo cursus magna, vel scelerisque nisl consectetur.
										</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
								data-bs-slide="prev"><span class="carousel-control-prev-icon"
									aria-hidden="true"></span></a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
								data-bs-slide="next"><span class="carousel-control-next-icon"
									aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ signin-img-slider2 ] end -->


<?= $this->include('_layouts/_footer') ;?>