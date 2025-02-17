@extends('layouts.main')

@section('title')
<title>Home Page</title>
@endsection

@push('css')
{{-- Call js--}}
@endpush

@section('content')
<div id="main-content" class="bg-type-color">
	<div id="main-home-content" class="home-content home-page container" role="main">
		<div id="pl-22" class="panel-layout">
			<div id="pg-22-0" class="panel-grid panel-has-style">
				<div class="home4-slider siteorigin-panels-stretch panel-row-style panel-row-style-for-22-0" data-stretch-type="full-width-stretch">
					<div id="pgc-22-0-0" class="panel-grid-cell">
						<div id="panel-22-0-0-0" class="so-panel widget widget_slider panel-first-child panel-last-child" data-index="0">
							<div class="thim-widget-slider thim-widget-slider-base template-base">
								<div class="ob-slider-base ">

									<ul class="ob-slider-images" data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:800,&quot;timeout&quot;:8000,&quot;full_screen&quot;:true,&quot;show_icon_scroll&quot;:&quot;show&quot;}">
										<li class="ob-slider-image" style="background-image: url(wp-content/uploads/sites/10/2017/06/home05-sldier.jpg);">

											<!--<span class="overlay_images"></span>-->
											<div class="ob-slider-wrapper">
												<div class="ob-slider-image-container slider-center">
													<div class="wrapper-container">
														<div class="container">
															<h2 class="slider-title" style="color: #ffffff;">HỌC LẬP TRÌNH KHÔNG GIỚI HẠN </h2>
															<div class="slider-desc">
																<p> với các gói thành viên (subscription) thiết kế đặc biệt cho sinh viên CNTT</p>
																<div class="thim-slider-button">
																	<a class="widget-button btn_layout_3  medium" href="https://elearningwp.thimpress.com/courses/" target="_blank">Tìm Hiểu Thêm</a>
																	<a class="widget-button btn_layout_3 btn_gray  medium" href="https://elearningwp.thimpress.com/courses/" target="_blank">Browse Developer Courses</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<div class="local-scroll">
										<a class="scroll-down" target="_self" href="#home-search">
											<span>Bắt Đầu </span> <i class="fa fa-angle-double-down"></i>
										</a>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pg-22-1" class="panel-grid panel-has-style">
				<div class="home4-search custom-search siteorigin-panels-stretch panel-row-style panel-row-style-for-22-1" id="home-search" data-stretch-type="full-width-stretch">
					<div id="pgc-22-1-0" class="panel-grid-cell">
						<div id="panel-22-1-0-0" class="so-panel widget widget_courses-searching panel-first-child panel-last-child" data-index="1">
							<div class="btn-black panel-widget-style panel-widget-style-for-22-1-0-0">
								<div class="thim-widget-courses-searching thim-widget-courses-searching-base template-base">
									<div class="courses-searching">
										<form role="search" method="get" action="https://elearningwp.thimpress.com/demo-04/courses/">
											<input type="text" value="" name="s" id="s" placeholder="Tìm Kiếm?" class="form-control courses-search-input" autocomplete="off" />
											<input type="hidden" value="course" name="ref" />
											<button type="submit"><i class="fa fa-search"></i></button>
											<span class="widget-search-close"></span>
										</form>
										<ul class="courses-list-search list-unstyled"></ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pg-22-2" class="panel-grid panel-no-style">
				<div id="pgc-22-2-0" class="panel-grid-cell">
					<div id="panel-22-2-0-0" class="so-panel widget widget_courses panel-first-child panel-last-child" data-index="2">
						<div class="thim-widget-courses thim-widget-courses-base">
							<div class="widget-box-title">
								<h2 style="color:#111111;font-size:24px;line-height:24px;font-weight:600" class="title">Các Khóa Học </h2>
								<a href="courses/index.html" class="browse-all-courses">Tất cả các khóa học<i class="fa fa-angle-double-right"></i></a>
							</div>
							<div class="wrapper-item archive-courses row courses-slider owl-carousel owl-theme" data-column="4" data-show-page-nav="1" itemscope itemtype="http://schema.org/CreativeWork">
								<article class="col-sm-12">

									<div class="inner-course">
										<div class="wrapper-course-thumbnail">

											<a class="course-thumbnail" href="courses/create-an-lms-website-with-learnpress/index.html" aria-hidden="true">
												<img loading="lazy" decoding="async" src="images/python-co-ban.png" alt="Create an LMS Website with LearnPress" title="create-an-lms-website-with-learnpress-3-1" width="500" height="500"></a>
											<label>đặc biệt</label>
											<div class="teacher_course">
												<div class="thim-about-author thim-co-instructor">
													<div class="author-wrapper clearfix">
														<div class="author-avatar">
															<img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh1.jpg" height="150" width="150">
														</div>
														<div class="author-bio">
															<div class="author-top">
																<a class="name" href="lp-profile/thang/index.html">
																	Quang Anh </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="course-title" itemprop="name">
											<h2>
												<a href="courses/create-an-lms-website-with-learnpress/index.html" itemprop="url">
													Khóa học lập trình python cơ bản </a>
											</h2>
										</div>

										<div class="wrapper-course-price">

											<div class="course-price">
												<span class="course-item-price"><span class="free">Free</span></span>
											</div>

										</div>
										<div class="course-students">
											<span>
												<strong class="students">
													54 học viên </strong>
											</span>
											<div class="course-rating">
												<div class="review-stars-rated" title="0 out of 5 stars">
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="col-sm-12">

									<div class="inner-course">
										<div class="wrapper-course-thumbnail">

											<a class="course-thumbnail" href="courses/introduction-learnpress-lms-plugin/index.html" aria-hidden="true">
												<img loading="lazy" decoding="async" src="images/web-php-laravel.png" alt="Introduction LearnPress &#8211; LMS plugin" title="introduction-learnpress-lms-plugin-2-1" width="400" height="400"></a>
											<div class="teacher_course">
												<div class="thim-about-author thim-co-instructor">
													<div class="author-wrapper clearfix">
														<div class="author-avatar">
															<img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh2.jpg" height="150" width="150">
														</div>
														<div class="author-bio">
															<div class="author-top">
																<a class="name" href="lp-profile/thang/index.html">
																	Anh Tuấn </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="course-title" itemprop="name">
											<h2>
												<a href="courses/introduction-learnpress-lms-plugin/index.html" itemprop="url">
													khóa học lập trình web với php/laravel </a>
											</h2>
										</div>

										<div class="wrapper-course-price">

											<div class="course-price">
												<span class="course-item-price"><span class="free">Free</span></span>
											</div>

										</div>
										<div class="course-students">
											<span>
												<strong class="students">
													97 học viên </strong>
											</span>
											<div class="course-rating">
												<div class="review-stars-rated" title="0 out of 5 stars">
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="col-sm-12">

									<div class="inner-course">
										<div class="wrapper-course-thumbnail">

											<a class="course-thumbnail" href="courses/how-to-teach-online-courses-effectively/index.html" aria-hidden="true">
												<img loading="lazy" decoding="async" src="images/java-co-ban.jpg" alt="Khóa học bootcamp java webfullstack" title="course-8" width="400" height="400"></a>
											<div class="teacher_course">
												<div class="thim-about-author thim-co-instructor">
													<div class="author-wrapper clearfix">
														<div class="author-avatar">
															<img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh3.jpg" height="150" width="150">
														</div>
														<div class="author-bio">
															<div class="author-top">
																<a class="name" href="lp-profile/thang/index.html">
																	Duy Quân </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="course-title" itemprop="name">
											<h2>
												<a href="courses/how-to-teach-online-courses-effectively/index.html" itemprop="url">
													Khóa học bootcamp java web fullstack </a>
											</h2>
										</div>

										<div class="wrapper-course-price">

											<div class="course-price">
												<span class="course-item-price"><span class="free">Free</span></span>
											</div>

										</div>
										<div class="course-students">
											<span>
												<strong class="students">
													62 học viên </strong>
											</span>
											<div class="course-rating">
												<div class="review-stars-rated" title="0 out of 5 stars">
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="col-sm-12">

									<div class="inner-course">
										<div class="wrapper-course-thumbnail">

											<a class="course-thumbnail" href="courses/accelerate-your-course-creation-speed/index.html" aria-hidden="true">
												<img loading="lazy" decoding="async" src="images/lap-trinh-nhung-game.jpg" alt="Accelerate Your Course Creation Speed" title="course-9" width="400" height="400"></a>
											<div class="teacher_course">
												<div class="thim-about-author thim-co-instructor">
													<div class="author-wrapper clearfix">
														<div class="author-avatar">
															<img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh4.jpg" height="150" width="150">
														</div>
														<div class="author-bio">
															<div class="author-top">
																<a class="name" href="lp-profile/thang/index.html">
																	Duc Anh </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="course-title" itemprop="name">
											<h2>
												<a href="courses/accelerate-your-course-creation-speed/index.html" itemprop="url">
													khóa học lập trình nhúng game </a>
											</h2>
										</div>

										<div class="wrapper-course-price">

											<div class="course-price">
												<span class="course-item-price"><span class="free">Free</span></span>
											</div>

										</div>
										<div class="course-students">
											<span>
												<strong class="students">
													51 học viên </strong>
											</span>
											<div class="course-rating">
												<div class="review-stars-rated" title="0 out of 5 stars">
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
													<div class="review-star">
														<em class="far lp-review-svg-star">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
														<em class="fas lp-review-svg-star" style="width:0%;">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
																stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
																class="lucide lucide-star">
																<polygon
																	points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
															</svg>
														</em>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div><!--end-->
						</div>
					</div>
				</div>
			</div>
			<div id="pg-22-3" class="panel-grid panel-has-style">
				<div class="background-left siteorigin-panels-stretch panel-row-style panel-row-style-for-22-3" data-stretch-type="full">
					<div id="pgc-22-3-0" class="panel-grid-cell">
						<div id="panel-22-3-0-0" class="so-panel widget widget_empty-space panel-first-child" data-index="3">
							<div class="thim-widget-empty-space thim-widget-empty-space-base template-base">
								<div class="empty_space" style="height:45px"></div>
							</div>
						</div>
						<div id="panel-22-3-0-1" class="so-panel widget widget_icon-box panel-last-child" data-index="4">
							<div class="thim-widget-icon-box thim-widget-icon-box-base template-base">
								<div class="icon-box-link"><a href="#">
										<div class="wrapper-box-icon text-center circle" data-text-readmore="#fff">
											<div class="smicon-box icon-top">
												<div class="boxes-icon circle" style="background-color: #ffffff;width: 100px;height: 100px;"><span class="inner-icon"><span class="icon"><i class="fa fa-building" style="color:#dd3333; font-size:40px; line-height:40px; vertical-align: middle;"></i></span></span></div>
												<div class="content-inner">
													<div class="widget-title-icon-box ">
														<h3 class="icon-box-title" style="color: #ffffff;font-size: 20px; line-height: 20px;font-weight: 700;margin-bottom: 20px;">Lộ trình học tập tốt </h3>
													</div>
													<div class="desc-icon-box">
														<p style="color: #dbecda;font-size: 15px;font-weight: 400;line-height: 22px;">Lộ trình học tập được thiết kế bài bản, chi tiết, phù hợp với mục tiêu học tập. Một lộ trình tốt sẽ giúp việc học trở nên hiệu quả, không lãng phí, không đi nhầm đường, học đến đâu hữu ích đến đó.</p>
													</div>
												</div>
											</div><!--end smicon-box-->
										</div>
									</a></div>
							</div>
						</div>
					</div>
					<div id="pgc-22-3-1" class="panel-grid-cell">
						<div id="panel-22-3-1-0" class="so-panel widget widget_empty-space panel-first-child" data-index="5">
							<div class="thim-widget-empty-space thim-widget-empty-space-base template-base">
								<div class="empty_space" style="height:45px"></div>
							</div>
						</div>
						<div id="panel-22-3-1-1" class="so-panel widget widget_icon-box panel-last-child" data-index="6">
							<div class="thim-widget-icon-box thim-widget-icon-box-base template-base">
								<div class="icon-box-link"><a href="#">
										<div class="wrapper-box-icon text-center circle" data-text-readmore="#fff">
											<div class="smicon-box icon-top">
												<div class="boxes-icon circle" style="background-color: #ffffff;width: 100px;height: 100px;"><span class="inner-icon"><span class="icon"><i class="fa fa-book" style="color:#dd3333; font-size:40px; line-height:40px; vertical-align: middle;"></i></span></span></div>
												<div class="content-inner">
													<div class="widget-title-icon-box ">
														<h3 class="icon-box-title" style="color: #ffffff;font-size: 20px; line-height: 20px;font-weight: 700;margin-bottom: 20px;">Giảng viên tốt </h3>
													</div>
													<div class="desc-icon-box">
														<p style="color: #dbecda;font-size: 15px;font-weight: 400;line-height: 22px;">Giảng viên là người định hướng học tập, tháo gỡ khó khăn, cung cấp kiến thức phù hợp với từng tình huống của học viên. </p>
													</div>
												</div>
											</div><!--end smicon-box-->
										</div>
									</a></div>
							</div>
						</div>
					</div>
					<div id="pgc-22-3-2" class="panel-grid-cell">
						<div id="panel-22-3-2-0" class="so-panel widget widget_single-images panel-first-child panel-last-child" data-index="7">
							<div class="custom-images panel-widget-style panel-widget-style-for-22-3-2-0">
								<div class="thim-widget-single-images thim-widget-single-images-base template-base">
									<div class="single-image center"><img src="wp-content/uploads/sites/10/2017/02/images-book-1-5.png" /></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pg-22-4" class="panel-grid panel-has-style">
				<div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-22-4" data-stretch-type="full">
					<div id="pgc-22-4-0" class="panel-grid-cell">
						<div id="panel-22-4-0-0" class="so-panel widget widget_empty-space panel-first-child" data-index="8">
							<div class="thim-widget-empty-space thim-widget-empty-space-base template-base">
								<div class="empty_space" style="height:60px"></div>
							</div>
						</div>
						<div id="panel-22-4-0-1" class="so-panel widget widget_top-instructors" data-index="9">
							<div class="thim-widget-top-instructors thim-widget-top-instructors-base template-base-v2">
								<div class="widget-box-title">
									<h3 style="font-size:24px;line-height:24px;font-weight:bold" class="title">Các giảng viên hàng đầu</h3>
									<p style="font-size: 16px;font-weight: normal;"></p><a href="all-instructor/index.html" class="browse-all-courses">Tất cả các giảng viên<i class="fa fa-angle-double-right"></i></a>
								</div>
								<div class="wrapper-instruction row">
									<div class="col-sm-3 first">
										<div class="avatar-instructors"><img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh1.jpg" height="480" width="480"><span class="number-courses">Các khóa học giảng viên <b>15</b></span></div>
										<h5><a href="instructor/alansmith/index.html">Quang anh</a></h5>
										<div class="author-major"><span>giảng viên </span></div>
										<div class="author-social"></div>
									</div>
									<div class="col-sm-3 last">
										<div class="avatar-instructors"><img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh2.jpg" height="480" width="480"><span class="number-courses">Các khóa học giảng viên <b>10</b></span></div>
										<h5><a href="instructor/biden/index.html">Duy Quân</a></h5>
										<div class="author-major"><span>giảng viên</span></div>
										<div class="author-social"></div>
									</div>
									<div class="col-sm-3 last">
										<div class="avatar-instructors"><img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh3.jpg" height="480" width="480"><span class="number-courses">Các khóa học giảng viên <b>8</b></span></div>
										<h5><a href="instructor/simon1/index.html">Việt Anh</a></h5>
										<div class="author-major"><span>giảng viên</span></div>
										<div class="author-social"></div>
									</div>
									<div class="col-sm-3 last">
										<div class="avatar-instructors"><img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="images/icon/hinh4.jpg" height="480" width="480"><span class="number-courses">Các khóa học giảng viên <b>19</b></span></div>
										<h5><a href="instructor/thang/index.html">Anh Tú</a></h5>
										<div class="author-major"><span>giảng viên</span></div>

									</div>
								</div>
							</div>
						</div>
						<div id="panel-22-4-0-2" class="so-panel widget widget_empty-space panel-last-child" data-index="10">
							<div class="thim-widget-empty-space thim-widget-empty-space-base template-base">
								<div class="empty_space" style="height:60px"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pg-22-5" class="panel-grid panel-no-style">
				<div id="pgc-22-5-0" class="panel-grid-cell">
					<div id="panel-22-5-0-0" class="so-panel widget widget_empty-space panel-first-child" data-index="11">
						<div class="thim-widget-empty-space thim-widget-empty-space-base template-base">
							<div class="empty_space" style="height:10px"></div>
						</div>
					</div>
					<div id="panel-22-5-0-1" class="so-panel widget widget_post-display panel-last-child" data-index="12">
						<div class="thim-widget-post-display thim-widget-post-display-base template-base">
							<div class="widget-box-title">
								<h3 style="color:#111111;font-size:24px;line-height:24px;font-weight:bold" class="title">Tin tức mới nhất </h3>
							</div>
							<div class="posts-display row">
								<article class="col-md-12 col-sm-6 col-xs-6">
									<div class="entry-thumbnail"><a href="gallery-events-3-2/index.html"><img decoding="async" src="images/tintuc/hinhTT1.jpg" alt="Gallery Events 3" title="Gallery Events 3" style="max-width: 120px;" /></a></div>
									<div class="entry-container">
										<h3><a href="gallery-events-3-2/index.html">
												FPT Software Japan phát triển CNTT cho tập đoàn hàng không Nhật </a></h3>
										<div class="entry-meta"><a class="author" href="author/thang/index.html">William</a><span class="time">June 16, 2025</span><a href="gallery-events-3-2/index.html#respond" class="comments-link">10 comment</a></div>
									</div>
								</article>
								<article class="col-md-12 col-sm-6 col-xs-6">
									<div class="entry-thumbnail"><a href="gallery-teachers-4/index.html"><img decoding="async" src="images/tintuc/hinhTT2.jpg" alt="Gallery Teachers 4" title="Gallery Teachers 4" style="max-width: 120px;" /></a></div>
									<div class="entry-container">
										<h3><a href="gallery-teachers-4/index.html">380 kỹ sư Việt sát hạch kỹ năng CNTT theo chuẩn quốc tế </a></h3>
										<div class="entry-meta"><a class="author" href="author/thang/index.html">William</a><span class="time">June 10, 2025</span><a href="gallery-teachers-4/index.html#respond" class="comments-link">4 comment</a></div>
									</div>
								</article>
								<article class="col-md-12 col-sm-6 col-xs-6">
									<div class="entry-thumbnail"><a href="gallery-events-3/index.html"><img decoding="async" src="images/tintuc/hinhTT3.jpg" alt="Gallery Events 3" title="Gallery Events 3" style="max-width: 120px;" /></a></div>
									<div class="entry-container">
										<h3><a href="gallery-events-3/index.html">
												Doanh nghiệp công nghệ Việt quan tâm gì khi ra nước ngoài</a></h3>
										<div class="entry-meta"><a class="author" href="author/thang/index.html">William</a><span class="time">June 09, 2025</span><a href="gallery-events-3/index.html#respond" class="comments-link">5 comment</a></div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div id="pgc-22-5-1" class="panel-grid-cell">
					<div id="panel-22-5-1-0" class="so-panel widget widget_testimonials panel-first-child panel-last-child" data-index="13">
						<div class="thim-widget-testimonials thim-widget-testimonials-base template-base">
							<div class="widget-box-title">
								<h3 style="color:#111111;font-size:24px;line-height:24px;font-weight:700" class="title">Cảm nhận học viên</h3>
							</div>
							<div class="sc-testimonials default owl-carousel owl-theme">
								<div class="item_testimonial">
									<div class="testimonial_content">Mình đến CodeGym để bắt đầu sự nghiệp lập trình viên khi vừa mới tốt nghiệp Trung học phổ thông. CodeGym là nơi cho mình nghề nghiệp đầu tiên, cùng tư duy, kỹ năng để phát triển bản thân mỗi ngày. Hiện tại mình đang làm việc tại DEHA.<span class="arrow-bottom"></span></div>
									<div class="testimonial-footer">
										<div class="avatar-testimonial"><img decoding="async" src="wp-content/uploads/sites/10/2017/02/testimonial-01-3-90x90.png" alt="Anna Lusby" title="Anna Lusby" /></div>
										<div class="title-regency">
											<h6> <a href="#"> Thu Hường </a> </h6>
											<div class="regency">Java Developer, BiPlus</div>
										</div>
									</div>
								</div>
								<div class="item_testimonial">
									<div class="testimonial_content">CodeGym không chỉ đào tạo kiến thức chuyên môn, mà còn giúp mình nâng cao kỹ năng làm việc. Qua các hoạt động seminar, teambuilding, techtalk… khả năng giao tiếp của mình đã cải thiện, tự tin hơn, đây là một yếu tố rất quan trọng để mình trở thành Sub-Leader như hiện tại.<span class="arrow-bottom"></span></div>
									<div class="testimonial-footer">
										<div class="avatar-testimonial"><img decoding="async" src="wp-content/uploads/sites/10/2017/02/testimonial-02-3-90x90.png" alt="Maxx Steward" title="Maxx Steward" /></div>
										<div class="title-regency">
											<h6> <a href="#"> Hải Yến </a> </h6>
											<div class="regency">PHP Developer, DEHA</div>
										</div>
									</div>
								</div>
								<div class="item_testimonial">
									<div class="testimonial_content">Tính kỷ luật là thứ mà mình đã được trui rèn trong suốt 6 tháng học tại CodeGym. Để phát triển trong ngành IT với những vị trí quản lý như Leader, Manager, bạn cần có năng lực cả về chuyên môn, ngoại ngữ, kỹ năng quản lý, ngoại ngữ… Chính sự kỷ luật đã giúp mình bám đuổi kế hoạch học tập và đạt được mục tiêu.<span class="arrow-bottom"></span></div>
									<div class="testimonial-footer">
										<div class="avatar-testimonial"><img decoding="async" src="wp-content/uploads/sites/10/2017/02/testimonial-03-3-90x90.png" alt="Susan Jackson" title="Susan Jackson" /></div>
										<div class="title-regency">
											<h6> <a href="#"> Đức Cảnh </a> </h6>
											<div class="regency">Team Leader, NTT Data VDS</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pg-22-6" class="panel-grid panel-has-style">
				<div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-22-6" data-stretch-type="full">
					<div id="pgc-22-6-0" class="panel-grid-cell">
						<div id="panel-22-6-0-0" class="so-panel widget widget_empty-space panel-first-child panel-last-child" data-index="14">
							<div class="thim-widget-empty-space thim-widget-empty-space-base template-base">
								<div class="empty_space" style="height:10px"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #main-content -->
</div><!-- #main-content -->
<!-- #main-content -->


@endsection

@push('scripts')
{{-- Call js--}}
@endpush