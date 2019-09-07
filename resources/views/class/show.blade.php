@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3>Detail class</h3>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>ID Class</th>
                    <td>{{$class->id}}</td>
                </tr>
                <tr>
                    <th>Dibuat Oleh</th>
                    <td>{{$class->user->name}}</td>
                </tr>
                <tr>
                    <th>Nama Class</th>
                    <td>{{$class->class_name}}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>{{$class->class_description}}</td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td>{{$class->class_duration}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>{{$class->class_image}}</td>
                </tr>
                <tr>
                    <th>Create At</th>
                    <td>{{$class->created_at}}</td>
                </tr>
                <tr>
                    <th>Update At</th>
                    <td>{{$class->updated_at}}</td>
                </tr>
              </table>
        </div>
    </div>
@endsection
