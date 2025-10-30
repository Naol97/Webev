<?php

    session_start();

    $errors = [
        'login' => $_SESSION['login_error'] ?? '',
        'register' => $_SESSION['register_error'] ?? ''
    ];

    $activeform = $_SESSION['active_form'] ?? 'login';

    session_unset();

    function showError($error){
        return !empty($error) ? "<p class='errorMessage'>$error</p>" : '';
    }

    function showActiveForm($formName, $activeform){
        return $formName === $activeform ? 'active' : '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="oo <?= showActiveForm('login',$activeform); ?>" id="logpage">
    <div class="outerbox">
        <form action="reg_log_handler.php" style="width: 80%;" method="post">
            <h1>Login</h1>
            <?= showError($errors['login']);  ?>
            <!-- <lable for="email" class="lal" > E-Mail </lable><br> -->
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <!-- <lable for="password" class="lal"> Password </label><br> -->
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="loginButton" id="login">Login</button>
            <p class="par">Don't have an account? <a href="#" onclick="showForm('regpage')" id="rreg">Register</a></p>
        </form>
    </div>
    </div>


    <div class="oo <?= showActiveForm('register', $activeform) ?>" id="regpage">
    <div class="outerbox">
        <form action="reg_log_handler.php" style="width: 80%;" method="post">
            <h1>Register</h1>
            <?= showError($errors['register']);  ?>
            <!-- <lable for="Name" class="lal"> Name </lable><br> -->
            <input type="text" name="name" placeholder="Enter Name" required><br>
            <!-- <lable for="email" class="lal"> E-Mail </lable><br> -->
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <!-- <lable for="password" class="lal"> Password </label><br> -->
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="registerButton" id="register">Register</button>
            <p class="par">Already have an account? <a href="#" onclick="showForm('logpage')" id="loggin">Login</a></p>
        </form>
    </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>