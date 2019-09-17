@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Tambah Jadwal!</h1>
                <!-- <h3>halaman class</h3> -->
            </div>
           <div>
                <form action="/jadwal" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="bulan" class="control-label">Bulan</label>
                        <div class="input-append date" id="datepicker" data-date="02-2012" 
                            data-date-format="mm-yyyy">

                        <input  type="text" readonly="readonly" name="bulan" >    
                        <span class="add-on"><i class="icon-th"></i></span>      
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="def_class" class="control-label">Hari</label>
                        <select class="form-control" name='hari'>
                        @foreach ($day_list as $day=> $value)
                            <option value="{{$day}}">{{$value}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="gambar_jadwal" name="gambar_jadwal">
                            <label class="custom-file-label" for="gambar_jadwal">Pilih Gambar</label>
                        </div>
                      </div>
                    
                    <div>
                        <input type="submit" value="Tambah Jadwal" class="btn btn-primary form-control mt-3">
                    </div>
                </form>
           </div>
        </div>
    </div>
<script>
$("#datepicker").datepicker( {
    format: "mm-yyyy",
    viewMode: "months", 
    minViewMode: "months"
});
</script>
@endsection
