<?php session_start();
include "../config/connect.php"; 
if (isset($_SESSION['username_unhas445'])) {
    header("LOCATION: ../dashboard");
}
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pass = md5($_POST['pass']);
    $query = mysqli_query($con,"SELECT * FROM admin WHERE username_admin='$name' AND password_admin='$pass'");
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);
    if ($row > 0){
        $_SESSION['username_unhas445'] = $data['username_admin'];
        $_SESSION['iduser_unhas445'] = $data['id_admin'];
        $_SESSION['level_unhas445'] = $data['level'];
        header("LOCATION: ../dashboard");
    }
    else {
        $_SESSION['errorlogin'] = "*Username atau password yang anda masukkan tidak valid";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style_login.css">
        <link rel="stylesheet" type="text/css" href="css/960_16_col.css">
        <link rel="stylesheet" type="text/css" href="css/960_24_col.css">
        <link rel="shortcut icon" href="../img/favicon.png">
        <title>Administrator</title>
    </head>
    <body class="body-login-form">  
        <div id='box'>
            <form action="" method="POST">
            <p class="title">Administrator</p>
            <p><input type="text" name="name" placeholder="Username" class="input-form-login" required></p>
            <p><input type="password" name="pass" placeholder="Password" class="input-form-login" required></p>
            <p><input type="submit" value="Login" class="submit-form-login" name="login"></p>
            <p class="pesan"><?php if (isset($_SESSION['errorlogin'])){echo $_SESSION['errorlogin']; unset($_SESSION['errorlogin']);}?></p>
            </form>
        </div>
    </body>
</html>
<?php mysqli_close($con); ?>