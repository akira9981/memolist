<?php

namespace App\Http\Controllers;
use App\Listing;
use Auth;
use Validator;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
        return view('listing/index', ['listings' => $listings]);
    }

    public function new()
    {
        return view('listing/new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , ['list_name' => 'required|max:255', ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $listings = new Listing;
        $listings->title = $request->list_name;
        $listings->user_id = Auth::user()->id;
        $listings->color = $request->list_color;
        $listings->save();
        return redirect('/');
    }

    public function edit($listing_id)
    {
        $listing = Listing::find($listing_id);
        return view('listing/edit', ['listing' => $listing]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all() , ['list_name' => 'required|max:255', ]);
        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $listing = Listing::find($request->id);
        $listing->title = $request->list_name;
        $listing->color = $request->list_color;
        $listing->save();
        return redirect('/');
    }

    public function destroy($listing_id)
    {
        $listing = Listing::find($listing_id);
        $listing->delete();
        return redirect('/');
    }
}