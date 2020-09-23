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
                        <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="phone"><strong>Phone:</strong></label>
                                        <input type="text" class="form-control" name="phone"
                                               id="phone" placeholder="Phone" value="{{old('phone')}}"/>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label for="gender"><strong>Gender:</strong></label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option selected>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="form-group">
                                <label for="photo"><strong>Profile Picture:</strong></label>
                                <input type="file" class="form-control-file" name="photo" id="photo" accept="image/*">
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
