<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome home! {{$username}}</h1>
	<a href="/create">Create New User</a> |
	<a href="{{route('admin.userlist')}}">View User List</a> |
	<a href="/logout">logout</a>
	<br>

</body>
</html>