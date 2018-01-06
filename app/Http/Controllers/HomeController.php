<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registration as Registration;

use DB;
use Exception;
use Log;
use StdClass;
use Validator;
use View;

use App\Jobs\SendMailSG;

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
		
		$validator = Validator::make($request->all(), [
			'name1'     => 'required|string|max:255',
			'email1'    => 'required|email',
			'college1'  => 'required|string|max:255',
			'branch1'   => 'required|string|max:255',
			'year1'     => 'required|string|max:255',
			'state1'    => 'required|string|max:255',
			'contact1'  => 'required|integer|digits_between:10,10',

			'name2'     => 'required_with:contact2,email2,college2|string|max:255',
			'email2'    => 'required_with:contact2,name2,branch2,state2,year2,college2|email',
			'college2'  => 'required_with:contact2,branch2,state2,year2,email2,name2|string|max:255',
			'branch2'   => 'required_with:contact2,college2,state2,year2,email2,name2|string|max:255',
			'year2'     => 'required_with:contact2,college2,state2,branch2,email2,name2|string|max:255',
			'state2'    => 'required_with:contact2,college2,branch2,year2,email2,name2|string|max:255',
			'contact2'  => 'required_with:email2,branch2,state2,year2,name2,college2|integer|digits_between:10,10',

			'name3'     => 'required_with:contact3,email3,college3,year3,branch3,state3|string|max:255',
			'email3'    => 'required_with:contact3,name3,college3,year3,branch3,state3|email',
			'college3'  => 'required_with:contact3,email3,name3,year3,branch3,state3|string|max:255',
			'branch3'   => 'required_with:contact3,college3,state3,year3,email3,name3|string|max:255',
			'year3'     => 'required_with:contact3,college3,state3,branch3,email3,name3|string|max:255',
			'state3'    => 'required_with:contact3,college3,branch3,year3,email3,name3|string|max:255',
			'contact3'  => 'required_with:email3,name3,college3,year3,branch3,state3|integer|digits_between:10,10',
			
			'name4'     => 'required_with:contact4,email4,college4,year4,state4,branch4|string|max:255',
			'email4'    => 'required_with:contact4,name4,college4,year4,state4,branch4|email',
			'college4'  => 'required_with:contact4,email4,name4,year4,state4,branch4|string|max:255',
			'branch4'   => 'required_with:contact4,college4,state4,year4,email4,name4|string|max:255',
			'year4'     => 'required_with:contact4,college4,state4,branch4,email4,name4|string|max:255',
			'state4'    => 'required_with:contact4,college4,branch4,year4,email4,name4|string|max:255',
			'contact4'  => 'required_with:email4,name4,college4,year4,state4,branch4|integer|digits_between:10,10',

			'project_name'          => 'required|string|max:255',
			'project_category'      => 'required|in:c,nc',
			// 'g-recaptcha-response'  => 'required|recaptcha',
		],$messages);
		
		//redirect to registration page with errors if there is any
		if ($validator->fails())
		{
			return back()->withErrors($validator->errors())->withInput();
		}

		try
		{
		    DB::beginTransaction();
			$registration                    = new Registration;
			$registration->email_1           = $request->email1;
			$registration->name_1            = $request->name1;
			$registration->contact_number_1  = $request->contact1;
			$registration->college_1         = $request->college1;
			$registration->year_1            = $request->year1;
			$registration->state_1           = $request->state1;
			$registration->branch_1          = $request->branch1;
			
			$registration->email_2           = $request->email2;
			$registration->name_2            = $request->name2;
			$registration->contact_number_2  = $request->contact2;
			$registration->college_2         = $request->college2;
			$registration->year_2            = $request->year2;
			$registration->state_2           = $request->state2;
			$registration->branch_2          = $request->branch2;
			
			$registration->email_3           = $request->email3;
			$registration->name_3            = $request->name3;
			$registration->contact_number_3  = $request->contact3;
			$registration->college_3         = $request->college3;
			$registration->year_3            = $request->year3;
			$registration->state_3           = $request->state3;
			$registration->branch_3          = $request->branch3;
			
			$registration->email_4           = $request->email4;
			$registration->name_4            = $request->name4;
			$registration->contact_number_4  = $request->contact4;
			$registration->college_4         = $request->college4;
			$registration->year_4            = $request->year4;
			$registration->state_4           = $request->state4;
			$registration->branch_4          = $request->branch4;

			$registration->project_name      = $request->project_name;
			$registration->project_category  = $request->project_category;
			
			$registration->save();
			
			DB::commit();

			$uniq_id = 'PRGY18ING$$$'.md5('sds'.time().'000'.$registration->id);
			$registration->uniq_id = $uniq_id;
			$registration->save();

			$link = url('/')."/abstract?t=$uniq_id";
            $mail          = new StdClass;
            $mail->to      = $registration->email_1;
            $mail->from    = 'no-reply@pragyan.org';
            $mail->subject = 'Ingenium - Pragyan 2018';
            $mail->content = View::make("email",['link'=>$link,'name'=>$registration->name_1])->render();
            $mail->attachment = null;

            $this->dispatch(new SendMailSG($mail));
			return view('success');
		}
		catch(Exception $e) 
		{
			Log::error($e);
			DB::rollBack();
			abort(500);
		}
	}

	public function fileUploadView(Request $request)
	{
		$validator = Validator::make($request->all(),[
			't' => 'required',
		]);

		if($validator->fails())
		{
			abort(400);
		}

		$uniq_id = $request->input('t');
		$registration = Registration::where('uniq_id', $uniq_id)->first();

		if(!$registration) {
			abort(400);
		}
		
		return view('upload',['project_name'=>$registration->project_name,'name'=>$registration->name_1,'email'=>$registration->email_1,'uniq_id'=>$uniq_id]);
	}

	public function fileUpload(Request $request)
	{
		$validator = Validator::make($request->all(),[
			't' => 'required',
			'file'    => 'required|max:10240|mimes:pdf',
			// 'g-recaptcha-response'  => 'required|recaptcha'
		]);

		if($validator->fails())
		{
			return back()->withErrors($validator);
		}

		$uniq_id = $request->input('t');

		try
		{
			DB::beginTransaction();

			$registration = Registration::where('uniq_id', $uniq_id)->first();

			if(!$registration) {
				return back()->with('error','Invalid ID');
			}

			$destinationPath = base_path() . '/Upload/'; // upload path
			$extension = $request->file('file')->getClientOriginalExtension(); // getting file extension
			$fileName = $registration->id .'.'.$extension; // renaming image
			$request->file('file')->move($destinationPath, $fileName);
			$registration->file_name = $request->file('file')->getClientOriginalName();
			$registration->save();

			DB::commit();
			Log::info("Abstract submitted successfully by $registration->id");
			return view('success_abstract');
		}
		catch(Exception $e)
		{
			DB::rollBack();
			Log::error('Unable to submit abstract',['error'=>$e]);
			abort(500);
		}
	}

	public function phaseTwoView(Request $request) 
	{
		$validator = Validator::make($request->all(),[
			't' => 'required',
		]);

		if($validator->fails())
		{
			abort(400);
		}

		$uniq_id = $request->input('t');
		$registration = Registration::where('uniq_id', $uniq_id)->first();

		if(!$registration||((int)$registration->phase2)!=1) {
			abort(400);
		}
		
		return view('phaseTwo',['project_name'=>$registration->project_name,'project_category'=>$registration->project_category,'name'=>$registration->name_1,'email'=>$registration->email_1,'college'=>$registration->college_1,'uniq_id'=>$uniq_id]);
	}

	public function phaseTwo(Request $request)
	{
		$validator = Validator::make($request->all(),[
			't'    		   => 'required',
			'video_link'   => 'required|url',
			'presentation' => 'required|max:15360|mimes:pdf,ppt,pptx',
			'g-recaptcha-response'  => 'required|recaptcha'
		]);

		if($validator->fails())
		{
			Log::error('Unable to submit presentation');
			return back()->withErrors($validator);
		}

		$uniq_id = $request->input('t');

		try
		{
			DB::beginTransaction();

			$registration = Registration::where('uniq_id', $uniq_id)->first();

			if(!$registration||((int)$registration->phase2)!=1) {
				Log::error('Unable to submit presentation');
				return back()->with('error','Invalid ID');
			}

			$video_link = $request->input('video_link'); 

			$destinationPath = base_path() . '/Upload/'; // upload path
			$extension = $request->file('presentation')->getClientOriginalExtension(); // getting file extension
			$fileName = "phase2_".$registration->id.'.'.$extension; // renaming image
			$request->file('presentation')->move($destinationPath, $fileName);
			$registration->presentation = $request->file('presentation')->getClientOriginalName();
			$registration->video_link = $video_link;
			$registration->save();

			DB::commit();
			Log::info("Presentation submitted successfully by $registration->id");
			return view('success_presentation');
		}
		catch(Exception $e)
		{
			DB::rollBack();
			Log::error('Unable to submit abstract',['error'=>$e]);
			abort(500);
		}
	}
}
