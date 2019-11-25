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

            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($std['id']); ?></td>
                    <td><?php echo e($std['username']); ?></td>
                    <td><?php echo e($std['password']); ?></td>
                    <td>
                        <a href="<?php echo e(route('student.edit', [$std['id']])); ?>">Edit</a> |
                        <a href="<?php echo e(route('student.delete', [$std['id']])); ?>">Delete</a> |
                        <a href="<?php echo e(route('student.details', [$std['id']])); ?>">Details</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>
</html><?php /**PATH C:\xampp\htdocs\SecoundLaravel\resources\views/student/index.blade.php ENDPATH**/ ?>