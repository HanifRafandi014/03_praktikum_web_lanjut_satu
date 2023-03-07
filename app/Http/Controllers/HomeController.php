<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function home() {
        return view('home', ['program'=>'','product'=>'','home'=>'active','seooptimizer'=>'','appdevelopment'=>'','course'=>'','news'=>'','emailmarketing'=>'','ppcadvertising'=>'','socialmediamarketing'=>'','testimonial'=>'','webdesign'=>'','programs'=>'','aboutus'=>'','contactus'=>'']);
    }
}
