<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>NAME</td>
			<td>COMPANY</td>
			<td>CONTACT</td>
			<td>USERNAME</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($userlist); $i++)

			<tr>
				<td>{{$userlist[$i]->fullname}}</td>
				<td>{{$userlist[$i]->company}}</td>
				<td>{{$userlist[$i]->contact}}</td>
				<td>{{$userlist[$i]->username}}</td>
				<td>
					<a href="{{route('admin.edit', $userlist[$i]->id)}}">Edit </a> |
					<a href="{{route('admin.show', $userlist[$i]->id)}}">Details </a> |
					<a href="/delete/{{$userlist[$i]->id}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>