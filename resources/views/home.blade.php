@extends('layout.master')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
        <a class="nav-link" href="{{url('about')}}">About</a>
        <a class="nav-link" href="{{url('create')}}">Input Data</a>
        <a class="nav-link" href="{{url('/')}}">View Data</a>
        <a class="nav-link" href="{{url('login')}}">Login</a>
        <a class="nav-link" href="{{url('logout')}}">Logout</a>
      </div>
    </div>
  </div>
  </nav>
            <div class="panel-body">
            <p style="text-align:center"><h2>SELAMAT DATANG DI HALAMAN HOME</h2></p>
                <table class="table table-striped">
                    Halaman Home
                </table>
           </div>
            
@endsection
