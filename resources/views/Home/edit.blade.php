@extends('layout.mainlayout')

@section('content')

<section  class=" mb-3 mt-3 px-3 py-3" style="background-color: #eee;">

<h1> Edit Profile</h1>

<form action="{{ route('update.profile',$user_id->id )}}" method="POST">
  
  @csrf
  <div class="container  mb-3 mt-3">
     <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <input  type="text" class="form-control mb-1 my-3" placeholder="Name" id="name" name="name" value="{{ $user_id->name }}"> 
            <input  type="text" class="form-control mb-1" placeholder="Position" id="position" name="position" value="{{ $user_id->position }}">
            <input  type="text" class="form-control mb-1" placeholder="Address" id="address" name="address" value="{{ $user_id->address }}">
            
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
          <div class="input-box">
                <div class="buttonTest text-center">
                    <button type="button" class="add-more btn btn-outline-success mt-3" id="add-more2">add field</button>
                </div>
                <p class="input-check text-red"></p>
            </div>
           
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
              <input  type="text" class="form-control mb-0" placeholder="Name" id='name1' name='name1' value=" {{ $user_id->name1}}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <input  type="text" class="form-control mb-0" placeholder="Email" id='email1' name='email1' value="{{ $user_id->email1 }}">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
              <input  type="text" class="form-control mb-0" placeholder="Phone" id='phone1' name='phone1' value="{{ $user_id->phone1 }}">
              </div>
            </div>
   
    
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
              <input  type="text" class="form-control mb-0" placeholder="Address" id='address1' name='address1' value="{{ $user_id->address1 }}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <progress value="{{ $user_id->progressvalue }}" max="100"  class="media-progress"></progress>
                <div id="progress-value"></div>

                <input type="hidden" id="progressvalue" name="progressvalue">

                <p class="mt-1 mb-1" style="font-size: .77rem;">Website Markup</p>
                <progress value="{{ $user_id->progressvalue2 }}" max="100" class="media-progress2"></progress>
                <div id="progress-value2"></div>

                <input type="hidden"  id="progressvalue2" name="progressvalue2">


                <p class="mt-1 mb-1" style="font-size: .77rem;">One Page</p>
                <progress value="{{ $user_id->progressvalue3 }}" max="100" class="media-progress3"></progress>
                <div id="progress-value3"></div>

                <input type="hidden"  id="progressvalue3" name="progressvalue3">

                <p class="mt-1 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <progress value="{{ $user_id->progressvalue4 }}" max="100" class="media-progress4"></progress>
                <div id="progress-value4"></div>

                <input type="hidden"  id="progressvalue4" name="progressvalue4">


                <p class="mt-1 mb-1" style="font-size: .77rem;">Backend API</p>
                <progress value="{{ $user_id->progressvalue5 }}" max="100" class="media-progress5"></progress>
                <div id="progress-value5"></div>

                <input type="hidden"  id="progressvalue5" name="progressvalue5">
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <button class="btn btn-success"  type="submit" id="submit" name="submit">บันทึก</button>

</form>
</section>


@endsection

<script>

window.addEventListener("load", function() {
   var CountButtonHomeClicks = 0 ;
  var addMoreButtons = document.querySelectorAll("#add-more2");
  addMoreButtons.forEach(function(button){
    button.addEventListener("click", function() {
           
      var div = document.createElement("div");
      
      CountButtonHomeClicks += 1;
      // Create a text input
      if(CountButtonHomeClicks <= 6){
      var text = document.createElement("input");
      text.setAttribute("type", "text");
      text.setAttribute("name", "hobby"+CountButtonHomeClicks); 
      text.setAttribute("id", "hobby"); 
      text.setAttribute("placeholder", "hobby");
      text.setAttribute("class", "text-center form-control mt-2");
      
  
      // add the file and text to the div
      div.appendChild(text);
  
      //Append the div to the container div
      button.parentElement.appendChild(div);

    }else{
      
      alert("Too much Box");


    }
    });
  });
});




</script>