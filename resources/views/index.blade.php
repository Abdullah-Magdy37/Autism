@extends("navbar")
@section("index")
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>أطياف</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Place favicon.ico in the root directory -->

  
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
  

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text text-right">
                            <h3>كن معي في عالمي</h3>
                             <span>التدخل المبكر 
                                يمكن أن يغير الحياة.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    
    <!-- note-start -->
  

     <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @if (session()->has('status'))
                    <div class="alert alert-success text-center">
                        {{session()->get('status')}}
                    </div>
                @endif 
                    <div class="section_title text-center mb-55">
                        <h3></h3>
                        <p1>”إن تعريفي ووضعي في إطار صفة واحدة يعرضني لخطر الحكم الخاطئ ويزيد من احتمال أن تكون توقعاتك عني متدنية جداً وإذا جعلتني أحس بأني (لا أستطيع) عندها ستكون ردة فعلي الطبيعية (ولماذا أحاول؟).“
                        </p1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- note-end -->

    <!-- reson_area_start  -->
    @auth
        
  
    <div class="reson_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                   
                    <div class="section_title text-center mb-55">
                        <h3>الاختبارات</h3>
                        <p>لكي نحصل على نتيجة نهائية للتشخيص يجب التأكد من حل الاختبارات الأربعة بالترتيب .</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="Newfolder/ko3.jpg" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4 class="text-center">السلوكيات النمطية</h4>
                            @if($behaviors > 0 ) 
                            تم تسجيل الإجابه بنجاح <br>
                            {{-- <a href ="" class="btn btn-danger btn-small mt-2 ml-4">حذف إجابتك  </a> --}}
                            @else
                            <a href="routen" class="read_more">الذهاب للاختبار</a>  
                            @endif
                  
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="Newfolder/koko.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4 class="text-center">التواصل</h4>
                            @if($communication >0 ) 
                            تم تسجيل الإجابه بنجاح <br>
                            {{-- <a href ="" class="btn btn-danger btn-small mt-2 ml-4">حذف إجابتك  </a> --}}
                        @else
                        <a href="comuni" class="read_more" >الذهاب للاختبار</a>
                        @endif
                 
                        </div>
                    </div>
                </div>
            </div>
                        <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="Newfolder/ko33.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4 class="text-center">التفاعل الإجتماعي</h4>
                            @if($interaction >0 ) 
                            تم تسجيل الإجابه بنجاح <br>
                            {{-- <a href ="" class="btn btn-danger btn-small mt-2 ml-4">حذف إجابتك  </a> --}}
                        @else
                        <a href="enteractive" class="read_more">الذهاب للاختبار</a>
                        @endif
                      
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="Newfolder/nmeo.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4 class="text-center">اضطرابات النمو</h4>
                            @if($growth >0 ) 
                           تم تسجيل الإجابه بنجاح <br>
                           {{-- <a href ="" class="btn btn-danger btn-small mt-2 ml-4">حذف إجابتك  </a> --}}
                        @else
                        <a href="complex" class="read_more">الذهاب للاختبار</a>
                        @endif
                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mt-6 text-center">
                @if ($communication && $behaviors && $growth && $interaction > 0 )
                <a href ="/elag" class="button button-contactForm boxed-btn"> النتيجه النهائيه </a>
             
                @endif
             
           </div>
            
        </div>
    </div>
    @endauth
    <!-- reson_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <p class="salma"> ”التوحد هو بلورة من الكريستال دخلها ابني لتعزله عني وعن العالم
، وكأنه في كوكب آخر ، فلا نظرة من عينه إلى عيني ،
ولا إشارة تصحبني فيها أصبعه ، لم يرد ولا لعبة نشاطر فيها الخيال
، ولا قبلة أشعر معها بطعم الدنيا ، كم تمنيت أن اكسر تلك البلورة
وأخرج منها صغيري أحركه بعنف لعله يعود من منفى توحده
، وعندما يأست قررت أن اخترق البلورة وأدخل عالم التوحد بحثاً عن ابني“</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

   
</body>

</html>
@endsection 