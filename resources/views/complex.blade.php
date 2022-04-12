
@extends ("navbar")
@section("complex")
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>اضطرابات النمو</title>
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


    

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg_2 overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

   <!-- Start Sample Area -->
        <section class="sample-text-area text-right">
		<div class="container box_1170">
			<h3 class="title1 text-right">توجيهات:</h3>
			<p1 class="sample-text text-right">
				 هذا الجزء يتم ملؤه عن طريق الأباء أو أحد القائمين علي رعاية الطفل ممن لهم اتصال و دعم مباشر معه خلال الستة عشر شهراً الأولي من عمر الطفل . و يفضل مقابلة الآباء:<br>
				<p1 class="sample-text text-right">
					قدّر كل بند من البنود الآتية طبقاً لمعدل حدوثه , مستخدماً
	 الخطوط الإرشادسة الآتية لتحقيق أفضل مستوي للتقدير .<br>
	(صفر) لا يلاحظ إطلاقاً : لم تلاحظ إطلاقاً ان هذا الشخص تصرف بهذه الطريقة .<br>
	(1)	يُلاحظ بصورة نادر : يتصرف هذا الشخص بهذه الطريقةمرة أو مرتين كل ست ساعات .<br>
	(2)	يُلاحظ أحياناً : يتصرف هذا الشخص بهذه الطريقة3-4 مرات كل ست ساعات <br>
	(3)	يُلاحظ بصورةمتكررة : يتصرف هذا الشخص بهذه الطريقة 5-6 مرات كل ست ساعات .<br>
		ضع علامة علي الاختيار الذي يصف ملاحظاتك لتصرفات الحالة في هذه الظروف الطبيعية ( مثلاً : في معظم الأماكن ، مع الأشخاص المألوفين له، في الأنشطة اليومية (العادية) ، لا تنسي الإجابة علي كل البنود ، و إذا كنت غير واثق من إجابتك علي بند معين أجل إجابتك ولاحظ هذا الشخص لمدة ست ساعات حتي تحدد تقديرك للبنود المؤجلة 
			
	</p1>
			</p1><br><br><br>
          
			@if ($errors->any())
			<div class="alert alert-danger text-center width:20px" >
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
			<form class="form-contact contact_form" action="/growth/result" method="post" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>1-	هل جلس الطفل ثم وقف و مشي بنفس هذا الترتيب .</p>
					</div>
				
							<input type="text" name="txt1" id=""  placeholder="  اجابة السؤال الاول   " value="{{ old('txt1') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>2-	هل نمت لدي الطفل مهارة ( كالمشي ) ثم حدث له ارتداد أو نكوص فيها .</p>
					</div>

				
							<input type="text" name="txt2" id=""  placeholder="  اجابة السؤال الثاني  " value="{{ old('txt2') }}">
				
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>3-	هل نمت لدي الطفل مهارة ( كالمشي ) ثم حدث له ارتداد أو نكوص فيها .</p>
					</div>

					
							 <input type="text" name="txt3" id=""  placeholder="  اجابة السؤال الثالث  " value="{{ old('txt3') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>4-	هل يمضي الطفل وقت طويل في الاهتزاز قبل ان يستيقظ . </p>
					</div>

			
						<input type="text" name="txt4" id=""  placeholder="  اجابة السؤال الرابع  " value="{{ old('txt4') }}">
						
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>5-	هل أظهر الطفل أو تم تشخيصه علي أن لديه تأخر في النمو قبل الستة وثلاثون شهراً الأولي  . </p>
					</div>

				
							 <input type="text" name="txt5" id=""  placeholder="  اجابة السؤال الخامس  " value="{{ old('txt5') }}">
										
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>6-	هل يظهر الطفل أي رغبة أو يجهز نفسه لرفعه أو التقاطه عندما يحاول أحد الأباء حمله .</p>
					</div>

					
							<input type="text" name="txt6" id=""  placeholder="  اجابة السؤال السادس  " value="{{ old('txt6') }}">
						
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>7-	هل يبتسم الطفل لأبويه أو للأقران أثناء </p>
					</div>

				
							<input type="text" name="txt7" id=""  placeholder="  اجابة السؤال السابع  " value="{{ old('txt7') }}">
						
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>8-	هل يبكي الطفل عندما يحاول شخص غير مألوف بالنسبة له الاقتراب منه .</p>
					</div>

								<input type="text" name="txt8" id=""  placeholder="  اجابة السؤال الثامن  " value="{{ old('txt8') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>9-	هل قلد الطفل شخص اخر قبل سن الثالثة ( مثل تقليد الأصوات ، أو اللعب بالعرائس ) .</p>
					</div>

					
						<input type="text" name="txt9" id=""  placeholder="  اجابة السؤال التاسع  " value="{{ old('txt9') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>10-	هل أظهر الطفل سعادته خلال الستة وثلاثون شهراً الأولي من عمره عندما كان يُحمل أو يعانق </p>
					</div>

				
					<input type="text" name="txt10" id=""  placeholder="  اجابة السؤال العاشر  " value="{{ old('txt10') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>11-	هل استخدم الطفل التخاطب للتواصل مع الآخرين خلال الستة وثلاثون شهراً الأولي من عمره .</p>
					</div>

				
                                <input type="text" name="txt11" id=""  placeholder="  اجابة السؤال الحادي عشر   " value="{{ old('txt11') }}">
				
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>12-	هل يبدو الطفل و كأنه أصم تجاه بعض الأصوات في حين يستجيب إلي أصوات أخري  . </p>
					</div>

				 
							 <input type="text" name="txt12" id=""  placeholder="  اجابة السؤال الثاني عشر   " value="{{ old('txt12') }}">
				
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>13-	هل يطيع الطفل الأوامر البسيطة ( مثل : قف ، اجلس ، تعال هنا )  .</p>
					</div>

					
							<input type="text" name="txt13" id=""  placeholder="   اجابة السؤال الثالث عشر   " value="{{ old('txt13') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>14-	هل يتذكر الطفل الأشياء ( مثل : أين توجد لعبته المفضلة ؟ او ما حدث في مكان معين  ؟) .</p>
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