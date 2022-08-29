<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
use Validator;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::where('deleted_at', '=', Null)->orderBy('id', 'ASC')->latest()->paginate(5);

        return view('admin.blog.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.banner.index');
    }

    public function show($id)
    {
        $banner = Banner::where('id' , $id)->get()->first();
        return view('admin.banner.show',compact('banner'));
    }


    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fileName = '';

        if ($request->hasFile('image')) {
            $request->validate([
                'header' => 'required|max:255',
                'sub_header' => 'required|max:255',
                'image' => 'mimes:jpeg,jpg,png,gif,svg|required|max:10000',
            ]);

            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $ext = $request->file('image')->getClientOriginalExtension();

            $img = Image::make($image->getRealPath())->resize(1200, 600, function ($aspect) {
                $aspect->aspectRatio();
            })->encode($ext);
            $filePath = 'images/banner'.'/';

            Storage::disk('public')->put($filePath . $fileName, (string) $img);
        } else {
            $request->validate([
                'header' => 'required|max:255',
                'sub_header' => 'required|max:255',
            ]);
            $fileName = $request['current_image'];
        }

        $data = [];
        $data['id'] = $request['id'];
        $data['header'] = $request['header'];
        $data['sub_header'] = $request['sub_header'];
        $data['image'] = $fileName;

        // dd($data);
        Banner::where('id' , $data['id'])
                ->update($data);

        return redirect()->route('admin.banner')
                        ->with('success','banner updated successfully');
    }

    public function destroy($id)
    {
        Banner::find($id)->delete();

        return redirect()->route('admin.banner')
                        ->with('success','banner deleted successfully');
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'header' => 'required|max:255',
            'sub_header' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|required|max:10000',
        ]);

        $fileName = '';

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $ext = $request->file('image')->getClientOriginalExtension();

            $img = Image::make($image->getRealPath())->resize(1200, 600, function ($aspect) {
                $aspect->aspectRatio();
            })->encode($ext);
            $filePath = 'images/banner'.'/';

            Storage::disk('public')->put($filePath . $fileName, (string) $img);
        }

        $data = [];
        $data['header'] = $request['header'];
        $data['sub_header'] = $request['sub_header'];
        $data['image'] = $fileName;

        Banner::create($data);

        return redirect()->route('admin.banner')
                        ->with('success','banner created successfully.');
    }
}