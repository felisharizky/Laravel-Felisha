@extends('template.master')

@section('header', "Masukkan Data Petugas")
    
@section('content')
<div class="row">
    <div class="col-lg-15">
        <div class="p-5">
            
            <div class="card-body">
                <form action="{{ route('petugas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control @error('username') {{ 'is-invalid' }} @enderror" value="{{ old('username') }}" required>
                        @error('username')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror" required>
                        @error('password')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label><br>
                        <input type="radio" name="level" value="admin" required> Admin
                        <input type="radio" name="level" value="petugas" required> Petugas
                        @error('role')
                            <br><span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>
</div>

</div>
@endsection