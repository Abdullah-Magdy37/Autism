<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interaction;
use App\behaviors;
use App\communication;
use App\growth;
use App\final_result;
use App\Http\Requests\resultrequest;
class resultcontroller extends Controller
{
 public function index(){
  
    return view ('elag',['interaction'=>interaction::where('user_id' , auth()->id() )->sum('total'),'behaviors'=>behaviors::where('user_id' , auth()->id() )->sum('total'),
    'communication'=>communication::where('user_id' , auth()->id() )->sum('total'),'growth'=>growth::where('user_id' , auth()->id() )->sum('total')]);
   }
 

    public function interaction(resultrequest $request){
       $summ = new interaction() ;
       $summ->user_id = auth()->id() ; 
       $summ->q1=$request->txt1;
      $summ->q2=$request->txt2;
      $summ->q3=$request->txt3;
      $summ->q4=$request->txt4;
      $summ->q5=$request->txt5;
      $summ->q6=$request->txt6;
      $summ->q7=$request->txt7;
      $summ->q8=$request->txt8;
      $summ->q9=$request->txt9;
      $summ->q10=$request->txt10;  
      $summ->q11=$request->txt11;
      $summ->q12=$request->txt12;
      $summ->q13=$request->txt13;
      $summ->q14=$request->txt14;
      $summ->total= collect(['q1'=>$request->txt1,'q2'=>$request->txt2,'q3'=>$request->txt3,
      'q4'=>$request->txt4,'q5'=>$request->txt5,'q6'=>$request->txt6,'q7'=>$request->txt7,
      'q8'=>$request->txt8,'q9'=>$request->txt9,'q10'=>$request->txt10,'q11'=>$request->txt11,'q12'=>$request->txt12,
      'q13'=>$request->txt13,'q14'=>$request->txt14])->sum();
      $summ->save();
      session()->flash('status','تم تسجيل إجابة التفاعل الإجتماعي  بنجاح ');
      return redirect('index');

    }

 

    public function behaviors(resultrequest $request){
     
      $summ = new behaviors() ;
      $summ->user_id = auth()->id() ; 
      $summ->q1=$request->txt1;
      $summ->q2=$request->txt2;
      $summ->q3=$request->txt3;
      $summ->q4=$request->txt4;
      $summ->q5=$request->txt5;
      $summ->q6=$request->txt6;
      $summ->q7=$request->txt7;
      $summ->q8=$request->txt8;
      $summ->q9=$request->txt9;
      $summ->q10=$request->txt10;  
      $summ->q11=$request->txt11;
      $summ->q12=$request->txt12;
      $summ->q13=$request->txt13;
      $summ->q14=$request->txt14;
      $summ->total= collect(['q1'=>$request->txt1,'q2'=>$request->txt2,'q3'=>$request->txt3,
      'q4'=>$request->txt4,'q5'=>$request->txt5,'q6'=>$request->txt6,'q7'=>$request->txt7,
      'q8'=>$request->txt8,'q9'=>$request->txt9,'q10'=>$request->txt10,'q11'=>$request->txt11,'q12'=>$request->txt12,
      'q13'=>$request->txt13,'q14'=>$request->txt14])->sum();
      $summ->save();
      session()->flash('status','تم تسجيل إجابة السلوكيات النمطيه  بنجاح ');
      return redirect('index');

   }

   public function communication(resultrequest $request){
     
    $summ = new communication() ;
    $summ->user_id = auth()->id() ; 
    $summ->q1=$request->txt1;
    $summ->q2=$request->txt2;
    $summ->q3=$request->txt3;
    $summ->q4=$request->txt4;
    $summ->q5=$request->txt5;
    $summ->q6=$request->txt6;
    $summ->q7=$request->txt7;
    $summ->q8=$request->txt8;
    $summ->q9=$request->txt9;
    $summ->q10=$request->txt10;  
    $summ->q11=$request->txt11;
    $summ->q12=$request->txt12;
    $summ->q13=$request->txt13;
    $summ->q14=$request->txt14;
    $summ->total= collect(['q1'=>$request->txt1,'q2'=>$request->txt2,'q3'=>$request->txt3,
    'q4'=>$request->txt4,'q5'=>$request->txt5,'q6'=>$request->txt6,'q7'=>$request->txt7,
    'q8'=>$request->txt8,'q9'=>$request->txt9,'q10'=>$request->txt10,'q11'=>$request->txt11,'q12'=>$request->txt12,
    'q13'=>$request->txt13,'q14'=>$request->txt14])->sum();
    $summ->save();
    session()->flash('status','تم تسجيل إجاية التواصل   بنجاح ');
    return redirect('index');

 }
 public function growth(resultrequest $request){
     
   $summ = new growth() ;
   $summ->user_id = auth()->id() ; 
   $summ->q1=$request->txt1;
   $summ->q2=$request->txt2;
   $summ->q3=$request->txt3;
   $summ->q4=$request->txt4;
   $summ->q5=$request->txt5;
   $summ->q6=$request->txt6;
   $summ->q7=$request->txt7;
   $summ->q8=$request->txt8;
   $summ->q9=$request->txt9;
   $summ->q10=$request->txt10;  
   $summ->q11=$request->txt11;
   $summ->q12=$request->txt12;
   $summ->q13=$request->txt13;
   $summ->q14=$request->txt14;
   $summ->total= collect(['q1'=>$request->txt1,'q2'=>$request->txt2,'q3'=>$request->txt3,
      'q4'=>$request->txt4,'q5'=>$request->txt5,'q6'=>$request->txt6,'q7'=>$request->txt7,
      'q8'=>$request->txt8,'q9'=>$request->txt9,'q10'=>$request->txt10,'q11'=>$request->txt11,'q12'=>$request->txt12,
      'q13'=>$request->txt13,'q14'=>$request->txt14])->sum();
   $summ->save();
   session()->flash('status','تم تسجيل إجابة إضطرابات النمو  بنجاح ');
   return redirect('index');

}

}
