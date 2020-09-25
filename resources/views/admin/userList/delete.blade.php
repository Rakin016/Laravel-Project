@extends('layouts.admin')

@section('content')
	<h1>Delete user</h1>

	<form method="post" action="{{route('admin.userList.destroy',[Auth::user()->id,$user->id])}}">
		@csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$user->id}}">
		<table border="1">

			<tr>
				<td><strong>Name: </strong></td>
				<td>{{$user['name']}}</td>
			</tr>
			<tr>
				<td><strong>Email: </strong></td>
				<td>{{$user['email']}}</td>
			</tr>

			<tr>
				<td><strong>User type: </strong></td>
				<td>{{$user['type']}}</td>
			</tr>
		</table>

<br>
		<h3><strong>Are you sure?</strong></h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br>
	<form action="{{route('admin.userList.index',Auth::user()->id)}}">
    	<input type="submit" value="Back" />
	</form>

@endsection
