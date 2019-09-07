@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Create Class!</h1>
                <h3>halaman class</h3>
            </div>
           <div>
                <form action="/class" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_class" class="control-label">Nama Class</label>
                        <input type="text" name="nama_class" id="nama_class" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="def_class" class="control-label">Deskripsi</label>
                        <input type="text" name="def_class" id="def_class" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="durasi_class" class="control-label">Durasi Class</label>
                        <input type="text" name="durasi_class" id="durasi_class" class="form-control">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class="custom-file-label" for="gambar_class">Choose file</label>
                        </div>
                      </div>
                    {{-- <div class="form-group">
                            <label for="gambar_class" class="control-label">Gambar</label>
                            <input type="text" name="gambar" id="gambar" class="form-control">
                    </div> --}}
                    <div>
                        <input type="submit" value="Tambah Class" class="btn btn-primary form-control mt-3">
                    </div>
                </form>
           </div>
        </div>
    </div>
@endsection
