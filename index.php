<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body class="homebody">
    <div class="container align-items-center">

        <!--------------
                            nav bar
                                    ---------------->

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h1 class="navbar-brand fs-1 heading" style="padding-left: 100px; margin-top: 15px;">Lismore's
                    Lens</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-ui-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="gallery.php">Gallery</a>
                        <a class="nav-link" href="about.php">About</a>
                        <a class="nav-link" href="contact.php">Contact</a>
                        <a class="nav-link" href="packages.php">Packages</a>
                        <a class="nav-link" href="signin.php" id="signin-button">Sign in</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--------------
                           headings
                                     -------------->

        <div>
            <div id="homeh1">
                <h1 class="heading">Lismore's Lens</h1>
                <h3 id="homeh3"><i>"Where Every Frame Tells a Story"</i></h3>
            </div>
        </div>

        <!-------------
                           cards
                                 ------------------->


        <div id="cards" class="row pt-4 cards">


            <div class="col-md-4">
                <div class="card cl">
                    <div class="image">
                        <img src="http://localhost/photgrapher-website/assets/img/gallery.jpg" />
                        <div class="text-white overlay align-items-center justify-content-center d-flex">
                            <h1>Gallery</h1>
                        </div>
                    </div>
                    <div class="card-inner">
                        <div class="header">
                            <h2>Gallery</h2>
                        </div>
                        <div class="content">
                            <p>Explore the beauty from third eye</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="card cm">
                    <div class="image">
                        <img src="http://localhost/photgrapher-website/assets/img/newscut.jpg" />
                    </div>
                    <div class="card-inner">
                        <div class="header">
                            <h2>The Best Photographer</h2>
                        </div>
                        <div class="content">
                            <p>Awarded as the best photographer from Lens magazin</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card cr">
                    <div class="image">
                        <img src="http://localhost/photgrapher-website/assets/img/hire.jpg" />
                        <div class="text-white overlay align-items-center justify-content-center d-flex">
                            <h1>Pricing</h1>
                        </div>
                    </div>
                    <div class="card-inner">
                        <div class="header">
                            <h2>Hire US</h2>
                        </div>
                        <div class="content">
                            <p>Explore The most suitable package for your budget</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <!------------------
                            Feedback section
                                            ------------------>

        <div id="feedback">

            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <!-- -------------------------------- -->
                    <div class="carousel-item active row">
                        <div class="col-sm-6">

                            <img src="http://localhost/photgrapher-website/assets/img/ai.jpg" class="d-block h-100" >

                        </div>

                        <div class="carousel-caption d-none d-md-block col-sm-6">

                            <h5>Kelvin Geor</h5>
                            <p>The Best photographer that i ever konw. Did a good job at my function..</p>

                        </div>

                    </div>

                    <!-- -------------------------------- -->
                    <div class="carousel-item row">
                        <div class="col-sm-6">

                            <img src="http://localhost/photgrapher-website/assets/img/ai.jpg" class="d-block h-100" >

                        </div>

                        <div class="carousel-caption d-none d-md-block col-sm-6">

                            <h5>Name</h5>
                            <p>Some representative placeholder content for the first slide.</p>

                        </div>

                    </div>

                    <!-- -------------------------------- -->
                    <div class="carousel-item row">
                        <div class="col-sm-6">

                            <img src="http://localhost/photgrapher-website/assets/img/ai.jpg" class="d-block h-100" >

                        </div>

                        <div class="carousel-caption d-none d-md-block col-sm-6">

                            <h5>Name</h5>
                            <p>Some representative placeholder content for the first slide.</p>

                        </div>

                    </div>


                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!--  end -->
    </div>
</body>

<script src="http://localhost/photgrapher-website/js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="http://localhost/photgrapher-website/js/jquery-ui-1.13.2/jquery-ui.js"></script>
<script src="http://localhost/photgrapher-website/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="http://localhost/photgrapher-website/js/hmpage.js"></script>

</html>