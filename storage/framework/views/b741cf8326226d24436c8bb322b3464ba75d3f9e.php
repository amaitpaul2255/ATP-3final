<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
       <fieldset>
            <legend>Login Form</legend>
            <form  method="post">
                <table>
                    <tr>
                        <td>Name: </td>
                        <td><input type="text" name='username' ></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name='password' ></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td><input type="submit" name='submit' value='Submit'></td>
                    </tr>
                </table>
            </form>
       </fieldset>
       <div>
                <?php echo e(session('msg')); ?>

       </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\SecoundLaravel\resources\views/login/index.blade.php ENDPATH**/ ?>