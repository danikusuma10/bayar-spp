@extends('users.layout')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name: </b>{{$user->name}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$user->email}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('users.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection