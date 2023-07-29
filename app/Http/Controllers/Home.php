<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function __construct()
    {
       
    }
    
    /**
     * Show homepage.
     *
     * @param  no
     * @return View
     */

    public function index()
    {
       return view('front.home');
    }
    # **** End ****

    /**
     * Show for-him.
     *
     * @param  no
     * @return View
     */

    public function for_him()
    {
       return view('front.for_him');
    }
    # **** End ****


    /**
     * Show about-us.
     *
     * @param  no
     * @return View
     */

    public function about_us()
    {
       return view('front.about_us');
    }
    # **** End ****


    /**
     * Show contact-us.
     *
     * @param  no
     * @return View
     */

    public function contact_us()
    {
       return view('front.contact_us');
    }
    # **** End ****
}
