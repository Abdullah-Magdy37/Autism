@extends("navbar")
@section("routen")
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>السلوكيات النمطية</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="">
	<!-- Place favicon.ico in the root directory -->


</head>

<body>
	



    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg_3 overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h8>السلوكيات النمطية</h8>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

	<!-- Start Sample Area -->
	<section class="sample-text-area text-right">
		<div class="container box_1170">
			<h3 class="title1">توجيهات:</h3>
			<p1 class="sample-text">
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
			<form class="form-contact contact_form" action="/behaviors/result" method="post" enctype="multipart/form-data">
			
			@csrf
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>1- يتجنب دوام التقاء الأعين(أي يشيح وجهه بعيدًا عندما يحاول أحد أن ينظر إليه).</p>
					</div>

				
							 <input type="text" name="txt1" id="" placeholder="  اجابة السؤال الاول " value="{{ old('txt1') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>2- يحدق في الإيدي، الأشياء والمواد الموجودة في البيئية لفترة لا تقل عن خمس ثوانٍ.</p>
					</div>

				
							  <input type="text" name="txt2" id=""  placeholder="  اجابة السؤال الثاني " value="{{ old('txt2') }}">
					
				</div>

                <div class="row">
					<div class="col-lg-8 text-right">
						<p>3- ينقر بسرعة بأصابعه أو بيديه أمام عينيه لفترات مدتها خمس ثوان أو أكثر .</p>
					</div>

				
							  <input type="text" name="txt3" id=""  placeholder="  اجابة السؤال الثالث " value="{{ old('txt3') }}">
						
				
				</div>
				
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>4- يأكل طعام معين و يرفض أن يأكل ما يأكله أغلب الناس –عادةً- .</p>
					</div>

					
							 <input type="text" name="txt4" id=""  placeholder="  اجابة السؤال الرابع " value="{{ old('txt4') }}">
						
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>5- يلعق أشياء لا تؤكل(مثل :يد شخص ، ألعاب، كتب ،شعر .. ).</p>
					</div>

					
						<input type="text" name="txt5" id=""  placeholder="  اجابة السؤال الخامس " value="{{ old('txt5') }}">
					
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>6- يشم أشياء أو يتشمم (مثل :يد شخص ، ألعاب، كتب ،شعر .. ).</p>
					</div>

				
							 <input type="text" name="txt6" id=""  placeholder="  اجابة السؤال السادس " value="{{ old('txt6') }}">
			
				</div>
                <div class="row">
					<div class="col-lg-8 text-right">
						<p>7- يدور أو يتحرك في دوائر.</p>
					</div>

					
							<input type="text" name="txt7" id=""  placeholder="  اجابة السؤال السابع " value="{{ old('txt7') }}">
					
				</div>

				<div class="row">
					<div class="col-lg-8 text-right">
						<p>8- 	يدير أشياء غير مصممة للتدوير مثل ( أطباق الفناجين ، الفناجين ، الأكواب .. ).</p>
					</div>

				
					<input type="text" name="txt8" id=""  placeholder="  اجابة السؤال الثامن " value="{{ old('txt8') }}">
						
				</div>

			
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>9- يهتز للأمام والخلف أثناء الجلوس أو الوقوف .</p>
					</div>

				
							<input type="text" name="txt9" id=""  placeholder="  اجابة السؤال التاسع " value="{{ old('txt9') }}">
							
			
				</div>
			
			
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>10- يقوم بحركات خاطفة ، مندفعة ، و سريعة عندما ينتقل من مكان لآخر .</p>
					</div>

				
							<input type="text" name="txt10" id=""  placeholder="  اجابة السؤال العاشر" value="{{ old('txt10') }}"> 
				
				</div>
			
			
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>11- يتبختر في مشيته (يمشي علي أطراف اصابعه )عند الحركة او عند الوقوف في مكان .</p>
					</div>

				
							 <input type="text" name="txt11" id=""  placeholder= " اجابة السؤال الحادي عشر" value="{{ old('txt11') }}">
						
				</div>
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>12- يخبط أو يخفق بيديه أو أضابعه أمام وجهه أو علي جنبيه.</p>
					</div>

					
							  <input type="text" name="txt12" id=""  placeholder="  اجابة السؤال الثاني عشر" value="{{ old('txt12') }}">
					
				</div>

				<div class="row">
					<div class="col-lg-8 text-right">
						<p>13- يصدر أصوات حادة مثل  (أي أي أي ) أو اصوات أخري شبيهة كدافع نفسي له. </p>
					</div>

					
							 <input type="text" name="txt13" id=""  placeholder="  اجابة السؤال الثالث عشر" value="{{ old('txt13') }}">
						</div>
				<div class="row">
					<div class="col-lg-8 text-right">
						<p>14- يصفع ، يضرب أو يعض نفسه أو يحاول إيذاء نفسه بأي طريقة أخري .</p>
					</div>
							<input type="text" name="txt14" id="" placeholder="  اجابة السؤال الرابع عشر  " value="{{ old('txt4') }}">
				</div>

				<div class="form-group mt-3 text-center">
					<button type="submit" class="button button-contactForm boxed-btn">حفظ</button>
				</div>
			</form>
           
	</section>
	<!-- End Sample Area -->

  

	
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    </script>
</body>
</html>
@endsection 
