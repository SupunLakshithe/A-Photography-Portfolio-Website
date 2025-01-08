<html>

<?php include 'permit/fun-db.php' ?>

<head>
    <title>Gallery </title>
    <link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/lightbox.css" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body class="gallerybody">
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
                        <a class="nav-link active" href="gallery.php">Gallery</a>
                        <a class="nav-link" href="about.php">About</a>
                        <a class="nav-link" href="contact.php">Contact</a>
                        <a class="nav-link" href="packages.php">Packages</a>
                        <a class="nav-link" href="signin.php" id="signin-button">Sign in</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--------------
                           gallery
                                     -------------->

        <div class="container-fluid gallert ">

            <div class="buttons">
                <button class="btn btn-primary active-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#div1" aria-expanded="true" aria-controls="div1">All</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#div2"
                    aria-expanded="false" aria-controls="div2">Wildlife</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#div3"
                    aria-expanded="false" aria-controls="div3">Weddings</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#div4"
                    aria-expanded="false" aria-controls="div4">Portraits</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#div5"
                    aria-expanded="false" aria-controls="div5">Events</button>
            </div>


            <div id="gallery" class="pt-4 border-0 ">

                <div class="collapse show gallery" id="div1">

                    <?php
                    for ($x = 1; $x < 5; $x++) {
                        foreach (galids($x) as $id) {
                            $data = galselect($id);
                            $img = $data['image'];
                            echo "<a href='$img' data-lightbox='gallery'>
                            <img src='$img'>
                        </a>";
                        }
                    }
                    ?>

                </div>


                <div class="collapse gallery" id="div2">

                    <?php
                    foreach (galids(1) as $id) {
                        $data = galselect($id);
                        $img = $data['image'];
                        echo "<a href='$img' data-lightbox='gallery'>
                            <img src='$img'>
                        </a>";
                    }
                    ?>

                </div>


                <div class="collapse gallery" id="div3">

                    <?php
                    foreach (galids(2) as $id) {
                        $data = galselect($id);
                        $img = $data['image'];
                        echo "<a href='$img' data-lightbox='gallery'>
                            <img src='$img'>
                        </a>";
                    }
                    ?>

                </div>

                <div class="collapse gallery" id="div4">

                    <?php
                    foreach (galids(3) as $id) {
                        $data = galselect($id);
                        $img = $data['image'];
                        echo "<a href='$img' data-lightbox='gallery'>
                             <img src='$img'>
                        </a>";
                    }
                    ?>

                </div>


                <div class="collapse gallery" id="div5">

                    <?php
                    foreach (galids(4) as $id) {
                        $data = galselect($id);
                        $img = $data['image'];
                        echo "<a href='$img' data-lightbox='gallery'>
                            <img src='$img'>
                        </a>";
                    }
                    ?>

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
<script src="http://localhost/photgrapher-website/js/gallery.js"></script>
<script src="http://localhost/photgrapher-website/js/lightbox.js"></script>

</html>