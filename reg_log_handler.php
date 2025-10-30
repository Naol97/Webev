

<?php

    session_start();

    require_once('database.php');




    if(isset($_POST['registerButton'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $Rquery = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $Rquery);

    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['register_error'] = 'Email already Exists';
        $_SESSION['active_form'] = 'register';
    }

    else{
    $query = "INSERT INTO users (name, email, password)
                VALUES ('$name','$email','$hash')";

    mysqli_query($conn, $query);

    }
    header("Location: index.php");

    exit();
    }




    if(isset($_POST['loginButton'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Rquery = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $Rquery);

    if(mysqli_num_rows($result)>0){

    $Rusers = mysqli_fetch_assoc($result);

    $hashedPWD = $Rusers['password'];


    if(password_verify($password , $hashedPWD)){

        $_SESSION['name'] = $Rusers['name'];
        $_SESSION['email'] = $Rusers['email'];

        header("Location: loggedin.php");

    exit();

}
    }

    $_SESSION['login_error'] = 'Incorrect email or Password';
    $_SESSION['active_form'] = 'login';

    header("Location: index.php");
    exit();
    }

?>