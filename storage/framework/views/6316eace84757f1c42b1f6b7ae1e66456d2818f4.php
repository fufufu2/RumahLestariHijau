

<?php $__env->startSection('title', 'Homestay - Rumah Hijau'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="boostrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <style>
        .signUpHere {
            color: green;
            font-weight: bold;
            text-decoration: none
        }

        .signUpHere:hover {
            color: red;
            font-weight: bold;
            text-decoration: none
        }

    </style>

    <div style="
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 55%;
            width: 457px;
            text-align: center; box-shadow: 5px 12px 12px gray">
        <img src="gambar/logo_white.jpeg" style="height:350px; width: 100%">
        <form method="POST" action="/login">
            <?php echo csrf_field(); ?>

            <input type="email" id="email" name="email" placeholder="Enter your email"
                style="width: 90%; height: 40px; margin: 3%">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div style="text-align: right; padding-right: 4%; font-size: 75%; font-weight: bold"><a href="/forgot"
                    style="text-decoration: none">Forgot Password?</a></div>
            <input type="password" id="password" placeholder="Enter your password" name="password"
                style="width: 90%; height: 40px; margin-bottom: 10%">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <button type="submit"
                style="padding: 3%; padding-right: 10%; padding-left: 10%; border: none; background-color: rgb(37, 209, 37); color: white; border-radius: 5px; box-shadow: 2px 4px 6px black">
                Login</button>
            <p style="text-align: right; font-size: 75%; padding: 2%">Don't have an Account? <a href="/register"
                    class="signUpHere">Sign up here</a></p>
        </form>
    </div>
</body>

</html>

<?php echo $__env->make('template.logintemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/login.blade.php ENDPATH**/ ?>