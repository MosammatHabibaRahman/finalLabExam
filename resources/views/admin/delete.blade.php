<!DOCTYPE html>
<html>
<head>
	<title>Delete Employee</title>
</head>
<body>
	
	<a href="/admin/viewEmployees">Back</a> | 
	<a href="/logout">Logout</a>
	
	<center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
		<form method="post">
			<fieldset style="width:350px">
				<h3>Are you sure you want to delete <%= info.name %>?</h3>
        <input type="submit" id="yes" name="yes" value="Yes"/>
        <input type="submit" id="no" name="no" value="No"/>
			</fieldset>
		</form>
	</center>
</body>
</html>