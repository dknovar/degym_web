@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <a href="{{url('/user/create')}}"><button class="btn btn-primary">Tambah User</button></a>
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
                  <th scope="col">ID User</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($list_user as $user)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="{{ url('user/'.$user->id)}}"><button class="btn btn-primary">Detail</button></a>
                      <a href="{{ url('user/'.$user->id.'/edit')}}"><button class="btn btn-success">Edit</button></a>
                      <form action="{{url('user/'.$user->id)}}" method="post" class="d-inline">
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
                <strong>Jumlah Class: {{$jumlah_user}}</strong>
              </div>
    </div>
</div>
@endsection
