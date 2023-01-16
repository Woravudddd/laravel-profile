
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column sticky-top" id="sidebar">
    <ul class="nav flex-column text-white w-100">
    @guest
    <a href="/" class="nav-link h3 text-white my-2">
        Create Profile </br>With Us
      </a>
      @endguest
    @auth
      {{auth()->user()->name}}
      <a href="/" class="nav-link h3 text-white my-2">
        Profile </br>{{ Auth::user()->username }}
      </a>
      @endauth
     <li  class="nav-link">
        <i class="bx bxs-dashboard"></i>
        <a href="/">
        <span class="mx-2">Home</span></a>
      </li>
      @auth
      {{auth()->user()->name}}
     <li  class="nav-link">
        <i class="bx bx-user-check"></i>
        <a href="{{ route('profile.login') }}">   <span class="mx-2">Profile</span></a>
      </li>
     <li class="nav-link">
      <a href="/member">  <i class="bx bx-conversation"></i>
        <span class="mx-2">Contact</span></a>
      </li>
      <li class="nav-link">
      <a href="/home/createitem">  <i class="bx bx-conversation"></i>
        <span class="mx-2">Create</span></a>
      </li>
      <li class="nav-link">
      <a href="{{ route('cardprofile.login') }}">  <i class="bx bx-conversation"></i>
        <span class="mx-2">Profile1</span></a>
      </li>
    </ul>
    @endauth
   

   
  </div>
  <div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-dark bg-dark text-light px-5  sticky-top">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
     
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  
    @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('profile.login') }}" class="btn btn-outline-light me-2">{{ Auth::user()->username }}</a>
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest

      
   
  </div>

    </nav>