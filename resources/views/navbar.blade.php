<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>

@yield("index")
@yield("complex")
@yield("comuni")
@yield("routen")
@yield("enteractive")
@yield("elag")
@yield("About")
@yield("aboutautism")
@yield("login")
@yield("content")
@yield("register")






    <header>


        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu float-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index">الصفحة الرئيسية</a></li>
                                        <li><a href="autism">عن التوحد</a></li>
                                        <li><a href="about">عن الموقع</a></li>
                                        @guest
                                        <li><a href="register">انشاء حساب</a></li>
                                        <li>  <a  href="login">تسجيل الدخول</a>  </li>
                                       @endguest


                                       @auth
                                       {{-- <li><a href="elag">نسبة التوحد </a></li> --}}
                                       <li>
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                               تسجيل خروج
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        </div>
                                    </li>
                                       @endauth
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">




                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                             <div class="logo">
                                    <img src="newfolder/logo2.png" width="45%" alt="sss">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>

    <!-- header-end -->
    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-6 col-lg-8">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="" alt="">
                                </a>
                            </div>
                            <p class="address_text text-right">كن معي في عالمي <br>التدخل المبكر يمكن أن يحسن مهارات التعلم والتواصل والمهارات الاجتماعية
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title text-right">
                                تنقل سريع
                            </h3>
                            <ul class="links text-right">
                                <li><a href="index">الصفحة الرئيسية</a></li>
                                <li><a href="autism">عن التوحد</a></li>
                                <li><a href="about">عن الموقع</a></li>
                            

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- JS here -->
	<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
	<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('js/ajax-form.js')}}"></script>
	<script src="{{asset('js/waypoints.min.js')}}"></script>
	<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('js/scrollIt.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script src="{{asset('js/nice-select.min.js')}}"></script>
	<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>
	<script src="{{asset('js/gijgo.min.js')}}"></script>
	<!--contact js-->
	<script src="{{asset('js/contact.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/jquery.form.js')}}"></script>
	<script src="{{asset('js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('js/mail-script.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>

