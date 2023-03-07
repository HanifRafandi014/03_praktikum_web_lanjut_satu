<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {
    //
    public function product() {
        return view('seooptimizer', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'active','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function seooptimizer() {
        return view('seooptimizer', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'active','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function webdesign() {
        return view('webdesign', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'active','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function socialmediamarketing() {
        return view('socialmediamarketing', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'active','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function emailmarketing() {
        return view('emailmarketing', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'active','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function ppcadvertising() {
        return view('ppcadvertising', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'active','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }

    public function appdevelopment() {
        return view('appdevelopment', ['program'=>'','product'=>'','home'=>'','seooptimizer'=>'','appdevelopment'=>'active','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }
}
