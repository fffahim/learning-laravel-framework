<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('admin.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>

		<div>
			@foreach($errors->all() as $err)
				{{$err}} <br>
			@endforeach
		</div>
		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">
				<tr>
					<td>Fullname</td>
					<td><input type="text" name="fullname" value="{{$fullname}}"></td>
				</tr>
				
				<tr>
					<td>company</td>
					<td><input type="text" name="company" value="{{$company}}"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" value="{{$contact}}"></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>