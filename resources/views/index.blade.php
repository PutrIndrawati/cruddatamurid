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
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Tambah Baru" class="btn btn-success btn-sm">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->nim }}</td>
                            <td>{{ $d->nama_lengkap }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->jurusan }}</td>
                            <td>
                                <a href="{{url('read',array($d->id))}}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{url('edit',array($d->id))}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url('delete',array($d->id))}}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
@endsection
