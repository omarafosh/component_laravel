<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    // use UploadImage;
    public function store(Request $request ){
        //   $upload=$this->StoreImage($request->image);
          dd($request->all());
    }
}
