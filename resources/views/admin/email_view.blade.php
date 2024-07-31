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

                
                <form action="{{ url('sendemail',$data->id)}}" method="POST" >
                        
                       @csrf


   

                    <div style="padding:25px;margin-left: 40%;margin-top:8%">
                          <span>Capany Name : </span>
                            <input type="text"name="greeting"style="color:black;"required>
                                
                    </div>            

                    
                    <div style="padding:25px;margin-left: 40%;">
                       <span>Date </span>
                            <input type="date"name="date"style="color:black;"required>
                               
                    </div>
                   

                    <div style="padding:25px;margin-left: 40%;">
                     <span>Time :</span>
                       <input type="time" name="time"style="color:black;"required>
                    </div>

                    <div style="padding:25px;margin-left: 40%;">
                       <span>Body :</span>
                            <input type="text"name="body"style="color:black;"required>
                               
                    </div>



                
                    <div style="padding:25px; margin-left: 40%;">
                      <span>Action Text :</span>                        
                        <input type="text"name="actiontext"style="color:black;"required>                             
                    </div>

                    <div style="padding:25px; margin-left: 40%;">
                      <span>Action url :</span>                        
                        <input type="text"name="actionurl"style="color:black;"required>                                
                    </div>

                    <div style="padding:25px; margin-left: 40%;">
                      <span>End Part :</span>                        
                        <input type="text"name="endpart"style="color:black;"required>                                
                    </div>

                        
                  
                     

                     
               <div style="padding:25px;">
                 <input type="submit" name="sent"class="btn-getstarted">
            </div>

                  



@include('admin.scirpi')


      
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>