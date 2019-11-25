<!DOCTYPE html>
<html>
    <head>
        <title>User Details</title>
    </head>
    <body>
        <h1>User Details</h1>
        <a href="/student/userlist">Back</a> ||
        <a href="/logout">Logout</a>

        <table border='1'>
            <tr>
                <td width='20%'>ID</td>
                <td><?php echo e($u['id']); ?></td>
            </tr>
            <tr>
                <td width='20%'>Name</td>
                <td><?php echo e($u['username']); ?></td>
            </tr>
            <tr>
                <td width='20%'>Password</td>
                <td>****</td>
            </tr>
        </table>
    </body>
</html><?php /**PATH C:\xampp\htdocs\SecoundLaravel\resources\views/student/details.blade.php ENDPATH**/ ?>