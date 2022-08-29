<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Banner;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function about()
    {
        $about = About::select('about_me')->where('id',1)->get()->toArray();
        if ($about) {
            $about_me = $about['0']['about_me'];
        } else {
            $about_me = '';
        }
        return view('admin.about', compact('about_me'));
    }

    public function address()
    {
        return view('admin.address');
    }

    public function banner()
    {
        return view('admin.banner');
    }

    public function menu()
    {
        return view('admin.menu');
    }

    public function post()
    {
        return view('admin.post');
    }
}
