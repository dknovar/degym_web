@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- <div class="col-10">
                <h3>halaman jadwal</h3>
            </div> -->
            
        </div>
        <div class="row">
            <div class="col-10">
                <a href="{{url('/jadwal/create')}}"><button class="btn btn-primary">Tambah Jadwal</button></a>
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
                      <th scope="col">ID Jadwal</th>
                      <th scope="col">User</th>
                      <th scope="col">Bulan</th>
                      <th scope="col">Tahun</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($jadwal as $item)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->id}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->timetable_month}}</td>
                        <td>{{$item->timetable_year}}</td>
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
                    <strong>Jumlah Class: {{$jumlah_jadwal}}</strong>
                  </div>
        </div>
    </div>
@endsection
