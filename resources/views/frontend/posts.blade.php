<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Posts</title>

		<link rel="stylesheet" href="css/bootstrap4.3.1-rtl.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
		<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>

	
		<!-- End Section Header -->

		<!-- Start Section Search Form -->
		<div class="search-form">
			<form>
				<div>
					<span class="close-search-form"><i class="fa fa-times fa-3x"></i></span>
					<input type="text" class="form-control" placeholder="بــحــث..." />
					<br />
					<button class="btn btn-custom">بــحــث</button>
				</div>
			</form>
		</div>
		<!-- End Section Search Form -->

		<!-- Start Section Nav -->
		<div class="nav">
			<div class="container">
				<div class="row">
					<div class="col">
						<nav class="navbar navbar-expand-lg navbar-light ">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-brand d-lg-none show-search" href="#">بــحــث <i class="fa fa-search"></i></a>
							<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
								<div class="navbar-nav">
									<a class="nav-item nav-link" href="/">الرئيسية</a>
									<a class="nav-item nav-link active" href="/posts">شروحات</a>
									{{-- <a class="nav-item nav-link" href="posts">روايات</a> --}}
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											قائمة منسدلة
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="/posts">نص مستبدل</a>
											<a class="dropdown-item" href="/posts">أخبار</a>
											<a class="dropdown-item" href="/posts">مقالات</a>
										</div>
									</li>
									<a class="nav-item nav-link" href="/single">تفاصيل المقال</a>
									<a class="nav-item nav-link" href="/page">صفحة تجريبية</a>
									<a class="nav-item nav-link" href="/privacy">سياسة الخصوصية</a>
									<a class="nav-item nav-link" href="/contact">إتصل بنا</a>
								</div>
								<div class="navbar-nav mr-auto">
									<a class="nav-item nav-link" href="#" title="facebook"><i class="fab fa-fw fa-facebook-square"></i> </a>
									<a class="nav-item nav-link" href="#" title="twitter"><i class="fab fa-fw fa-twitter-square"></i> </a>
									<a class="nav-item nav-link" href="#" title="linkedin"><i class="fab fa-fw fa-linkedin"></i> </a>
									<a class="nav-item nav-link" href="#" title="youtube"><i class="fab fa-fw fa-youtube"></i></a>
									<span class="nav-item nav-link show-search">بــحــث <i class="fa fa-search"></i></span>
								</div>
							</div>
						</nav>
					</div><!-- End Col -->
				</div><!-- End row -->
			</div><!-- End container -->
		</div><!-- End nav -->
		<!-- End Section Nav -->

		

		
		<br>
			<!-- Start Section Header -->
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h2 class="logo">
								{{-- <a href="#">Logo</a> --}}
								<img src="img/logo1.png" width="50%" />
							</h2>
						</div>
						<div class="col-md-9">
							<div class="ads">
							<img src="img/ads1.png" width="80%" />
							</div>
						</div>
					</div><!-- End Row -->
				</div>
			</header>
		<br>

		<div class="top-section" data-aos="fade-up" data-aos-duration="800">
			<div class="container">
				<h1 class="title text-center">إسم القسم</h1>

				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page"> إسم القسم</li>
				</ol>
				
			</div>
		</div>
		<!-- Strat Section Articles -->
		<div class="container">
			<div class="articles">

				<h4 class="section-title">إسم القسم</h4>

				<div class="row">
					
					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2019/09/15/10/27/the-color-run-4477874_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#dc3545">أخبار</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2019/09/17/18/13/mountain-4484233_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#ffc107">شروحات</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2019/09/16/06/26/fog-4479936_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#ff6347">نص مستبدل</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2019/09/16/06/26/fog-4479936_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#080">روايات</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2019/09/19/07/26/extreme-4488462_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#6f42c1">أخبار تقنية</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2017/07/31/11/31/laptop-2557468_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#6f42c1">أخبار تقنية</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#17a2b8">قصص</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2018/10/02/11/13/girl-3718537_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#080">روايات</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					<div class="col-lg-4 col-md-6">
						<article data-aos="zoom-in" data-aos-duration="1000">
							<div class="se-top text-center">
								<div class="overlay"></div>
								<a href="#">
									<img src="https://cdn.pixabay.com/photo/2017/12/10/20/05/book-3010727_960_720.jpg" />
								</a>
								<a href="#" class="cat" data-color="#080">روايات</a>
							</div>

							<div class="row">
								<div class="col-6">
									<i class="far fa-fw fa-user post-owner"></i>
									<a href="#">المدير</a>
								</div>
								<div class="col-6">
									<i class="far fa-fw fa-clock post-date"></i>
									<span>20-09-2019</span>
								</div>
							</div>

							<div class="post-footer">
								<h5 class="title">
									<a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a>
								</h5>
							</div>
							
						</article>
					</div>

					
					<div class="col text-center">
						<br />
						<ul class="pagination text-center">
							<li class="page-item"><a class="page-link" href="#">السابق</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">التالى</a></li>
						</ul>
					</div>
					

				</div><!-- End Row -->
			</div><!-- End Container -->
		</div><!-- End Articles -->
		<!-- End Section Articles -->


		<!-- Start Section Categories -->
		<div class="container">
			<div class="categories text-center">
				<h4 class="title">التصنيفات</h4>

				<br />
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#f50"><i class="fa fa-tags"></i> روايات 854</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#17a1b8"><i class="fa fa-tags"></i> قصص 32</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#6f42c1"><i class="fa fa-tags"></i> أخبار تقنية 455</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#007bff"><i class="fa fa-tags"></i> شروحات 77</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#ff6347"><i class="fa fa-tags"></i> نص مستبدل 989</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#f50"><i class="fa fa-tags"></i> روايات 44</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#17a1b8"><i class="fa fa-tags"></i> قصص 344</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#6f42c1"><i class="fa fa-tags"></i> أخبار تقنية 234</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#ffc105"><i class="fa fa-tags"></i> شروحات 90</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#28a745"><i class="fa fa-tags"></i> نص مستبدل 112</a>
				<a href="#" class="cat" data-aos="zoom-in" data-aos-duration="1000" data-color="#007bff"><i class="fa fa-tags"></i> معلومات دينية 232</a>

			</div>
		</div>
		<!-- End Section Categories -->


		<!-- Start Section Footer -->
		<footer>
			<div class="container">
				<div class="row">
					
					<div class="col-md-4">
						<p>جميع الحقوق محفوظة لــ <a href="#">إسم الموقع</a> &copy; 2019</p>
					</div>
					<div class="col-md-4 text-center social">
						<a href="#" title="facebook"><i class="fab fa-fw fa-facebook-square"></i> </a>
						<a href="#" title="twitter"><i class="fab fa-fw fa-twitter-square"></i> </a>
						<a href="#" title="linkedin"><i class="fab fa-fw fa-linkedin"></i> </a>
						<a href="#" title="youtube"><i class="fab fa-fw fa-youtube"></i></a>
					</div>
					<!-- <div class="col-md-4">
							<p class="dev text-left">تصميم وتطوير: <a href="https://facebook.com/alnefelys" title="خليك تكنولوجى" target="_blank">Abdo Mohamed</a></p>
						</div> -->

				</div>
			</div>
		</footer>
		<!-- End Section Footer -->


		

		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>