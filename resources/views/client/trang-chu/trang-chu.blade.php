@extends('Client.templates.layout')
@section('title')
    Home
@endsection
@section('content')
        <!-- Start: Hero Section
==================================================-->
<div class="slider_owl">
    <div class="hero-section hero_two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="hero_text">
                        <h2> Học mọi lúc mọi  <br />
                            nơi <br />
                            Chỉ từ một thiết bị</h2>
                        <p> Học trực tuyến không phải là điều lớn lao tiếp theo,  <br />                           
                            nó bây giờ là điều tuyệt vời nhất từ ​​trước đến nay. </p>
                        <a href="#" class="more-link"> Bắt đầu </a>
                    </div>
                    <!-- /.hero_text -->
                </div>
                <!-- /.col-md-6 col-sm-12-->

                <div class="col-md-6 col-sm-12">
                    <div class="hero_img">
                        <img src="{{ asset('client/images/coding.png') }}" alt="" class="coding">
                        <div class="hero_img_ani" id="scene">
                            <img src="{{ asset('client/images/hero-men2.png') }}" alt="" data-depth="0.10" class="layer">
                        </div>
                        <div class="hero_stu">
                            <h4> 13k+ Học Viên</h4>
                            <img src="{{ asset('client/images/hero_students.png') }}" alt="">
                        </div>
                        <img src="{{ asset('client/images/pencil.png') }}" alt="" class="pencil">
                        <!-- /.hero_stu-->
                    </div>
                </div>
                <!-- /.col-md-6 col-sm-12-->
            </div>
            <!-- /. row -->
        </div>
        <!-- /. container -->
        <div class="hero_ellipse_icon">
            <img class="ellipse1" src="{{ asset('client/images/ellipse1.png') }}" alt="">
            <img class="ellipse2" src="{{ asset('client/images/ellipse11.png') }}" alt="">
            <img class="ellipse3" src="{{ asset('client/images/ellipse3.png') }}" alt="">
            <img class="ellipse4" src="{{ asset('client/images/ellipse4.png') }}" alt="">
            <img class="ellipse7" src="{{ asset('client/images/ellipse7.png') }}" alt="">
            <img class="ellipse8" src="{{ asset('client/images/ellipse10.png') }}" alt="">
            <img class="ellipse6" src="{{ asset('client/images/ellipse9.png') }}" alt="">
        </div>
        <!-- /.hero_ellipse_icon-->
    </div>
    <div class="hero-section hero_two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="hero_text">
                        <h2> Học mọi lúc mọi <br />
                            nơi <br />
                            Chỉ từ một thiết bị</h2>
                        <p> Học trực tuyến không phải là điều lớn lao tiếp theo, <br />
                            nó bây giờ là điều tuyệt vời nhất từ ​​trước đến nay. </p>
                        <a href="#" class="more-link"> Get Started </a>
                    </div>
                    <!-- /.hero_text -->
                </div>
                <!-- /.col-md-6 col-sm-12-->

                <div class="col-md-6 col-sm-12">
                    <div class="hero_img">
                        <img src="{{ asset('client/images/coding.png') }}" alt="" class="coding">
                        <div class="hero_img_ani" id="scene4">
                            <img src="{{ asset('client/images/hero-men3.png') }}" alt="" data-depth="0.10" class="layer">
                        </div>
                        <div class="hero_stu">
                            <h4> 13k+ Học Viên</h4>
                            <img src="{{ asset('client/images/hero_students.png') }}" alt="">
                        </div>
                        <img src="{{ asset('client/images/pencil.png') }}" alt="" class="pencil">
                        <!-- /.hero_stu-->
                    </div>
                </div>
                <!-- /.col-md-6 col-sm-12-->
            </div>
            <!-- /. row -->
        </div>
        <!-- /. container -->
        <div class="hero_ellipse_icon">
            <img class="ellipse1" src="{{ asset('client/images/ellipse1.png') }}" alt="">
            <img class="ellipse2" src="{{ asset('client/images/ellipse11.png') }}" alt="">
            <img class="ellipse3" src="{{ asset('client/images/ellipse3.png') }}" alt="">
            <img class="ellipse4" src="{{ asset('client/images/ellipse4.png') }}" alt="">
            <img class="ellipse7" src="{{ asset('client/images/ellipse7.png') }}" alt="">
            <img class="ellipse8" src="{{ asset('client/images/ellipse10.png') }}" alt="">
            <img class="ellipse6" src="{{ asset('client/images/ellipse9.png') }}" alt="">
        </div>
        <!-- /.hero_ellipse_icon-->
    </div>
</div>
<!-- End: Hero Section
==================================================-->


<!-- Start: Work Flow Section
==================================================-->
<section class="workflow-section pt-120">
    <!-- Container -->
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header text-center">
            <h3> Công Việc Của Chúng Tôi </h3>
        </div>
        <!-- End: Heading -->
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- category 1 -->
                <div class="workflow_item">
                    <i class="pe-7s-search"></i>
                    <h4> Tìm khóa học của bạn </h4>
                    <p>Lorem ipsum dolor sit amet can be sed diam nonumy eirmod keeps an
                        the satriction of whole life that enter.</p>
                </div>
            </div>
            <!--/ col-lg-4 col-md-6 col-sm-12  -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- category 1 -->
                <div class="workflow_item">
                    <i class="pe-7s-date"></i>
                    <h4>Đặt lịch </h4>
                    <p>Lorem ipsum dolor sit amet can be sed diam nonumy eirmod keeps an
                        the satriction of whole life that enter.</p>
                </div>
            </div>
            <!--/ col-lg-4 col-md-6 col-sm-12  -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- category 1 -->
                <div class="workflow_item">
                    <i class="pe-7s-medal"></i>
                    <h4> Chứng nhận </h4>
                    <p>Lorem ipsum dolor sit amet can be sed diam nonumy eirmod keeps an
                        the satriction of whole life that enter.</p>
                </div>
            </div>
            <!--/ col-lg-4 col-md-6 col-sm-12  -->
        </div>
        <!--/ row - -->
    </div>
    <!--/ Container - -->
</section>
<!--   End: Work Flow Section
==================================================-->



<!-- Start:  About US  Section
==================================================-->
<section class="about-section">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="abt_rating">
                    <h4> 4.9+</h4>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span> Đánh giá của người dùng </span>
                </div>
                <!-- /.abt_rating-->
                <div class="about_img" id="scene2">
                    <img src="{{ asset('client/images/about.png') }}" alt="image" class="layer" data-depth="0.28">
                </div>
                <!-- /.about_img-->
                <div class="abt_course">
                    <h4>47K+</h4>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-heart"></i>
                    <span> Các khóa học hoạt động </span>
                </div>
                <!-- /.abt_course-->
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="about_text">
                    <h3> Chúng tôi làm cho việc học của bạn trở nên tuyệt vời </h3>
                    <p> Trở thành nỗi đau, hãy để nó thật nhiều, nó đã được giải quyết sadipscing elitr, nhưng diam nonumy eirmod eirmod như vất vả và đau đớn là điều tuyệt vời đối với một số người, nhưng diam voluptua. Nhưng quả thực tôi sẽ buộc tội họ và chỉ cần hai nỗi đau và tôi sẽ lấy lại chúng. Anh ta đã đứng.</p>
                    <a href="{{ route('client_lien_he') }}" class="more-link"> Tìm hiểu thêm </a>
                </div>
            </div>
            <!--/ col-md-12  -->
        </div>
        <!--/ row - -->
    </div>
    <!--/ Container - -->
</section>
<!--   End: About US  Section
==================================================-->


<!-- Start: Popular Categories Section
==================================================-->
<section class="category-section">
    <!-- Container -->
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h3> Danh Mục Phổ Biến </h3>
        </div>
        <!-- End: Heading -->
        <div class="row">
            <div class="col-md-12" id="popula_cat">
                <!-- category 1 -->
                <div class="category-item">
                    <img src="{{ asset('client/images/cat-icon1.png') }}" alt="image">
                    <h4>Thiết kế</h4>
                </div>
                <!-- category 2 -->
                <div class="category-item">
                    <img src="{{ asset('client/images/cat-icon2.png') }}" alt="image">
                    <h4>Giáo dục</h4>
                </div>
                <!-- category 3 -->
                <div class="category-item">
                    <img src="{{ asset('client/images/cat-icon3.png') }}" alt="image">
                    <h4>Thủ công</h4>
                </div>
                <!-- category 4 -->
                <div class="category-item">
                    <img src="{{ asset('client/images/cat-icon4.png') }}" alt="image">
                    <h4>Tiếp thị</h4>
                </div>
                <!-- category 5 -->
                <div class="category-item">
                    <img src="{{ asset('client/images/cat-icon2.png') }}" alt="image">
                    <h4>Thiết kế</h4>
                </div>
            </div>
            <!--/ col-md-12  -->
        </div>
        <!--/ row - -->
    </div>
    <!--/ Container - -->
</section>
<!--   End: Popular Categories Section
==================================================-->



<!-- Start: Featured Courses Section
==================================================-->
<section class="feat-course-section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base-header">
            <h3> Các Khóa Học Nổi Bật </h3>
        </div>
        <!-- End: Heading -->
        <div class="row">
            @foreach ($list as $key => $item)
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="feat_course_item">
                    <img src="{{ asset('client/images/courses2.jpg') }}" alt="image">
                    {{-- <img src="{{ Storage::url($item->hinh_anh)  }}" alt="image"> --}}
                    
                    <div class="feat_cour_price">
                        <span class="feat_cour_tag"> UI/UX Design </span>
                        <span class="feat_cour_p"> {{ $item->gia_khoa_hoc }} VND </span>
                    </div>
                    <h4 class="feat_cour_tit"> {{ $item->ten_khoa_hoc }} </h4>
                    <div class="feat_cour_lesson">
                        <span class="feat_cour_less"> <i class="pe-7s-note2"></i> 24 lessons </span>
                        <span class="feat_cour_stu"> <i class="pe-7s-add-user"></i> 259 Students </span>
                    </div>
                    <div class="feat_cour_rating">
                        <span class="feat_cour_rat">
                            4.7
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            (4,5609)
                        </span>
                        <a href="#"> <i class="arrow_right"></i> </a>
                    </div>
                </div>
            </div>
            <!-- /. col-lg-4 col-md-6 col-sm-12-->  
            @endforeach
            

        </div>
        <!-- /. row -->
        <div class="text-center">
            <a href="{{ route('client_khoa_hoc') }}" class="more-link"> Xem tất cả </a>
        </div>
    </div>
    <!-- /. container -->
</section>
<!-- End: Featured Courses Section
==================================================-->

<!-- Start:  Learners Feedback Section
==================================================-->
<section class="lfeedback-section">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="lfeedback_img" id="scene3">
                    <img src="{{ asset('client/images/feedback.png') }}" alt="image" class="layer" data-depth="0.28">
                </div>
            </div>
            <div class="col-md-6 col-sm-12" id="lfeedback_cur">
                <div class="lfeedback_item">
                    <!-- Start: Heading -->
                    <div class="base-header">
                        <h3> Phản hồi của Học viên </h3>
                    </div>
                    <!-- Best Book Image 1 -->
                    <div class="lfeedback_text">
                        <p> Đó là một nỗi sợ hãi mà hầu hết trải nghiệm của tôi là tôi cảm thấy một giả định tuyệt vời rằng không bao giờ nghĩ rằng điều đó sẽ xảy ra Nhưng những điều khiêu khích tuyệt vời mà những điều được chấp thuận nhận được mà không có đủ điều kiện thực sự xảy ra mà không bao giờ nghĩ rằng điều đó sẽ xảy ra với một trải nghiệm sợ hãi nhất. </p>
                        <h4> David Benjamin </h4>
                        <h5>Washington, United States</h5>
                    </div>
                </div>
                <div class="lfeedback_item">
                    <!-- Start: Heading -->
                    <div class="base-header">
                        <h3> Phản hồi của Học viên </h3>
                    </div>
                    <!-- Best Book Image 1 -->
                    <div class="lfeedback_text">
                        <p> Đó là một nỗi sợ hãi mà hầu hết trải nghiệm của tôi là tôi cảm thấy một giả định tuyệt vời rằng không bao giờ nghĩ rằng điều đó sẽ xảy ra Nhưng những điều khiêu khích tuyệt vời mà những điều được chấp thuận nhận được mà không có đủ điều kiện thực sự xảy ra mà không bao giờ nghĩ rằng điều đó sẽ xảy ra với một trải nghiệm sợ hãi nhất. </p>
                        <h4> David Benjamin </h4>
                        <h5>Washington, United States</h5>
                    </div>
                </div>
            </div>
            <!--/ col-md-12  -->
        </div>
        <!--/ row - -->
    </div>
    <!--/ Container - -->
</section>
<!--   End: Learners Feedback Section
==================================================-->



<!-- Start: Newsletter Section  
==================================================-->
<section class="newsletter-section pb-130">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="newsletter_wrap">
                    <!-- Start: Heading -->
                    <div class="base-header">
                        <h3> Đăng Kí Với Chúng Tôi </h3>
                    </div>
                    <span>
                        Theo dõi bản tin của chúng tôi và nhận được nhiều <br />
                        điều thú vị mỗi tuần
                    </span>
                    <div class="newsletter_form">
                        <input class="newsletter_field" name="search" id="search_field" type="text"
                            placeholder="Nhập địa chỉ email của bạn" />
                        <a href="#"> ĐĂNG KÝ </a>
                    </div>
                    <!-- Best Book Image 1 -->
                </div>
            </div>
        </div>
        <!-- /. row -->
    </div>
    <!-- /. container -->
</section>
<!-- End: Newsletter Section
==================================================-->

@endsection