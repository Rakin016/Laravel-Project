@extends('layouts.admin')

@section('content')
    <div class="container mt-2 text-center" >
        <div class="h1">
                        Welcome to Admin home
                    </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-img bg-secondary">
                        <img src="{{asset('img/'.$user->photo)}}" class="rounded mx-auto d-block img-thumbnail" style="width: auto;height: 200px">
                    </div>
                    <div class="card-body text-center">
                        <div class="h5 text-left">
                            <div class="row">
                                <div class="col-6 text-right">Name: </div>
                                <div class="col-6">{{$user->name}}</div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-right">Phone: </div>
                                <div class="col-6">{{$user->phone}}</div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-right">Gender: </div>
                                <div class="col-6">{{$user->gender}}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
            </div>
        </div>
@endsection
