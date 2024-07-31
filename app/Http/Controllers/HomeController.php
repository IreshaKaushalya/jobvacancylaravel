<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Jobs;

use App\Models\JobApplication;

use App\Models\Companyphoto;

use App\Models\Contact;

class HomeController extends Controller
{
       public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $jobs=jobs::all();
                
                 $companyphoto = companyphoto::all();

                return view('user.home',compact('jobs','companyphoto'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
{
    if (Auth::id()) {

        return redirect('home');

    } else {

        $jobs = jobs::all();
        
        $companyphoto = companyphoto::all();

        return view('user.home', compact('jobs', 'companyphoto'));
    }
}



public function application(Request $request)
{
    $data = new JobApplication;

  
    if ($request->hasFile('upload')) {
        $upload = $request->file('upload');
        $uploadName = time() . '.' . $upload->getClientOriginalExtension();

       
        $upload->move(public_path('CV'), $uploadName);
        $data->upload = $uploadName;

        
    }    
    $data->first_name = $request->first_name;
    $data->last_name = $request->last_name;
    $data->email = $request->email;
    $data->job_role = $request->job_role;
    $data->address = $request->address;
    $data->city = $request->city;
    $data->pincod = $request->pincod;
    $data->date = $request->date;
    $data->status = 'In Progress';

    if (Auth::id()) {
        $data->user_id = Auth::user()->id;
    }

    
    $data->save();

    return redirect()->back()->with('message','Your Application Submited..!');

}

 public function myapplication(){

        if(Auth::id()){
            if(Auth::user()->usertype==0)
            {

                 $user_id=Auth::user()->id;
                 $applica=JobApplication::where('user_id',$user_id)->get();
                return view('user.myapplication',compact('applica'));
            }
            else
            {
                return redirect()->back();
            }

      }
      else{

        return redirect()->back();

      }
    }


  public function cancel_applica($id){

         $data=JobApplication::find($id);
        $data->delete();


    return redirect()->back();

    }


    public function jobvarcancy(){

    
       
        $jobs=jobs::all();

        return view('user.jobvarcancy',compact('jobs'));

        
            
    }


public function contact(Request $request)
{
    $data = new Contact;

    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;

    $data->save();

    return redirect()->back()->with('message', 'We will contact you soon!');
}

 public function service_details(){

    

        return view('user.service_details');

        
            
    }
}
