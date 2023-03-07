<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller {
    //
    public function program() {
        return view('course', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'active','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function course() {
        return view('course', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'active','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function testimonial() {
        return view('testimonial', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'active','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }
}
