@extends ("navbar")
@section("comuni")
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>التواصــل</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Place favicon.ico in the root directory -->

 

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        {{-- <h3>التــواصل</h3> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
<!-- Start Sample Area -->
	<section class="sample-text-area text-right">
		<div class="container box_1170">
			<h3 class="text-right title1">توجيهات:</h3>
			<p1 class="sample-text text-right">
				قدّر كل بند من البنود الآتية طبقاً لمعدل حدوثه , مستخدماً
 الخطوط الإرشادسة الآتية لتحقيق أفضل مستوي للتقدير :<br>
(صفر) لا يلاحظ إطلاقاً : لم تلاحظ إطلاقاً ان هذا الشخص تصرف بهذه الطريقة .<br>
(1)	يُلاحظ بصورة نادر : يتصرف هذا الشخص بهذه الطريقةمرة أو مرتين كل ست ساعات .<br>
(2)	يُلاحظ أحياناً : يتصرف هذا الشخص بهذه الطريقة3-4 مرات كل ست ساعات <br>
(3)	يُلاحظ بصورةمتكررة : يتصرف هذا الشخص بهذه الطريقة 5-6 مرات كل ست ساعات .<br>
•	ضع علامة علي الاختيار الذي يصف ملاحظاتك لتصرفات الحالة في هذه الظروف الطبيعية ( مثلاً : في معظم الأماكن ، مع الأشخاص المألوفين له، في الأنشطة اليومية (العادية) ، لا تنسي الإجابة علي كل البنود ، و إذا كنت غير واثق من إجابتك علي بند معين أجل إجابتك ولاحظ هذا الشخص لمدة ست ساعات حتي تحدد تقديرك للبنود المؤجلة :
			</p1>
            <br>
            <br>
            <br>
			<br>
			@if ($errors->any())
			<div class="alert alert-danger text-center width:20px" >
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

			<form class="form-contact contact_form" action="/communication/result" method="post" >
				@csrf
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>1-	يعيد الكلمات لفظياً أو بإيماءات (إشارات).</p>
					</div>

				
						<input type="text" name="txt1" id=""  placeholder="  اجابة السؤال الاول " value="{{ old('txt1') }}">
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>2-	يعيد كلمات خارج سياق الحديث (أي يعيد كلمات سمعها في وقت سابق، ).</p>
					</div>

				
							  <input type="text" name="txt2" id=""  placeholder="  اجابة السؤال الثاني " value="{{ old('txt2') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>3-	يعيد الكلمات والعبارات مرات و مرات .</p>
					</div>

							  <input type="text" name="txt3" id=""  placeholder="  اجابة السؤال الثالث  " value="{{ old('txt3') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>4-	يتكلم أو يصدر إيماءات أو إشارات بتأثيرات رتيبة ثابتة أو إيقاع غير جيد .</p>
					</div>

				
							  <input type="text" name="txt4" id=""  placeholder="  اجابة السؤال الرابع  " value="{{ old('txt4') }}">
						
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>5-	يستجيب بطريقة غير ملائمة للأوامر البسيطة ( مثل : اجلس ، قف .. ).</p>
					</div>

				
							<input type="text" name="txt5" id=""  placeholder="  اجابة السؤال الخامس  " value="{{ old('txt5') }}">
				
				
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>6-	يشيح وجهه و يتجنب النظر للمتكلم إذا نادي عليه بإسمه.</p>
					</div>

							 <input type="text" name="txt6" id=""  placeholder="  اجابة السؤال السادس  " value="{{ old('txt6') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>7-	يتجنب طلب الأشياء الذي يريدها .</p>
					</div>

				
						<input type="text" name="txt7" id=""  placeholder="  اجابة السؤال السابع  " value="{{ old('txt7') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>8-	يفشل في بدء محادثات مع أقرانه او مع الراشدين .</p>
					</div>

						    <input type="text" name="txt8" id=""  placeholder="  اجابة السؤال الثامن   " value="{{ old('txt8') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>9-	يستخدم " نعم" و "لا" بطريقة غير ملائمة .</p>
					</div>

				
							<input type="text" name="txt9" id=""  placeholder="  اجابة السؤال التاسع  " value="{{ old('txt9') }}">
				
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>10-	يستخدم الضمائر بصورة غير ملائمة ( يشير إلي نفسه بالضمير هو ، أنت ، هي ).</p>
					</div>

				
							  <input type="text" name="txt10" id=""  placeholder="  اجابة السؤال العاشر  " value="{{ old('txt10') }}">
				
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>11-	يستخدم الضمير " أنا " بطريقة غير ملائمة ( لا يقول أنا عندما يشير إلي نفسه ).</p>
					</div>

				
							  <input type="text" name="txt11" id=""  placeholder="  اجابة السؤال الحادي عشر   " value="{{ old('txt11') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>12-	يردد أصوات غير واضحة ( بقبقة ) مرات و مرات .</p>
					</div>

				
							<input type="text" name="txt12" id=""  placeholder="  اجابة السؤال الثاني عشر   " value="{{ old('txt12') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>13-	يستخدم الإيماءات ( أو الإشارات ) بدلاً من الحديث لكي يحصل علي الأشياء .</p>
					</div>

				
							 <input type="text" name="txt13" id=""  placeholder="  اجابة السؤال الثالث عشر   " value="{{ old('txt13') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>14-	يجيب بصورة غير ملائمة علي أسئلة عن قصص موجزة أو جمل إخبارية . </p>
					</div>

				
							<input type="text" name="txt14" id=""  placeholder="  اجابة السؤال الرابع عشر   " value="{{ old('txt14') }}">
					
					
				</div>
				<div class="form-group mt-3 text-center">
					<button type="submit" class="button button-contactForm boxed-btn">حفظ</button>
				</div>
			
			</form>
			
		</div>
  
	</section>
	<!-- End Sample Area -->

   
</body>

</html>
@endsection