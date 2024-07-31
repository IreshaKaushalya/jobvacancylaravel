<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Jobs;

use App\Models\Companyphoto;

use App\Models\JobApplication;

use Notification;

use App\Notifications\SendEmailNotification;



class AdminController extends Controller
{
   public function addview(){

   if(Auth::id())

    {
      if(Auth::user()->usertype==1)

      {

        return view('admin.add_job'); 

      }
      else
        {

          return redirect()->back();

        }
      }
      else
      {
        return redirect('login');
      }  

     
   }


    public function upload(Request $request){

        $jobs=new jobs;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('companyimage',$imagename);

        $jobs->image=$imagename;


        $jobs->name=$request->name;
        $jobs->jobtype=$request->jobtype;
        $jobs->open=$request->open;
        $jobs->end=$request->end;
        $jobs->phone=$request->phone;
        $jobs->email=$request->email;
        $jobs->qualification=$request->qualification;

        $jobs->save();

        return redirect()->back()->with('message','Add Job Successfully..!');

    }


   public function  showapplications(){


       if(Auth::id())
      {
      
      if(Auth::user()->usertype==1)
      { 
       $data=JobApplication::all();

        return view('admin.showapplications',compact('data'));
      }       
      else
        {
          return redirect()->back();
        }
      }
      else
      {
        return redirect('login');
      }   
    }



   public function approved($id){

          $data=JobApplication::find($id);
          $data->status='Approved';
          $data->save();
           return redirect()->back();

   }

    public function cancel($id){

          $data=JobApplication::find($id);
          $data->status='Cancel';
          $data->save();
           return redirect()->back();

   }


 public function all_jobs(){

    $data=Jobs::all();

   return view('admin.all_jobs',compact('data'));

 }

 public function deletejob($id){

          $data=Jobs::find($id);
          
          $data->delete();
           return redirect()->back();

   }

   public function updatejob($id){

      $data=Jobs::find($id);
      return view('admin.updatejob',compact('data'));
   }


public function editjobs(Request $request, $id){

        $jobs=Jobs::find($id);

        $jobs->name=$request->name;
        $jobs->jobtype=$request->jobtype;
        $jobs->open=$request->open;
        $jobs->end=$request->end;
        $jobs->phone=$request->phone;
        $jobs->email=$request->email;
        $jobs->qualification=$request->qualification;

   if($image)
      {
        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('companyimage',$imagename);

        $jobs->image=$imagename;

      }

         $jobs->save();

       return redirect()->back()->with('message','Update Job Successfully..!');

   }

     public function emailview($id){

      $data=JobApplication::find($id);
      return view('admin.email_view',compact('data'));
   }


 public function sendemail(Request $request,$id){

 $data = JobApplication::find($id);

      $details=[

         'greeting' =>$request->greeting,
         'date'=> $request->date,
         'time'=> $request->time,
         'body'=> $request->body,
         'actiontext'=> $request->actiontext,
         'actionurl' => $request->actionurl,
         'endpart'=> $request->endpart

      ];

      Notification::send($data,new SendEmailNotification($details));

     return redirect()->back()->with('message',' Email Send is Successfully..');
     }



   public function  add_clientphoto(){
   

        return view('admin.add_clientphoto'); 

     
      }  



public function upload_companypho(Request $request){



       $jobs=new Companyphoto;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('CompanyLogoimage',$imagename);

        $jobs->image=$imagename;

        $jobs->save();

        return redirect()->back()->with('message','Add Job Successfully..!');

      }
     



}
