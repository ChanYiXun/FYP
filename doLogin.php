<?php
session_start();
$msg = "";

$entered_username = $_POST['email'];
$entered_password = $_POST['password'];

//connect to database
include ("dbFunctions.php");

$queryCheck = "SELECT * FROM user
          WHERE email='$entered_username'
          AND password = SHA1('$entered_password')";

$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['name'] = $row['name'];

    if (isset($_POST['remember'])) {
        setcookie("em", $row['name'], time() + 3600 * 24);
    }
    $msg = "<p><i>You are logged in as " . $_SESSION['name'] . "</p>";
    $msg .= "<p><a href='home.php'>Proceed to HomePage.</a></p>";
    $msg .= "<p> User is in the database </p>";
    } 
    else {
    $msg = "<p> User is not in the database </p>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <title>Items for Sale</title>
    </head>
    <body>
        <h3>Hotel Login</h3>
<?php
echo $msg;
?>
    </body>
</html>