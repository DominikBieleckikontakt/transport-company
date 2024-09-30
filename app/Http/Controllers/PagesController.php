<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slide;
use App\Models\Speciality;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $services = Service::orderBy('id', 'asc')->get();
        $specialitiesFirst = Speciality::orderBy('id', 'asc')->limit(2)->get();
        $sepcialitiesSecond = Speciality::orderBy('id', 'asc')->offset(2)->limit(2)->get();
        $slides = Slide::orderBy('id', 'asc')->get();
        return view('home', compact('services', 'specialitiesFirst', 'sepcialitiesSecond', 'slides'));
    }

    public function contact (Request $request) {
        $data = $request->validate([
            'name' => 'required',
            
        ])
    }
}
