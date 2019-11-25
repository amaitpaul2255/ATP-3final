<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
       <form action="" method='post'>
        <h1>Update User</h1>
            <a href='/student/userlist'>Back</a> ||
            <a href="/logout">Logout</a>

            <table border='1'>
                <tr>
                    <td width='20%'>ID</td>
                    <td><input type="text" name='uid' value="{{$u['id']}}"></td>
                </tr>
                <tr>
                    <td width='20%'>Name</td>
                    <td><input type="text" name='name' value="{{$u['username']}}"></td>
                </tr>
                <tr>
                    <td width='20%'>Password</td>
                    <td><input type="text" name='password' value="{{$u['password']}}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name='submit' value='submit'></td>
                </tr>
            </table>
       </form>
    </body>
</html>