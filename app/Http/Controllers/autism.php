<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\growth;
use App\interaction;
use App\communication;
use App\behaviors;


class autism extends Controller
{
  
    public function index(){
  
        return view ('index',
        ['interaction'=>interaction::where('user_id' , auth()->id() )->sum('total'),
        'behaviors'=>behaviors::where('user_id' , auth()->id() )->sum('total'),
        'communication'=>communication::where('user_id' , auth()->id() )->sum('total'),
        'growth'=>growth::where('user_id' , auth()->id() )->sum('total')]);
       }

            public function elag (){
                return view('elag');
            }

            public function enteractive (){
                return view('enteractive');
            }

            public function routen (){
                return view('routen');
            }

            public function comuni (){
                return view('comuni');
            }

            public function about (){
                return view('about');
            }

            public function autism (){
                return view('autism');
            }

            public function complex (){
                return view('complex');
            }


}
