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
                                <td><center><a href="{{route('admin.add')}}">Register Employer</a></center></td>
                            </tr>
                            <tr>
                                <td><center><a href="{{route('admin.view')}}">View Employers</a></center></td>
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