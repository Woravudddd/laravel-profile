@extends('layout.mainlayout')

@section('content')
<h1>Home</h1>
<a href="{{url('/admin')}}">go to admin</a>
<a href="{{url('/home')}}">go to home</a>
<a href="{{url('/member')}}">go to member</a>
    
@endsection