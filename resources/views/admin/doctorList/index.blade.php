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
                            <th>Phone</th>
                            <th>License</th>
                            <th>Qualifications</th>
                            <th>Speciality</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users->all() as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->license}}</td>
                            <td>{{$user->qualifications}}</td>
                            <td>{{$user->specialty}}</td>
                            <td>{{$user->docStatus}}</td>
                            <td colspan="2">


                                    <button class="btn btn-outline-danger my-2 my-sm-0 ban"  name="ban"
                                        id="ban" data-toggle="modal" data-target="#ban{{$user->userId}}">
                                        <i class="fa fa-times fa-lg"></i>Ban</button>

                                    <button class="btn btn-outline-success my-2 my-sm-0" name="valid" id="valid" data-toggle="modal" data-target="#valid{{$user->userId}}"><i class="fa fa-check fa-lg"></i>Valid</button>

                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-auto">
            </div>
              @foreach($users->all() as $user)
        <div class="modal fade" id="ban{{$user->userId}}" tabindex="-1" aria-labelledby="ban{{$user->userId}}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ban{{$user->userId}}Label">Are you sure to ban?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="{{route('doctorList.ban',[Auth::user()->id,$user->userId,$user->userId])}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="docUId" value="{{$user->userId}}">
                            <input type="submit" value="ban" class="btn btn-outline-primary my-2 my-sm-0"/>
                        </form>
                        <button type="button" class="btn btn-outline-secondary my-2 my-sm-0" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($users->all() as $user)
        <div class="modal fade" id="valid{{$user->userId}}" tabindex="-1" aria-labelledby="valid{{$user->userId}}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="valid{{$user->userId}}Label">Are you sure to make valid?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="{{route('doctorList.valid',[Auth::user()->id,$user->userId,$user->userId])}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="docUId" value="{{$user->userId}}">
                            <input type="submit" value="valid" class="btn btn-outline-primary my-2 my-sm-0"/>
                        </form>
                        <button type="button" class="btn btn-outline-secondary my-2 my-sm-0" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>

@endsection
