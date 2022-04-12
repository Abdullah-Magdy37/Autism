@extends ("navbar")
@section("elag")

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>خطة التأهيل</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Place favicon.ico in the root directory -->

   
</head>

<body>
    <div class="bradcam_area breadcam_bg_1 overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        {{-- <h3>نسبة التوحد</h3> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-18">
                    <div class="text-center mb-45">
                        <div class="row">
                                <div class="col-12">
                                  <div class="card">
                                      <div class="card-header">
                                        <h4 class="title1">نتيجة الاختبارات الأربعة</h4>
                                      </div>
                                      <div class="card-body">
                                            @php
                                                $total = $interaction + $communication + $behaviors + $growth;
                                            @endphp
                                <table class="table">
                                        <thead>
                                                <tr>
                                                    <th scope="col">مجموع التفاعل الأجتماعي </th>
                                                    <th scope="col">مجموع التواصل </th>
                                                    <th scope="col">مجموع السلوكيات النمطيه </th>
                                                    <th scope="col">مجموع اضطرابات النمو </th>
                                                    <th scope="col"> المجموع الكلي   </th>
                                                    <th scope="col">نسبة التوحد  </th>
                                                
                                                </tr>
                                        </thead>
                                         <tbody>
                                                <tr>
                                                    <td >{{ $interaction  }}</td>
                                                    <td>{{ $communication  }}</td>
                                                    <td>{{ $behaviors }}</td>
                                                    <td>{{ $growth }}</td>
                                                    <td>{{ $total }}</td>
                                                    <td>
                                                        @if($total >= 121)
                                                        <h4> شديدة </h4>  
                                                        @elseif($total >= 90 && $total < 121) 
                                                        <h4>   متوسطه</h4>
                                                        @elseif($total >= 69 && $total < 90) 
                                                        <h4>  منخفضة </h4>
                                                        @elseif($total < 69) 
                                                        <h4>  منخفضة جدا</h4> 
                                                        @endif
                                                    </td>
                                                </tr>
                                         </tbody>
                                  </table>
                                      </div>
                                  </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
</body>

</html>
@endsection