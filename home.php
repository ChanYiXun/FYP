<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

session_start();
// php file that contains the common database connection code
include "dbFunctions.php";

$queryItems = "SELECT * FROM assets";

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

    <?php
    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM assets WHERE CONCAT(`blog_id`, `title`, `blog`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
                            
    }
    else {
            $query = "SELECT * FROM tb_blogs";
            $search_result = filterTable($query);
        }

    ?>

    <!-- Row -->
    <div class="row">
    <!-- Column -->
    <div class="col-md-4 ">
    <div class="card card-shadow border-0 mb-4"><a style="text-decoration: none "href="iframe.php">
    <div class="card-body d-flex">
    <div class="">
    <h4 class="card-title "><?php echo $arrContent[0]['title']?></h4>
    <p class="mt-3">Skill Tags: <?php echo $arrContent[0]['skill_tags']?></p>
    <p class="mt-3">Publisher: <?php echo $arrContent[0]['publisher']?></p>
    <p class="mt-3">Category: <?php echo $arrContent[0]['category']?></p>
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