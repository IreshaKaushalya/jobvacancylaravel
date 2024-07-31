<!DOCTYPE html>
<html lang="en">
<head>

@include('admin.css')



</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     
@include('admin.navbar')     

@include('admin.Sidebar')

<main class="table" id="customers_table">
       
       <section class="table__body">
            <table>
                <thead style="background-color: mediumorchid; ">
                    <tr>
                        
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Job Role <span class="icon-arrow">&UpArrow;</span></th>

                        <th> Address <span class="icon-arrow">&UpArrow;</span></th>
                         <th> City <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Pincode <span class="icon-arrow">&UpArrow;</span></th>
                        
                       
                        <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Applicant CV <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>


                        <th> Approved Application <span class="icon-arrow">&UpArrow;</span></th>
                        
                        <th>Send Mail<span class="icon-arrow">&UpArrow;</span></th>

                         <th> Cancel Application <span class="icon-arrow">&UpArrow;</span></th>
                         
                        


                    </tr>
                </thead>

                <tbody>

                	 @foreach($data as $applica)
                    <tr>
                        <td>{{$applica->first_name}}  {{$applica->last_name}} </td>
                        <td>{{$applica->email}}</td>  
                       <td> {{$applica->job_role}} </td>

                        <td> {{$applica->address}} </td> 
                        <td> {{$applica->city}}</td> 
                         <td> {{$applica->pincod}}</td>  

                        <td> {{$applica->date}}</td>
                        <td>
        @if($applica->upload)
            <a href="{{ url('/CV/' . $applica->upload) }}">Download CV</a>
        @else
            No file uploaded
        @endif
    </td> 

                        <td>{{$applica->status}}</td>





                         <td>
                            <p class="status delivered">
                         	<a  href="{{url('approved',$applica->id)}}"
                         >Approved</a></p>
                     </td>


                        <td>
                            <p class="status delivered">
                            <a href="{{url('emailview',$applica->id)}}"
                         >Send-Mail</a></p>
                        </td> 
                     
                         <td>
                            <p class="status cancelled">
                         	<a href="{{url('cancel',$applica->id)}}"
                         >Cancel</a></p>
                     	</td> 

                        
                      
                       
                    </tr>
                   @endforeach
                 
                   
                </tbody>
            </table>
        </section>
    </main>
    




@include('admin.scirpi')


      
 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
    