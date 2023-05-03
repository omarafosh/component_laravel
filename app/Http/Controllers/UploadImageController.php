<?php

namespace App\Http\Controllers;

use App\Traits\UploadImage;
use App\View\Components\uploadImage as ComponentsUploadImage;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    // use UploadImage;
    public function store(Request $request ){
        //   $upload=$this->StoreImage($request->image);
          dd($request->all());
    }
}
