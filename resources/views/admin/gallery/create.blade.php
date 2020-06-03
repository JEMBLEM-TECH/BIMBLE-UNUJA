@extends('admin.layouts.default')

@section('title','Bimble - Tambah Data Gallery')
@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Gallery</strong>
      </div>
      <div class="card-body card-block">
                                    <form method="post" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                                      @csrf
                                     
                                       <div class="form-group">
                                         <label for="kursus_id">Kursus</label>
                                         <select class="form-control" name="kursus_id" id="kursus_id">
                                           <option value=""> --- Pilih Paket Kursus ---</option>
                                         
                                           @foreach ($kursus as $kursus)      
                                         <option value="{{ $kursus->id }}">{{ $kursus->nama_kursus }}</option>
                                           @endforeach
                                          
                                         </select>
                                       </div>
                                        
                                    <div class="form-group">
                                      <label for="image">Image</label>
                                      <input type="file" class="form-control-file" name="image" id="imahe" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                        
                                       
                                      <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">
                                          Tambah Kursus
                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
@endsection