<?php

namespace App\Http\Controllers;
//===ここから追加===
use App\Listing;
use Auth;
use Validator;
//===ここまで追加===
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    //===ここから追加===
    //コンストラクタ （このクラスが呼ばれると最初にこの処理をする）
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
        $this->middleware('auth');
    }

    public function index()
    {
        $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
            
         // テンプレート「listing/index.blade.php」を表示します。
        return view('listing/index', ['listings' => $listings]);
    }

    public function new()
    {
         // テンプレート「listing/new.blade.php」を表示します。
        return view('listing/new');
        
    }

    public function store(Request $request)
    {
        //バリデーション（入力値チェック）
        $validator = Validator::make($request->all() , ['list_name' => 'required|max:255', ]);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // Listingモデル作成
        $listings = new Listing;
        $listings->title = $request->list_name;
        $listings->user_id = Auth::user()->id;

        $listings->save();
        // 「/」 ルートにリダイレクト
        return redirect('/');
    }

    public function edit($listing_id)
    {
        $listing = Listing::find($listing_id);
         // テンプレート「listing/edit.blade.php」を表示します。
        return view('listing/edit', ['listing' => $listing]);
    }

    public function update(Request $request)
    {
        //バリデーション（入力値チェック）
        $validator = Validator::make($request->all() , ['list_name' => 'required|max:255', ]);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
          return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $listing = Listing::find($request->id);
        $listing->title = $request->list_name;
        $listing->save();
        return redirect('/');
    }

    public function destroy($listing_id)
    {
        $listing = Listing::find($listing_id);
        $listing->delete();
        return redirect('/');
    }
    //===ここまで追加===
}