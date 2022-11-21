<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main=Main::get();

        return view('pages.main',compact('main'));
    }




    public function update(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',

        ]);
        return'abc';
    }

}
