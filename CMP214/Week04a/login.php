<?php
session_start();
$_SESSION["username"] = "admin01";
if (isset($_SESSION["username"]) && $_SESSION["username"] !=""){
    header("Location:./index.php");
}
else{
    echo"<h1> Set the PHP Session</h1>";
}

if (isset($_POST["btnsubmit"])) {
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $dbUsername = "admin01";
    $dbPassword = "1234";
    if ($username == $dbUsername && $password == $dbPassword){
        $_SESSION["username"] = $dbUsername;
        header("Location:./index.php");

    } else {
        echo "<script>alert('Invalid Username or Password')</script>";
    }
}
?>

<form action="login.php" method="post">
    <label>Username:</label>
    <input type="text" name="txtusername"/>
    <label>Password:</label>
    <input type="password" name="txtpassword" />
    <input type="submit" value= "Submit" name="btnsubmit" />

</form>