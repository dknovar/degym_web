@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3>Detail Jadwal</h3>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>Hari</th>
                    <td>{{$det_jadwal->hari}}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>{{$det_jadwal->gambar}}</td>
                </tr>
              </table>
        </div>
    </div>
@endsection
