@extends('layout.mainlayout')

@section('content')

<div class="container-xl px-4 mt-4">
@if (Session::has('success'))
<script type="text/javascript">

Swal.fire({
  icon: 'success',
  title: 'Register Succesfully',
  text: 'บันทึกข้อูลสำเร็จ',
  footer: '<a href="">Why do I have this issue?</a>'
});

</script>

@endif


    <div class="row">
        <div class="col-xl-4 col-md-3 col-sm-2">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="200">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-6 col-xl-4">
            <!-- Account details card-->
            <form action="{{ route('updateProfileUserPage',$profilecard->id )}}" method="POST">
  
               @csrf
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                   
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{$profilecard->username}}" readonly>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6 col-sm-4">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" name="fristname" id="fristname" type="text" placeholder="Enter your first name" value="{{ $profilecard->fristname }}">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6 col-sm-4">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" name="lastname" id="lastname" type="text" placeholder="Enter your last name" value="{{ $profilecard->lastname }}">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6 col-sm-4">
                                <label class="small mb-1" for="inputOrgName">Organization name</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6 col-sm-4">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{$profilecard->email}}" readonly>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6 col-sm-4">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Enter your phone number" value="{{ $profilecard->phone }}">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6  col-sm-4">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" name="dob" id="dob" type="text" name="birthday" placeholder="Enter your birthday" value="{{ $profilecard->dob }}">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection