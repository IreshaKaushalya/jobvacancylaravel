<!DOCTYPE html>
<html lang="en">
<head>

 <style type="text/css">
     

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



       

                
                <form action="{{ url('upload_companypho')}}" method="POST" enctype="multipart/form-data">
                        
                       @csrf   


                     <div style="padding:25px;margin-left: 40%; margin-top: 8%;">


                      <p class="text-p">Company Logo Image :</p>
                        <input type="file" name="file">

                    </div>

                     
               <div style="padding:25px;">
                 <input type="submit" name="sent"class="btn-getstarted">
            </div>

                  



@include('admin.scirpi')


      
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>