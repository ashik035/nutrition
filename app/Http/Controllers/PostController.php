<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
use Validator;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::where('deleted_at', '=', Null)->orderBy('id', 'ASC')->latest()->paginate(5);

        return view('admin.post.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.banner.index');
    }

    public function show($id)
    {
        $post = Post::where('id' , $id)->get()->first();
        return view('admin.post.show',compact('post'));
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit',compact('post'));
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

        Post::where('id' , $data['id'])
                ->update($data);

        return redirect()->route('post.index')
                        ->with('success','Post updated successfully');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('post.index')
                        ->with('success','Post deleted successfully');
    }

    public function create()
    {
        return view('admin.post.create');
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

        Post::create($data);

        return redirect()->route('post.index')
                        ->with('success','Post created successfully.');
    }
}