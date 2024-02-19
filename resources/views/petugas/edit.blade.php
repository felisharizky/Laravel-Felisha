@extends('template.master')

@section('header', "Update Data Petugas")
    
@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
            <form action="{{route('petugas.update', ["petuga" => $petuga->id_petugas])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col d-flex justify-content-center">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control @error("username"){{'is-invalid'}} @enderror" id="exampleUsername" placeholder="Username" value="{{ $petuga->username }}">
                                @error('username')
                                <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control @error("password"){{'is-invalid'}} @enderror" id="examplePassword" placeholder="Password" value="{{$petuga->password}}">
                                @error('password')
                                <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control @error("petugas"){{'is-invalid'}} @enderror" id="examplePetugas" placeholder="Nama Petugas" value="{{$petuga->nama_petugas}}">
                                @error('nama_petugas')
                                <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="level">Level</label><br>
                                <input type="radio" name="level" value="admin" required {{ $petuga->level === 'admin' ? 'checked' : '' }}> Admin
                                <input type="radio" name="level" value="petugas" required {{ $petuga->level === 'petugas' ? 'checked' : '' }}> Petugas
                                @error('level')
                                <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
