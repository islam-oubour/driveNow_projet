<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version  1.1.1
* @link  https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>GD - Gestion des diplomes.</title>
	<link href="<?php echo e(asset('/assets/tabler.css')); ?>" rel="stylesheet" />



	<!-- BEGIN CUSTOM FONT -->
	<style>
		@import  url('https://rsms.me/inter/inter.css');
	</style>
	<!-- END CUSTOM FONT -->
</head>


<body>
	<div class="page">
		<?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<header class="navbar-expand-md">
			<div class="collapse navbar-collapse" id="navbar-menu">
				<div class="navbar">
					<div class="container-xl">
						<div class="row flex-column flex-md-row flex-fill align-items-center">
							<div class="col">
								<!-- BEGIN NAVBAR MENU -->
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="<?php echo e(route('home')); ?>">
											<span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
													<path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
													<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
													<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
												</svg></span>
											<span class="nav-link-title"> Home </span>
										</a>
									</li>
								</ul>
								<!-- END NAVBAR MENU -->
							</div>
							<div class="col col-md-auto">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSettings">

											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
													<path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
													<path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
												</svg>
											</span>
											<span class="nav-link-title"> Settings </span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="page-wrapper">
			<div class="page-header d-print-none">
				<div class="container-xl">
					<div class="row g-2 align-items-center">
						<div class="col">
							<!-- Page pre-title -->
							<div class="page-pretitle">
								Général
							</div>
							<h2 class="page-title">
								Accueil
							</h2>
						</div>
						<!-- Page title actions -->
						<div class="col-auto ms-auto d-print-none">
							<div class="btn-list">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#exampleModal">
									Ajouter une liste
								</button>

								<!-- Modal -->
								<form action="<?php echo e(route('list.add')); ?>" method="post" enctype="multipart/form-data">
									<?php echo csrf_field(); ?>
									<div class="modal fade" id="exampleModal" tabindex="-1"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une liste
													</h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<input type="file" name="liste" id="" class="form-control" required>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Annuler</button>
													<button type="submit" class="btn btn-primary">Ajouter</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>

					</div>
				</div>
			</div>

			<!-- END PAGE HEADER -->

			<!-- BEGIN PAGE BODY -->
			<div class="page-body">


				<div class="container-xl">
					<div class="card">
						<div class="card-header">
							Verification
						</div><!-- End of .card-header -->
						<div class="card-body">
							<form action="<?php echo e(route('search')); ?>" method="get">
								<div class="hstack gap-3">
									<input type="text" name="CNE" class="form-control">
									<input type="submit" value="search" class="btn btn-primary">
								</div><!-- End of .v-stack -->
							</form>
						</div><!-- End of .card-body -->
					</div><!-- End of .card -->

				</div>



			</div>
			<!-- END PAGE BODY -->

			<!--  BEGIN FOOTER  -->
			<footer class="footer footer-transparent d-print-none">
				<div class="container-xl">
				</div>
			</footer>
			<!--  END FOOTER  -->

		</div>
	</div>
	<script src="<?php echo e(asset('/assets/tabler.js')); ?>" defer></script>
</body>

</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/home.blade.php ENDPATH**/ ?>