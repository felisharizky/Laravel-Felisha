@extends('template.master')

@section('header', "Show Petugas")
    
@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="p-5">
                <div class="form-group row">
                    <div class="col d-flex justify-content-center">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleUsername"
                                    placeholder="Username" value="{{$petugas->username}}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                                <input type="text" name="password" class="form-control" id="examplePassword"
                                    placeholder="Petugas" value="{{$petugas->password}}" disabled>
                            </div>  
                            <div class="form-group col-md-6">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" id="exampleNama_Petugas"
                                    placeholder="Nama Petugas" value="{{$petugas->Nama_Petugas}}" disabled>
                            </div>  
                            <div class="form-group col-md-6">
                                <label for="level">Level</label><br>
                                <input type="text" name="level" class="form-control" id="exampleLevel"
                                    placeholder="level" value="{{$petugas->level}}" disabled>
                            </div>             
                        </div>  
                    </div>
                </div> 
                <div class="card-footer">
                    <a href="{{route("petugas.index")}}" class="btn btn-info">Back</a>
                  </div>
                </form>
</div>

</div>
@endsection