@extends('template.master')

@section('header', "Update Data Kelas")
    
@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <form action="{{route('kelas.update', ["kela" => $kela->id_kelas])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col d-flex justify-content-center">
                        <div class="row">
                            <div class="form-group">
                            <div class="col-md-15 ">
                                <input type="text" name="nama_kelas" class="form-control @error("nama_kelas"){{'is-invalid'}} @enderror" id="exampleNama_kelas"
                                    placeholder="Nama Kelas" value="{{ $kela->nama_kelas }}">
                            </div>
                            @error('nama_kelas')
                            <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
                        @enderror
                        </div>
                            <div class="col-md-15">
                                <input type="text" name="kompetensi_keahlian" class="form-control @error("kompetensi_keahlian"){{'is-invalid'}} @enderror" id="exampleKompetensi_Keahlian"
                                    placeholder="Kompetensi Keahlian" value="{{$kela->kompetensi_keahlian}}">
                            </div>             
          @error('kompetensi_keahlian')
              <span class="error invalid-feedback" style="display: inline;">{{$message}}</span>
          @enderror
                        </div>  
                    </div>
                </div> 
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                  </div>
            </form>
</div>

</div>
@endsection