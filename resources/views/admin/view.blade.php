<!DOCTYPE html>
<html>
<head>
	<title>View Employees</title>
</head>
<body>
	
<a href="{{route('admin.index')}}">Back</a> | 
<a href="{{route('logout.index')}}">Logout</a>
	
	<center>
		<h1>All Employers</h1>
		<table border="1" style="width:800px">
			<tr>
				<th>NAME</th>
				<th>COMPANY</th>
				<th>CONTACT NO.</th>
				<th>USERNAME</th>		
				<th>PASSWORD</th>
				<th>ACTION</th>
			</tr>
	@for($i=0; $i != count($users); $i++)
		<tr>
			<td><center>{{$users[$i]->name}}</center></td>
			<td><center>{{$users[$i]->company}}</center></td>
			<td><center>{{$users[$i]->contact}}</center></td>
			<td><center>{{$users[$i]->username}}</center></td>
			<td><center>{{$users[$i]->password}}</center></td>
			<td><center><a href="{{route('admin.edit', [$users[$i]->id])}}">UPDATE</a> | <a href="{{route('admin.delete', [$users[$i]->id])}}">DELETE</a></center></td>
		</tr>
	@endfor
	</table>
		
	@foreach($errors->all() as $err)
	{{$err}} <br>
	@endforeach
	
	</center>
</body>
</html>