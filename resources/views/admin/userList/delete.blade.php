<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<h1>Delete user</h1>
	<a href="{{route('admin.userList.index',Auth::user()->id)}}">Back</a>

	<form method="post" action="{{route('admin.userList.destroy',[Auth::user()->id,$user->id])}}">
		@csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$user->id}}">
		<table border="1">

			<tr>
				<td>Name</td>
				<td>{{$user['name']}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$user['email']}}</td>
			</tr>

			<tr>
				<td>User type</td>
				<td>{{$user['type']}}</td>
			</tr>
		</table>

		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
</body>
</html>
