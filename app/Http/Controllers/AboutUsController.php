<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller {
    //
    public function aboutus() {
        return view('aboutus', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'active','contactus'=>'']);
    }
}
