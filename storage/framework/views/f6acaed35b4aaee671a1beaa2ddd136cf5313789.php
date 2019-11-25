<!DOCTYPE html>
<html>
    <head>
        <title>User Details</title>
    </head>
    <body>
        <form action="" method='post'>
            <h1>Delete User </h1>
                <a href='/student/userlist'>Back</a> ||
                <a href="/logout">Logout</a>

            <table border='0'>
                <tr>
                    <td>Do you wanna delete this user ? </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Id:  </td>
                    <td><?php echo e($u['id']); ?></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><?php echo e($u['username']); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name='submit' value='Delete'></td>
                </tr>
            </table>
       </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\SecoundLaravel\resources\views/student/delete.blade.php ENDPATH**/ ?>