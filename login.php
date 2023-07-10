<!DOCTYPE html>
<?php
$rememberUsername = "";
include "dbFunctions.php";


//check if cookie is set, then set $rememberUsername to cookie
if (isset($_COOKIE['email'])) {
    $rememberUsername = $_COOKIE['email'];
}
?>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Login</title>
    </head>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                form {border: 3px solid #f1f1f1;}

                input[type=text], input[type=password] {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }

                button {b
                    background-color: #04AA6D;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                }

                button:hover {
                    opacity: 0.8;
                }

                .cancelbtn {
                    width: auto;
                    padding: 10px 18px;
                    background-color: #f44336;
                }

                .imgcontainer {
                    text-align: center;
                    margin: 24px 0 12px 0;
                }

                img.avatar {
                    width: 40%;
                    border-radius: 50%;
                }

                .container {
                    padding: 16px;
                }

                span.psw {
                    float: right;
                    padding-top: 16px;
                }

                /* Change styles for span and cancel button on extra small screens */
                @media screen and (max-width: 300px) {
                    span.psw {
                        display: block;
                        float: none;
                    }
                    .cancelbtn {
                        width: 100%;
                    }
                }
            </style>

<style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        footer {
            text-align: center;
            padding: 3px;
            background-color: DarkSalmon;
            color: white;
        }
    </style>
 
        </head>
        <body>
                    <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#news">Explore</a></li>
                    <li><a href="#contact">Create</a></li>
                    <li><a href="#about">Events</a></li>
                    <li><a href="#contact">Login</a></li>
                    <li><a href="#about">Sign Up</a></li>
                    </ul>

                <form method="post" action="doLogin.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table>
                            <tr>
                                <td><label for="id_email">Email:</label></td>
                                <td><input id="id_email" type="text" name="email"/></td>
                            </tr>
                            <tr>
                                <td><label for="id_password">Password:</label></td>
                                <td><input id="id_password" type="password" name="password"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" Value="Login"/></td>
                            </tr>
                        </table>
                    </fieldset>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </form>

        </body>
    </html>

