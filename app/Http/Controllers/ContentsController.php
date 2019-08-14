<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class ContentsController extends Controller
{
    public function home(Request $request){
        $version = [];
        $last_updated = $request->session()->pull('last_updated');
        $version['last_updated'] = $last_updated;
        $version['version'] = '0.1.2'; 
        return view('contents/home', $version);
    }

    public function upload(Request $request){
        $version = [];
        if($request->isMethod('post')){

            $this->validate($request,

                [
                    'image_upload' => 'mimes:jpeg,bmp,png'
                ]

                );

                Input::file('image_upload')->move('images', 'attractions.jpg');
                return redirect('/');
            }
        return view('contents/upload', $version);
    }
}
