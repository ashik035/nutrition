<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use Validator;
use DB;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        // dd($request->about_me);
        $valid = Validator::make($request->all(),[
            'about_me'=>'required|max:500|min:20'
        ])->validate();

        $total = About::count();
        $ab = [];
        $ab['about_me'] = $request->about_me;
        // dd($ab);
        if ($total == 0) {
            About::create($ab);
        } else {
            // $about = About::update(['about_me' => $ab['about_me']])->where('id', 1);
            DB::table('abouts')->where('id', 1)->update($ab);
        }
        $about = About::select('about_me')->where('id', 1)->get()->toArray();
        if ($about) {
            $about_me = $about['0']['about_me'];
        } else {
            $about_me = '';
        }
        return redirect('/admin/about')->with('about_me', $about_me)->with('success', 'Successfully Updated!');
    }
}