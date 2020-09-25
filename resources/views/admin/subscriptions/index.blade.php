@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-2 text-center">
        <div class="row">
            <div class="col-12 col-md-12 offset-md-0">
                <div class="card shadow-sm bg-dark">
                    <table class="table table-dark table-hover table-striped text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th>Patient's Name</th>
                            <th>Patient's User Id</th>
                            <th>Phone</th>
                            <th>Subscription Plan</th>
                            <th>Payment method</th>
                            <th>Registration Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users->all() as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->id}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->planName}}</td>
                            <td>{{$user->paymentMethod}}</td>
                            <td>{{$user->regDate}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-md-2 justify-content-center" >
                <div class="card shadow-sm bg-transparent  rounded p-3 position-fixed">

                    <a class="btn btn-outline-primary font-weight-bold my-2 my-sm-0 m-1" href="{{URL::to(route('admin.subReport.gen',Auth::user()->id))}}"
                                data-toggle="tooltip" data-placement="bottom" title="Download Report"><i class="fa fa-print fa-lg"></i> Print Report</a>
                </div>
            </div>
        </div>

@endsection
