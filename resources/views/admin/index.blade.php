<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
        <head>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                    <fieldset style="width:200px">
                        <table>
                            <tr>
                                <td><center><a href="{{route('admin.register')}}">Register Employee</a></center></td>
                            </tr>
                            <tr>
                                <td><center><a href="{{route('admin.view')}}">View Employees</a></center></td>
                            </tr>
                            <tr>
                                <td><center><a href="{{route('logout.index')}}">Logout</a></center></td>
                            </tr>
                        </table>
                    </fieldset>
            </center>
        </head>
    </body>
</html>