<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

    <!-- Scripts -->

{{--        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">--}}
{{--        <script src="{{asset('js/jquery.js')}}" defer type="application/javascript"></script>--}}
{{--        <script src="{{asset('js/popper.js')}}" defer type="application/javascript"></script>--}}
{{--        <script src="{{ asset('js/bootstrap.js') }}" type="application/javascript"></script>--}}
{{--    <script src="{{asset('js/app.js')}}" defer></script>--}}
{{--    <script src="{{asset('js/adminScript.js')}}" defer type="application/javascript"></script>--}}
{{--    <script src="{{asset('js/adminForumScript.js')}}" defer type="application/javascript"></script>--}}

<!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="{{asset('css/all.css')}}" rel="stylesheet">--}}

</head>

<body>
<div class="container mt-2 text-center ">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card shadow-sm bg-light">
                <div class="card-header"><h4 class=""><strong>Subscription Report</strong></h4></div>
                <div class="card-body">
                    <table border="1" class="table table-light table-striped table-hover table-striped text-center">

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

        </div>
        <div class="col-md-2 justify-content-center" >
        </div>
    </div>

</div>
</body>

</html>
