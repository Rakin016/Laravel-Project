@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-2 text-center">
        <div class="row">
            <div class="col-12 col-md-12 offset-md-0">
                <div class="card shadow-sm bg-dark">
                    <table class="table table-dark table-hover table-striped text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th colspan="2">Action</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users->all() as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td colspan="2">
                                <a href="{{route('userList.delete', [Auth::user()->id,$user->id,$user->id])}}">Delete</a></td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-auto">
            </div>
        </div>

@endsection
