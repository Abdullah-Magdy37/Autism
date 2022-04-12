@extends('navbar')
@section("login")
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>تسجيل الدخول</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

   
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
   
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg_5 overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h7>تسجيل الدخـول</h7>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section text-right">
        <p2 class="heba"> الرجاء إدخال البيانات الآتية:</p2>
       <hr>
           <div class="container">
               <div class="row">
                   <div class="col-lg-8">
                   <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ادخل البريد الإلكتروني'" placeholder="البريد الإلكتروني">
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ادخل كلمة المرور'" placeholder="كلمة المرور">
                                   </div>
                               </div>

                           <div class="form-group mt-3">
                               <button type="submit" class="button button-contactForm boxed-btn"> تسجيل الدخول</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </section>
    <!-- ================ contact section end ================= -->
    

    
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>
    </body>
    
    </html>
    @endsection 