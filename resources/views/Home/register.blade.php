@extends('layout.mainlayout')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />


        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3  ms-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3  ms-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3  ms-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>




        <div class="form-group form-floating mb-3 ms-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <br>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                     <label class="form-lable">first-name</label>
                     <input type="text" class="form-control" id="fname" value="{{ old('fristname') }}" name="fristname" placeholder="first-name">

                </div>
                <div class="col-md-6">
                     <label class="form-lable">last-name</label>
                     <input type="text" class="form-control" id="lname" value="{{ old('lastname') }}" name="lastname"  placeholder="lastname"  >

                </div>
                <div class="col-md-6">
                     <label class="form-lable">phone</label>
                     <input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone"  placeholder="phone"  >

                </div>
                <div class="col-md-6 ">
                     <label class="form-lable">birthday</label>
                     
                     <input type="text" class="form-control" value="{{ old('dob') }}" name="dob" id="dob"  placeholder="birthday" >
              
              
                  
                </div>
                </div>
                <br>

        <button class="btn btn-lg btn-primary mt-3" type="submit">Register</button>

        <p class="mt-5 mb-3 text-muted">&copy; {{date('Y')}}</p>
    </form>

  
    <script type="text/javascript">

       $('#dob').datepicker({
           
            format: "yyyy/mm/dd",
      });
    </script>


@endsection
