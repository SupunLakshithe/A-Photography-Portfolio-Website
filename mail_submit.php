<html>

<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body class="contactbody">
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="gallery.php">Gallery</a>
                        <a class="nav-link" href="about.php">About</a>
                        <a class="nav-link active" href="contact.php">Contact</a>
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
                           contact
                                 ------------------->


        <?php $name=$_POST["name"] ?>
            


        <?php $valid=false; ?>
        <div class="container-fluid px-5 my-5 contact">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row g-0">

                                <div class="text-center mb-4">
                                    <div class="h3 fw-light">Contact Form</div>

                                    <?php    if($valid): ?>
                                    <h2>Thank you for contacting us !</h2>
                                    <a href=".." role="button" class="btn btn-primary">home</a>

                                    <?php else: ?>
                                    <p class="pt-3">Data not valid ...</p>
                                    <a href="contact.php" role="button" class="btn btn-primary">Re-submit</a>

                                    <?php endif ?>
                                </div>
                                <!-- End of contact form -->


                            </div>

                        </div>
                    </div>
                </div>
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