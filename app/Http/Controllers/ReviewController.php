<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    # This is for backend list
    public function list()
    {
        $reviews = Review::where('deleted_at', '=', Null)->orderBy('id', 'DESC')->latest()->paginate(5);

        return view('admin.review.index',compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
        Review::find($id)->delete();

        return redirect()->route('review.list')
                        ->with('success','Review deleted successfully');
    }

    public function reviewPost(Request $request){
        $data = [];
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'details' => 'required'
        ]);

        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['subject'] = $request['subject'];
        $data['details'] = $request['details'];
        Review::create($data);

        return redirect()->route('review');
    }
}
