<!DOCTYPE html>
<html>
    <head>
        <title>Add Employee</title>
    </head>
    <body>
        <head>
            <a href="/admin">Back</a> |
            <a href="{{route('logout.index')}}">Logout</a>
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
                    @csrf
                    <fieldset style="width:270px">
                        <legend>Add Employee</legend>
                        <table>
                            <tr>
                                <td>Name: </td>
                                <td><input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <td>Phone No.: </td>
                                <td><input type="text" name="phone" value=""></td>
                            </tr>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="username" value=""></td>
                            </tr>
                            <tr>
                                <td>Password: </td>
                                <td><input type="password" name="password" value=""></td>
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