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
                ><img src="osmosis logo.png" alt="pod-logo" style="width: 100px"
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
                    "<?php echo $arrContent[5]['content']?>";
            },
        });
    </script>

    <div class="row" style="margin-left: 50px; margin-right: 50px; ">
        <div class="column" style="background-color: white;">
            <h2 style="font-size:22px"><b>Uploaded by</b></h2>
            <p style="font-size:16px">Poh Moi</p>
        </div>
        <div class="column" style="background-color: white">
            <h2 style="font-size:22px"><b>Authored by</b></h2>
            <p style="font-size:16px">GreenSafe</p>
        </div>
        <div class="column" style="background-color: white">
            <h2 style="font-size:22px"><b>Additional info</b></h2>
            <p style="font-size:16px">3 days</p>
        </div>
        <div class="column" style="background-color: white; color: grey;">
            PNG·270 mins·published 18/05/2023
        </div>
    </div>

    <div class="intent-asset" style="padding-left: 50px; padding-right: 50px;">
        <h2>Intent of this Asset</h2>
        <p>"Next to explaining what I do for a living, the second question I most frequently hear is: "What's the difference between information Architecture and User Experience?" The line always seems to blur between the two, even though there's clearly a difference. How should I go about explaining it?"</p>
        AUGUST 21ST,2012
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

