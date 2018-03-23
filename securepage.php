<?php
//if session is there allow them into this page, otherwise redirect them to index
session_start();

if(isset($_SESSION['username'])){
    echo "Welcome <br />
    <form action='logout.php' method='post'>
        <input type='submit' name='logout' value='Logout' />
    </form>";
} else {
    header("Location:index.php");
    exit();
}

?>

