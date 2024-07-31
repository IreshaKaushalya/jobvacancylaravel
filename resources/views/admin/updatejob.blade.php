<!DOCTYPE html>
<html lang="en">
<head>

<base href="/public">

 <style type="text/css">
      span
      {
        display: inline-block;
        width: 100px;
      }

      .btn-getstarted
      {
        border: none;
        cursor: pointer;
        padding:15px;
        margin-left: 40%;
        box-shadow: 0 2px 6px #ffc473;
        background-color: #ffa426;
        border-color: #ffa426;
        color: #fff;
      }

      .btn-getstarted:hover
       {
        background-color: #45a049;
        
       }

     

     
      </style>

@include('admin.css')



</head>


 
 @include('admin.Sidebar')

@include('admin.navbar') 


<body style="background-color: #D1EAEA;">
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>


  @if(session()->has('message'))

        <div class="alert alert-success"style="padding:25px;margin-left:25%; border-color: #ffa426;box-shadow: 0 2px 26px #ffc473;background-color: #ffa426;margin-top:10%">
          
          <button type="button" class="close" data-dismiss="alert">X
          </button>

          {{session()->get('message')}}
        </div>
        @endif

                
                <form action="{{url('editjobs',$data->id)}}" method="POST" enctype="multipart/form-data">
                        
                       @csrf   

                    <div style="padding:25px;margin-left: 40%;margin-top:8%">
                         <span>Capany Name : </span>
                            <input type="text"name="name" value="{{$data->name}}"style="color:black;"required>                                
                    </div>



                    <div style="padding:25px;margin-left: 40%;">
                        <span>Job Type : </span>
                            <select name="jobtype" id="jobtype">
                            <option value="">--Select Job Role--</option>
                        @foreach($data as $jobs )

                            <option value="{{$data->jobtype}}">{{$data->jobtype}}</option>


                        @endforeach
                            
                        </select>                            
                    </div>
               

                   
                    <div style="padding:25px;margin-left: 40%;">
                       <span>Open : </span>
                          <input type="date"name="open"value="{{$data->open}}"style="color:black;"required>                               
                    </div>
                   

                    <div style="padding:25px;margin-left: 40%;">
                     <span>End Date :</span>
                        <input type="date" name="end" value="{{$data->end}}"style="color:black;"required>
                    </div>


                    <div style="padding:25px;margin-left: 40%;">
                       <span>Telephone :</span>
                         <input type="number"name="phone" value="{{$data->phone}}"style="color:black;"required>                            
                    </div>

                
                    <div style="padding:25px; margin-left: 40%;">
                      <span>Email :</span>                        
                        <input type="email"name="email"value="{{$data->email}}"style="color:black;"required>                                
                    </div>



                     <div style="padding:25px; margin-left: 40%;">
                        <span>Qualification:</span>
                        <textarea name="qualification" style="color:black;" required>{{ $data->qualification }}</textarea>
                    </div>
                      



                        <div style="padding:25px;margin-left: 40%;"> 
                        	 <p class="text-p">Company Old Image :</p>
                    		<img width="150px" heghth="150" src="companyimage/{{$data->image}}">
                    	</div>


                     <div style="padding:25px;margin-left: 40%;">
                      <p class="text-p">Company New Image :</p>
                        <input type="file" name="file">

                    </div>

                     
              	<div style="padding:25px;">
                 	<input type="submit" name="sent"class="btn-getstarted">
            	</div>

                  



@include('admin.scirpi')


      
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>