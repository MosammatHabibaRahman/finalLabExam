<!DOCTYPE html>
<html>
<head>
	<title>View Employees</title>
</head>
<body>
	
	<a href="/admin">Back</a> | 
  <a href="/logout">Logout</a>
	
	<center>
		<h1>All Employees</h1>
		<table border="1" style="width:800px">
			<tr>
				<th>NAME</th>
				<th>CONTACT NO.</th>
				<th>USERNAME</th>		
				<th>PASSWORD</th>
				<th>ACTION</th>
			</tr>
      <%for(var i=0; i<list.length; i++) { %>
			<tr>
				<td><center><%= list[i].name %></center></td>
				<td><center><%= list[i].phone %></center></td>
				<td><center><%= list[i].username %></center></td>
        <td><center><%= list[i].password %></center></td>
				<td><center><a href="/admin/update/<%=list[i].id%>">UPDATE</a>| <a href="/admin/delete/<%=list[i].id%>">DELETE</a></center></td>
			</tr>
      <% } %>
		</table>
	</center>
</body>
</html>