<?php
if(isset($_POST['search']))
session_start();
// php file that contains the common database connection code
include "dbFunctions.php";

$queryItems = "SELECT * FROM asset";

$resultItems = mysqli_query($link, $queryItems) or
        die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($resultItems)) {
    $arrContent[] = $row;
}
mysqli_close($link);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
           * {box-sizing: border-box;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }

  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    img {
        border-radius: 5px 5px 0 0;
    }

    .container {
    padding: 2px 16px;
    }
    
  }

        </style>
        <style>
            img {
    width: 415px;
    height: 400px;
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

<style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        .navbar-brand {
            width: 50px;
            height: 50px;
            position: relative;
        }

        img,
        svg {
            width: 100px;
        }

        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type="text"] {
            background-color: #f1f1f1;
            width: 100%;
        }

        input[type="submit"] {
            background-color: DodgerBlue;
            color: #fff;
            cursor: pointer;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

        iframe {
            padding-left: 100px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
            padding: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        .button {
            background-color: #4caf50; /* Green */
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            padding-top: 10px;
            padding-bottom: 0px;
            margin-bottom: 0px;
            padding-left: 5px;
            padding-right: 5px;
            border-radius: 4px;
        }

        .button1 {
            background-color: #b88051;
            color: black;
        }

        .button1:hover {
            background-color: grey;
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
  
    <br><h3 style="text-align:center"><b>List of Assets</b></h3>
       
    <div class="bg-light py-5 service-5">
    <div class="container">
    
    <form action="userdisplay-blog-search.php" method="post">
    <div class="input-group">
        <input type="text" class="form-control" style="width: 85%" name="valueToSearch" id="" placeholder="Search...">
        <button class="form-control" style="width: 15%" name="search"  title="Search"><i class="bi bi-search"></i></button>
    </div>
    </form>


    <!-- Row -->
    <div class="row">
    <!-- Column -->
    <div class="col-md-4 ">
    <div class="card card-shadow border-0 mb-4"><a style="text-decoration: none "href="iframe.php">
    <div class="card-body d-flex">
    <div class="">
    <img style="width:400px; height:400px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($arrContent[0]['thumbnail']);?>"/>
    <h4 class="card-title "><?php echo $arrContent[0]['title']?></h4>
    <p class="mt-3">Publisher: <?php echo $arrContent[0]['publisher']?></p>
    <p class="mt-3">Author: <?php echo $arrContent[0]['author']?></p>
    <p class="mt-3">Intent: <?php echo $arrContent[0]['intent']?></p></br></br>
    </div>
    </div>
    </a></div>
    </div>
      
<!-- Column -->
<!-- Column -->
<div class="col-md-4 ">
    <div class="card card-shadow border-0 mb-4">
    <div class="card-body d-flex">
    <div class="">
    <h4 class="card-title "><?php echo $arrContent[1]['title']?></h4>
    <p class="mt-3">Skill Tags: <?php echo $arrContent[1]['skill_tags']?></p>
    <p class="mt-3">Publisher: <?php echo $arrContent[1]['publisher']?></p>
    <p class="mt-3">Category: <?php echo $arrContent[1]['category']?></p>
    <p class="mt-3">Author: <?php echo $arrContent[1]['author']?></p>
    <p class="mt-3">Intent: <?php echo $arrContent[1]['intent']?></p></br></br>
    </div>
    </div>
    </div>
    </div>
<!-- Column -->
<!-- Column -->

<!-- Column -->
<!-- Column -->

</div>
</div>
</div>
</div> 
        
    </body>
</html>