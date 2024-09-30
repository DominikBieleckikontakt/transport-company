<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
        $services = Service::orderBy('id', 'asc')->get();
        $specialitiesFirst = Speciality::orderBy('id', 'asc')->limit(2)->get();
        $sepcialitiesSecond = Speciality::orderBy('id', 'asc')->offset(2)->limit(2)->get();
        $slides = Slide::orderBy('id', 'asc')->get();
        return view('home', compact('services', 'specialitiesFirst', 'sepcialitiesSecond', 'slides'));
    }

    public function sendContact(Request $request) {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        try {
              Mail::to('jakub@digitalowa.pl')->send(new ContactMail($data));
              return redirect()->back()->with('success', 'Wiadomośc została wysłana');
          } catch (\Exception $e) {
              return redirect()->back()->with('error', 'Wiadomośc nie została wysłana. Spróbuj ponownie później.');
          }
        }
}
