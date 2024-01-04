<?php
include_once APPROOT . '/helpers/session_helper.php';
?>

<?php flash('login') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-black text-yellow-500 p-8 rounded-md w-full text-center flex flex-col items-center justify-center">
    <div class="bg-gray-700 p-8 rounded shadow-md w-full max-w-xl text-center">
        <h1 class="text-2xl mb-4 text-green-500 mx-auto">Please Login</h1>

        <?php flash('login') ?>

        <form method="post" action=" <?php echo URLROOT ?>/Users/login" class="flex flex-col">
            <input type="hidden" name="type" value="login" class="hidden">
            <input type="text" name="name/email" placeholder="Username/Email..."
                class="p-2 mb-2 border rounded bg-gray-900 text-white">
            <input type="password" name="password" placeholder="Password..."
                class="p-2 mb-4 border rounded bg-gray-900 text-white">
            <button type="submit" name="submit" class="bg-green-500 text-white p-2 rounded cursor-pointer">Log
                In</button>
        </form>
        <a href="<?php echo URLROOT; ?>/pages/signup">Sign Up</a>

        <div class="form-sub-msg mt-4"><a href="<?php echo URLROOT; ?>/pages/newPassword"
                class="text-gray-400">Forgotten Password?</a>
        </div>
    </div>
</body>

</html>