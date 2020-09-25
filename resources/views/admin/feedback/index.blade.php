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
                            <th>User Type</th>
                            <th colspan="2">Feedback</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users->all() as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->feedback}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-auto">
            </div>

            <div class="col-md-2 justify-content-center" >
                <div class="card shadow-sm bg-transparent  rounded p-3 position-fixed">

                    <a class="btn btn-outline-primary font-weight-bold my-2 my-sm-0 m-1" href="{{URL::to(route('admin.report.gen',Auth::user()->id))}}"
                                data-toggle="tooltip" data-placement="bottom" title="Download Report"><i class="fa fa-print fa-lg"></i> Print Report</a>
                </div>
            </div>
        </div>

@endsection
