<!DOCTYPE html>
<html>
    <head>
        <title>Update Employee Info</title>
    </head>
    <body>
        <head>
            <a href="/admin">Back</a> |
            <a href="/logout">Logout</a>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<br>
            <br>
            <center>
                <form action="" method="POST">
                    <fieldset style="width:270px">
                        <legend>Update Employee Info</legend>
                        <table>
                            <tr>
                                <td>Name: </td>
                                <td><input type="text" name="name" value="<%= emp.name %>"></td>
                            </tr>
                            <tr>
                                <td>Phone No.: </td>
                                <td><input type="text" name="phone" value="<%= emp.phone %>"></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="username" value="<%= emp.username %>"></td>
                            </tr>
                            <tr>
                                <td>Password: </td>
                                <td><input type="password" name="password" value="<%= emp.password %>"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="add" value="Add"> <input type="submit" name="cancel" value="Cancel"></center></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </center>
        </head>
    </body>
</html>