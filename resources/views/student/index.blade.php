<!DOCTYPE html>
<html>
    <head>
        <title>Userlist</title>
    </head>
    <body>
        <h1>See all User</h1>
        <a href="/home">Back</a> ||
        <a href="/logout">Logout</a>

        <table border='1'>
            <tr>
                <td width='20%'>ID</td>
                <td width='20%'>Name</td>
                <td width='20%'>Password</td>
                <td width='20%'>Action</td>
            </tr>

            @foreach($user as $std)
                <tr>
                    <td>{{$std['id']}}</td>
                    <td>{{$std['username']}}</td>
                    <td>{{$std['password']}}</td>
                    <td>
                        <a href="{{route('student.edit', [$std['id']])}}">Edit</a> |
                        <a href="{{route('student.delete', [$std['id']])}}">Delete</a> |
                        <a href="{{route('student.details', [$std['id']])}}">Details</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>