<!DOCUMENT html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>WellCome Home!!!!! <?php echo e(session('x')); ?></td>
                    <a href="/logout">Logout</a>

                    <table>
                        <tr>
                            <td>Name :</td>
                            <td><?php echo e($nm); ?></td>
                        </tr>
                        <tr>
                            <td>ID :</td>
                            <td><?php echo e($id); ?></td>
                        </tr>
                        <tr>
                            <td>CGPA :</td>
                            <td><?php echo e($cgpa); ?></td>
                        </tr>
                    </table>
                </tr>
            </table>
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\FirstLaravel\resources\views/home/index.blade.php ENDPATH**/ ?>