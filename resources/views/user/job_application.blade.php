<div class="container">
        <div class="apply-box">
            <h1>Job Application </span></h1>

            <form action="{{ url('application')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-container">
                    <div class="form-control">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name" placeholder="Enter First Name">
                    </div>
                    <div class="form-control">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name" placeholder="Enter Last Name">
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-control">
                        <label for="job-role">Job Role</label>
                        <select name="job_role" id="job_role">


                            <option value="">--Select Job Role--</option>

                        @foreach($jobs as $jobs)

                            <option value="{{$jobs->name}}">{{$jobs->name}} ---job type--- {{$jobs->jobtype}}</option>


                        @endforeach
                            
                        </select>
                    </div>
                    <div class="textarea-control">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="50" rows="4" placeholder="Enter Address"></textarea>
                        
                    </div>
                    <div class="form-control">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter City">
                    </div>
                    <div class="form-control">
                        <label for="pincod">Pincode</label>
                        <input type="number" id="pincod" name="pincod" placeholder="Enter Pincod">
                    </div>
                    <div class="form-control">
                        <label for="date">Date</label>
                        <input value="2022-10-24" type="date" id="date" name="date" placeholder="Enter Date">
                    </div>
                    <div class="form-control">
                        <label for="upload">Upload Your CV</label>
                        <input type="file" id="upload" name="upload"/>
                    </div>
                    
                </div>
                <div class="button-container">
                    <button type="submit">Apply Now</button>
                </div>
            </form>
            
        </div>
    </div>