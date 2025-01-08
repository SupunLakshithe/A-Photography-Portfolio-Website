<html>
<?php include 'permit/fun-db.php' ?>
<head>
    <title>Sing In Page</title>
    <link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body class="Signinbody">
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
                        <a class="nav-link" href="contact.php">Contact</a>
                        <a class="nav-link" href="packages.php">Packages</a>
                        <a class="nav-link active" href="signin.php" id="signin-button">Sign in</a>
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
                        signin
                              ------------------->

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Check if form is submitted using the POST method
        
            $name=$_POST["username"];
            $password=$_POST["password"];
            //check the database for insert crodentials
            $level=signin($name,$password);

                //return user to
           if($level=="1")
           {
            header('Location: http://localhost/photgrapher-website/permit/user-gal.php');
           }elseif($level=='2'){
            header('Location: http://localhost/photgrapher-website/permit/index.php');
           }else{
            $valide=false;
            header('Location:http://localhost/photgrapher-website/signin.php');
           }
        }else{
            $valide=true;
        }
        ?>

        <div class="container-fluid signin">
            <div class="row justify-content-center">
                <div class="card border-1 rounded-3 shadow-lg">

                    <h3>Sign in</h3>

                    <form method="POST" action="signin.php">

                        <div class="form-floating mb-3 inpt">
                            <input class="form-control" type="text" placeholder="Name" name="username" required />
                            <label for="name">Username</label>
                        </div>

                        <div class="form-floating mb-3 password-input inpt">
                            <input class="form-control" name="password" id="password" type="password"
                                placeholder="Password" required />
                            <label for="name">Password</label>
                            <i class="password-toggle far fa-eye"></i>
                        </div>
                        
                        <?php if($valide):?>
                        <?php else: ?>
                        <p>Not Valid Please try again ...</p>
                        <?php endif?>

                        <button type="submit" class="btn btn-primary">Sign In</button>

                    </form>


                </div>
            </div>
        </div>


        <!--  end -->
    </div>
</body>

<script src="http://localhost/photgrapher-website/js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="http://localhost/photgrapher-website/js/jquery-ui-1.13.2/jquery-ui.js"></script>
<script src="http://localhost/photgrapher-website/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</html>