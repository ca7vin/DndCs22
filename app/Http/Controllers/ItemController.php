<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index(Request $request)
    {   
        $page = 1;
        if ($request->page == null) {
            $page = 1;
        } else {
            $page = $request->page;
        }
        $next = $request->page + 1;
        $previous = $request->page - 1;
        $items = Http::get("https://api.open5e.com/magicitems/?page=$page")["results"];

        return view("front/pages/items",compact('items', 'next', 'previous', 'page'));
    } 

    public function search(Request $request){
        $itemSearch = $request->input('itemSearch');
        $item = Http::get("https://api.open5e.com/magicitems/?search=$itemSearch")["results"];
        // dd($item);
        $count = Http::get("https://api.open5e.com/magicitems/?search=$itemSearch")["count"];
        return view("front/pages/itemSearch",compact('item', 'itemSearch', 'count'));
    }

    

}
