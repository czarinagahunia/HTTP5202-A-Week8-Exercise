<?php
//create session variable for login info
session_start();

if(isset($_POST['login'])) {
    $uname = "marie";
    $pword = "1234";
    if ($uname == $_POST['username'] && $pword == $_POST['password']) {
        $_SESSION['username'] = $uname;
        header("Location: securepage.php");
    } else {
        echo "Login credentials failed. <br />";
    }
}
?>

<form action="" method="post">
    Username: <input type="text" name="username" /><br />
    password: <input type="password" name="password" /><br />
    <input type="submit" name="login" value="Login" />
</form>
