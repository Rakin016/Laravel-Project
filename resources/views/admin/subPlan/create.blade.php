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
                        <form method="post" action="{{route('admin.subPlan.store',Auth::user()->id)}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name"><strong>Name:</strong></label>
                                        <input type="text" class="form-control" name="name"
                                               id="name" placeholder="Name" value="{{old('name')}}"/>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="duration"><strong>Duration(In Months):</strong></label>
                                        <input type="text" class="form-control" name="duration"
                                               id="duration" placeholder="Duration" value="{{old('duration')}}"/>
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="features"><strong>Features:</strong></label>
                                        <input type="text" class="form-control" name="features"
                                               id="features" placeholder="Features" value="{{old('features')}}"/>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="price"><strong>Price(In Taka):</strong></label>
                                        <input type="text" class="form-control" name="price"
                                               id="price" placeholder="Price" value="{{old('price')}}"/>
                                    </div>
                                </div>

                            <div class="form-group">
                                <label for="subplanPic"><strong>Plan Picture:</strong></label>
                                <input type="file" class="form-control-file" name="subplanPic" id="subplanPic" accept="image/*">
                            </div>

                            <div class="row">
                                 <div class=" col-12 text-center">
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
