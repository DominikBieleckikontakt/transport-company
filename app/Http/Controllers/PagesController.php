<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\Speciality;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
        $services = Service::orderBy('id', 'asc')->get();
        $specialitiesFirst = Speciality::orderBy('id', 'asc')->limit(2)->get();
        $sepcialitiesSecond = Speciality::orderBy('id', 'asc')->offset(2)->limit(2)->get();
        $slides = Slide::orderBy('id', 'asc')->get();
        $testimonials = Testimonial::get();
        return view('home', compact('services', 'specialitiesFirst', 'sepcialitiesSecond', 'slides', 'testimonials'));
    }

    public function sendContact(Request $request) {
        $data = $request->validate([
            'service' => 'required',
            'from' => 'required',
            'to' => 'required',
            'phone' => 'required',
        ]);

        try {
              Mail::to('jakub@digitalowa.pl')->send(new ContactMail($data));
              return redirect()->back()->with('success', 'Message sent successfully! We will contact you soon.');
          } catch (\Exception $e) {
              return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
          }
        }
}
