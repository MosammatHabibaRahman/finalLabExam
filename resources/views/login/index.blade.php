<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
    <center>
      <h1>Job Portal</h1>
    </center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<form method = "POST">
			@csrf
			<center>
				<fieldset style="width:250px">
					<legend>LOGIN</legend>
					<table>
                        <tr>
                            <td>Username: </td>
                            <td><input type="text" name="username" id="username" value=""></td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td><input type="password" name="password" id="password" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" name="login" id="login" value="Login"></center></td>
                        </tr>
                    </table>
				</fieldset>
			</center>
		</form>
	</body>
</html>