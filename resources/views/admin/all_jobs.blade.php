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
                <thead style="background-color:#CBC3E3;">
                    <tr>
                        <th>Capany Name<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Job Type  <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Open and End Date<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telephone <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Qulification <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Company Image <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Delete <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Update <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>

                     @foreach($data as $jobs)
                    <tr>               
                        <td>{{$jobs->name}}</td>                        
                        <td>{{$jobs->jobtype}} </td>
                        <td>{{$jobs->open}} - {{$jobs->end}}</td>
                        <td>{{$jobs->phone}} </td>
                        <td>{{$jobs->email}} </td>
                        <td>{{$jobs->qualification}} </td>
                         <td><img src="companyimage/{{$jobs->image}}"></td>

                       <td>
                            <p class="status cancelled"><a onclick="return confirm('Are you sure to delete this')"href="{{url('deletejob',$jobs->id)}}"
                         >Delete</a></p>
                        </td> 

                        <td>
                                                
                            <p class="status pending"><a href="{{url('updatejob',$jobs->id)}}">Update</a></p>
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
    