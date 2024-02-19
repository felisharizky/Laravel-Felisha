@extends('template.master')

@section('header', "Show Kelas")
    
@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
                <div class="form-group row">
                    <div class="col d-flex justify-content-center">
                        <div class="row">
                            <div class="form-group">
                            <div class="col-md-15 ">
                                <input type="text" name="nama_kelas" class="form-control" id="exampleNama_kelas"
                                    placeholder="Nama Kelas" value="{{$kelas->nama_kelas}}" disabled>
                            </div>
                        </div>
                            <div class="col-md-15">
                                <input type="text" name="kompetensi_keahlian" class="form-control" id="exampleKompetensi_Keahlian"
                                    placeholder="Kompetensi Keahlian" value="{{$kelas->kompetensi_keahlian}}" disabled>
                            </div>             
                        </div>  
                    </div>
                </div> 
                <div class="card-footer">
                    <a href="{{route("kelas.index")}}" class="btn btn-info">Back</a>
                  </div>
                </form>
</div>

</div>
@endsection