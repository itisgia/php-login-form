<?php
    ob_start(); // start the Yaf_Session
    session_start(); // session start id will be generated
    // Session variables hold information about one single user, and are available to all pages in one application. - W3 schools

?>

<?php


$msg = '';
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    //username : itisjiah
    //pw: 1234
    if ($_POST['username'] === 'itisjiah' &&  $_POST['password'] === '1234' ) {
        $_SESSION['valid'] = true ; // by defulat it's false.
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'itisjiah'; // settomg session variable username
        // $_SESSION['username'] = $_POST['username']; //whatever the user enter
        echo ('You have entered valid username and password');
    } else {
        echo ('Please try again');

    }



}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body id="LoginForm">
        <div class="container">
            <h1 class="form-heading">PHP login Form</h1>
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <p>Please enter your email and password</p>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="Login">
                        <h3><?= $msg ?></h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username"placeholder="User name" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputPassword" name="password"placeholder="Password">
                        </div>
                        <button type="submit" name="login"class="btn btn-primary">Login</button>
                    </form>
                    click here to clean the <a href="logout.php" title="Logout"> Session</a>
                </div>
            </div>
        </div>
    </body>
</html>
