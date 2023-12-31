
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheets/registerStylesheet.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include "navBar.php" ?>

<center>
    <h1 >Register</h1>
</center>
<center>
<form name="form" method="post" action="doRegister.php" >
    <fieldset>
        <legend style="color: black">Register Here</legend>
        <table>
            <tr>
                <td><label for="id_username">Username:</label></td>
                <td><input id="id_username" type="text" name="username"/></td>
            </tr>
            <tr>
            </tr>
            <td><label for="id_password">Password:</label></td>
            <td><input id="id_password" type="password" name="password"/></td>
            </tr>
            <tr>
                <td><label for="id_name">Name:</label></td>
                <td><input id="id_name" type="text" name="name"/></td>
            </tr>
            <tr>
                <td><label for="id_address">Address:</label></td>
                <td><input id="id_address" type="text" name="address"/></td>
            </tr>
            <tr>
                <td><label for="id_email">Email:</label></td>
                <td><input id="id_email" type="email" name="email"/></td>
            </tr>

        </table>
        <br><br><br>


        <button id="login" type="submit" /><span>Register</span></button>
        <button id="clear" type="reset"/><span>Clear</span></button>
    </fieldset>
</form>
</center>

<center>
    Already have an account? <a href="login.php">Login here</a>
</center>
</body>
</html>