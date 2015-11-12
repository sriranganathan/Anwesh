<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration as Registration;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    
    public function index()
    {
         return view('welcome');
    }

    public function register()
    {
         return view('register');
    }

    public function store(Request $request)
    {
        $messages = [
       'digits_between' => 'The :attribute must be :max digits.',
        ];
        $v = Validator::make($request->all(), [
        'email1'                => 'required|email',
        'contact1'              => 'required|integer|digits_between:10,10',
        'name1'                 => 'required|string|max:255',
        'college1'              => 'required|string|max:255',
        'email2'                => 'required_with:contact2,name2,college2|email',
        'name2'                 => 'required_with:contact2,email2,college2|string|max:255',
        'contact2'              => 'required_with:email2,name2,college2|integer|digits_between:10,10',
        'college2'              => 'required_with:contact2,email2,name2|string|max:255',
        'email3'                => 'required_with:contact3,name3,college3|email',
        'name3'                 => 'required_with:contact3,email3,college3|string|max:255',
        'contact3'              => 'required_with:email3,name3,college3|integer|digits_between:10,10',
        'college3'              => 'required_with:contact3,email3,name3|string|max:255',
        'email4'                => 'required_with:contact4,name4,college4|email',
        'name4'                 => 'required_with:contact4,email4,college4|string|max:255',
        'contact4'              => 'required_with:email4,name4,college4|integer|digits_between:10,10',
        'college4'              => 'required_with:contact4,email4,name4|string|max:255',
        'abstract'              => 'required|max:5000',
        'file'                  => 'max:10240',
        'g-recaptcha-response'  => 'required|recaptcha',
        ],$messages);
    //redirect to registration page with errors if there is any
        if ($v->fails())
        {
            return redirect(action('HomeController@register'))->withErrors($v->errors())->withInput();
        }

        $registration                       = new Registration();
        $registration->email_1              = $request->email1;
        $registration->name_1               = $request->name1;
        $registration->contact_number_1     = $request->contact1;
        $registration->college_1            = $request->college1;
        $registration->email_2              = $request->email2;
        $registration->name_2               = $request->name2;
        $registration->contact_number_2     = $request->contact2;
        $registration->college_2            = $request->college2;
        $registration->email_3              = $request->email3;
        $registration->name_3               = $request->name3;
        $registration->contact_number_3     = $request->contact3;
        $registration->college_3            = $request->college3;
        $registration->email_4              = $request->email4;
        $registration->name_4               = $request->name4;
        $registration->contact_number_4     = $request->contact4;
        $registration->college_4            = $request->college4;
        $registration->abstract             = $request->abstract;

        $registration->save();
        if($request->file)
        {
            $destinationPath = base_path() . '/Upload/'; // upload path
            $extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
            $fileName = $registration->id .'.'.$extension; // renameing image
            $request->file('file')->move($destinationPath, $fileName);
            $registration->file_name = $fileName;
            $registration->save();
        }
        return view('success');
        
    }

}
