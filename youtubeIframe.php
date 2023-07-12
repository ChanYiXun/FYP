<?php
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
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Add Bootstrap CSS here -->
    <!-- CSS only -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
    />
    <!-- Add Bootstrap JS here -->
    <!-- JavaScript Bundle with Popper -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
    ></script>
    <!-- fontawesome -->
    <script
        src="https://kit.fontawesome.com/2d4084604a.js"
        crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="tags.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Osmosis Learn</title>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>

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
    <nav
        class="navbar navbar-expand-sm navbar-light"
        style="background-color: white"
    >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <!-- Navbar brand -->
            <a
                class="navbar-brand nabarimg"
                style="cursor: default; width: 20%"
                href=""
                ><img src="osmosis logo.png" alt="pod-logo"
            /></a>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <form autocomplete="off" action="/action_page.php">
                        <div class="autocomplete" style="width: 300px">
                            <input
                                id="myInput"
                                type="text"
                                name="tags"
                                placeholder="search"
                            />
                        </div>
                        <button
                            type="submit"
                            style="border: none; background-color: white"
                        >
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </ul>
                <!-- Left links -->
                <!-- </div> -->
                <!-- Collapsible wrapper -->
                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="bab_0321_header nav-link"
                                href="
                        https://futureverse.osmosislearn.com/explore/assets"
                                >Explore
                                <span class="bab_0321_header sr-only"
                                    >(current)</span
                                ></a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="bab_0321_header nav-link"
                                href="javascript:void(0);"
                                data-toggle="modal"
                                data-target="#auth_modal"
                                >Create</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="bab_0321_header nav-link"
                                href="https://futureverse.osmosislearn.com/events/explore"
                                >Events</a
                            >
                        </li>
                        <login-nav-button></login-nav-button>
                        <signup-nav-button></signup-nav-button>
                    </ul>
                    <!-- Right elements -->
                </div>
                <!-- Container wrapper -->
            </div>
        </div>
    </nav>

    <div id="app">
        <iframe :src="iframeSrc" width="1600" height="800" style="margin-left:10%;"></iframe>
    </div>

    <script>
        new Vue({
            el: "#app",
            data: {
                iframeSrc: "",
            },
            created() {
                this.iframeSrc =
                    "<?php echo $arrContent[4]['content']?>";
            },
        });
    </script>

    <div class="row" style="margin-left: 50px; margin-right: 50px; ">
        <div class="column" style="background-color: white;">
            <h2 style="font-size:22px"><b>Uploaded by</b></h2>
            <p style="font-size:16px"><?php echo $arrContent[4]['publisher']?></p>
        </div>
        <div class="column" style="background-color: white">
            <h2 style="font-size:22px"><b>Authored by</b></h2>
            <p style="font-size:16px"><?php echo $arrContent[4]['author']?></p>
        </div>
        <div class="column" style="background-color: white">
            <h2 style="font-size:22px"><b>Additional info</b></h2>
            <p style="font-size:16px">3 days</p>
        </div>
        <div class="column" style="background-color: white; color: grey;">
            PNG·<?php echo $arrContent[4]['duration']?>·published 18/05/2023
        </div>
    </div>

    <div class="intent-asset" style="padding-left: 50px; padding-right: 50px;">
        <h2>Intent of this Asset</h2>
        <p>"<?php echo $arrContent[4]['intent']?></p>
        <?php echo $arrContent[4]['pub_date']?>
    </div>

    <section class="p-3 border-bottom"></section>
    <footer class="navbar navbar-expand-sm" style="background-color: #3a2718">
        <div class="container-fluid">
            <ul class="nav text-muted">
                <li class="nav-item">
                    <a
                        class="pl-2 pr-2 btn btn-footer"
                        style="color: #b88051"
                        href="https://futureverse.osmosislearn.com/about"
                        >About Us</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="pl-2 pr-2 btn btn-footer"
                        style="color: #b88051"
                        href="https://futureverse.osmosislearn.com/privacy-policy/mobile"
                        >Privacy Policy</a
                    >
                </li>
            </ul>
            <button class="button button1">
                <a
                    href="https://futureverse.osmosislearn.com/contact-us"
                    style="color: white; text-decoration: none"
                >
                    <p>We Love to Hear From You</p>
                </a>
            </button>
        </div>
    </footer>

    <div
        class="footer footer-btm"
        style="background-color: #503620; color: white"
    >
        <div class="footer container justify-content-end text-end">
            © 2023 Osmosis Learn
        </div>
    </div>
</body>
