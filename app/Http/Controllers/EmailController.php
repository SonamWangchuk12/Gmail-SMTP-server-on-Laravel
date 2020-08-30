<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\ContactUs;
class EmailController extends Controller
{
    function index()
    {
     return view('products.enquiry');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'subject'=> 'required',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'subject'   =>  $request->subject,
            'email'   =>  $request->email,
            'message'   =>   $request->message
        );
        ContactUs::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'subject'       => $request->subject,
            'message'       => $request->message,
        ]);

     Mail::to('rahulpassi925@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
    }
}

?>
