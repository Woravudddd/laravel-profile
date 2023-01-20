@extends('layout.mainlayout')

@section('content')
<div class="row row-cols-1 row-cols-md-2 g-4">
  @foreach($profilecard as $profilecards)
<div class="col">
    <div class="card">
    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 90px;   display: block;
  margin-left: auto;
  margin-right: auto;">
      <div class="card-body ">
        <h5 class="card-title text-center">{{ $profilecards->name }}</h5>
        <p class="card-text">Profile</p>
        <ul class="list-group list-group-flush rounded ">
              <li class="list-group-item align-items-center p-2">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">ตำแหน่งที่เคยทำ : {{ $profilecards->position }}</p>
              </li>
              <li class="list-group-item align-items-center p-2">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">เบอร์โทร :  {{ $profilecards->phone1 }}</p>
              </li>
         </ul>
         
         <div class=" text-center">
           <a href="{{ route('profileincard.card',$profilecards->id) }}" class="btn btn-outline-success">ดูข้อมูล</a>
         </div>
       

      </div>
    </div>
  </div>
  @endforeach
  </div>
 

@endsection