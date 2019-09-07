@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <a href="{{url('/class/create')}}"><button class="btn btn-primary">Tambah Kelas</button></a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                  {{session('status')}}
                </div>
            @endif
            <table class="table mt-3">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      {{-- <th scope="col">ID Class</th>
                      <th scope="col">User</th> --}}
                      <th scope="col">Nama kelas</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Durasi</th>
                      {{-- <th scope="col">Class Image</th> --}}
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($clases as $item)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                        {{-- <td>{{$item->id}}</td>
                        <td>{{$item->user->name}}</td> --}}
                        <td>{{$item->class_name}}</td>
                        <td>{{$item->class_description}}</td>
                        <td>{{$item->class_duration}}</td>
                        {{-- <td>{{$item->class_image}}</td> --}}
                        <td>
                          <a href="{{ url('class/'.$item->id)}}"><button class="btn btn-primary">Detail</button></a>
                          <a href="{{ url('class/'.$item->id.'/edit')}}"><button class="btn btn-success">Edit</button></a>
                          <form action="{{url('class/'.$item->id)}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
              </table>
                  <div class="pull-left">
                    <strong>Jumlah Class: {{$jumlah_class}}</strong>
                  </div>
        </div>
    </div>
@endsection
