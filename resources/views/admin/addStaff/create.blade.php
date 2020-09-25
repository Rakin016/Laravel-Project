@extends('layouts.admin')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="text-center">
                            <div class="h5 text-danger">
                                {{session('msg')}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('admin.addStaff.store',Auth::user()->id)}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name"><strong>Name:</strong></label>
                                        <input type="text" class="form-control" name="name"
                                               id="name" placeholder="Name" value="{{old('name')}}"/>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="duration"><strong>Email:</strong></label>
                                        <input type="text" class="form-control" name="email"
                                               id="email" placeholder="Email" value="{{old('email')}}"/>
                                    </div>
                                </div>


                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="features"><strong>Password:</strong></label>
                                        <input type="password" class="form-control" name="password"
                                               id="password" placeholder="Password" value="{{old('password')}}"/>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="name"><strong>User Type:</strong></label>
                                    <select class="form-control" name="type" id="type">
                                        <option class="form-control">Staff</option>
                                    </select>
                                </div>


                                <div class="col-12 col-md-6">
                                    <label for="name"><strong>User Status:</strong></label>
                                    <select class="form-control" name="status" id="status">
                                        <option class="form-control">active</option>
                                    </select>
                                </div>


                                 <div class="col-12 col-md-6">
                                    <input type="submit" class="btn btn-primary pr-3 pl-3" value="Submit" id="submit"/>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>

            </div>
            <div class="col-auto">
            </div>
        </div>
        <div class="row">
            <div class="col-12 offset-sm-2 col-sm-8 text-danger">
                @foreach($errors->all() as $err)
                    {{$err}} <br>
                @endforeach
            </div>
        </div>
    </div>

@endsection
