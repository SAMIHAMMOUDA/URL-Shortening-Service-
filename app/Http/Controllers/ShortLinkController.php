<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function index()

    {
        $shortLinks = ShortLink::paginate(5);
        $clientIP = request()->ip();   
         return view('shortenLink', compact('shortLinks' , 'clientIP'));

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {
        $request->validate([
           'link' => 'required|url'
        ]);

        $input['link'] = $request->link;
        $input['code'] = str::random(6);

        ShortLink::create($input);

        return redirect('generate-shorten-link')
             ->with('success', 'Shorten Link Generated Successfully!');

    }

   

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function shortenLink($code)

    {

        $find = ShortLink::where('code', $code)->first();

        return redirect($find->link);


    }
}
