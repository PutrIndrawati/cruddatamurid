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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Detail Murid</h4>
            </div>
            <div class="panel-body">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="nim" name="nim" id="nim" value="{{$data->nim}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <div class="small text-danger">masukkan min 5 karakter</div>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{$data->nama_lengkap}}" class="form-control" readonly>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" value="{{$data->alamat}}" class="form-control" readonly>
                        </div>
                    </div>                     
                    <div class="form-group row">    
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label> 
                        <div class="col-sm-10">   
                            <input type="text" name="jurusan" id="jurusan" value="{{$data->jurusan}}" class="form-control" readonly>
                        </div>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Kembali" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
@endsection