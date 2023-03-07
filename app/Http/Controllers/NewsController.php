<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller {
    //
    public function news($links = '') {
        if ($links == '') {
            return view('news', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'active','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
        } else {
            $alert = "Maaf link yang anda inputkan salah";
            $alert = "Tolong inputkan link yang benar";
            echo "<script type='text/javascript'>alert('$alert');</script>";
            return view('home', ['program'=>'','product'=>'','home'=>'active','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
        }
    }
}
