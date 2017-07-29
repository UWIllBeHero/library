<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index(){
        $photos = Photo::paginate(8);
        return view('gallery')
            ->with('photos', $photos);
    }
}
