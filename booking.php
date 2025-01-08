<html>

<head>
    <title>Booking Page</title>
    <link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<?php include 'permit/fun-db.php' ;
$package=null;
$done = true;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['package'])) {
        $package = $_GET['package'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mnumber=$_POST['m-number'];
    $mail=$_POST['email'];
    $address=$_POST['address'];
    $massage=$_POST['message'];
    $date=$_POST['date'];
    $packages=['package'];

    $done = bookinsert($fname,$lname,$mnumber,$mail,$address,$massage,$date,$package);
    if($done){header('Location: thank-you.php');}
}
?>
<body class="bookingbody">
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

        <div class="container-fluid px-5 my-5 booking">
            <div class='topic h3'>Booking Form</div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                        <div class="card-body p-0">
                            <form name="contactForm" method="POST" action="booking.php">
                                <div class="row g-0">
                                    <div class="col-md-6 p-4">


                                        <!-- Name Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="fname" type="text" placeholder="Name"
                                                required />
                                            <label for="fname">First Name</label>
                                        </div>
                                        <!-- 4n number -->
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" name="m-number" pattern="[0-9]{10}"
                                                placeholder="Mobile number" required>
                                            <label for="m-number">Mobile Number</label>
                                            <small  class="form-text text-muted">We'll never share your
                                                phone number with anyone else.</small>
                                        </div>

                                        <!-- Address Input -->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control h-auto" name="address" type="text"
                                                required></textarea>
                                            <label for="address">Address</label>
                                        </div>

                                        <!-- Date Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control h-auto" type="date" name="date" required>
                                            <label for="date">Date</label>
                                            <?php if (!($done)){echo "<p class='form-text text-muted'> Date is already booked !!! please try another day ...</p>";}?>
                                        </div>

                                    </div>
                                    <div class="col-md-6 p-4">

                                        <!-- Name Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="lname" type="text" placeholder="Name"
                                                required />
                                            <label for="lname">Last Name</label>
                                        </div>

                                        <!-- Email Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email" required
                                                placeholder="Email Address" />
                                            <label for="emailAddress">Email Address</label>
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                email with anyone else.</small>
                                        </div>

                                        <!-- Message Input -->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control h-auto" name="message" type="text"
                                                required></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                        
                                        <!-- Package Input -->
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="package" required>
                                                <option value=""<?php  if ($package==null){echo "selected";}?>>Select a category</option>
                                                <option value="w-p" <?php  if ($package=="w-p"){echo "selected";}?>>Wedding Platinum package</option>
                                                <option value="w-g" <?php  if ($package=="w-g"){echo "selected";}?>>Wedding Gold package</option>
                                                <option value="w-s" <?php  if ($package=="w-s"){echo "selected";}?>>Wedding Silver package</option>
                                                <option value="e-p" <?php  if ($package=="e-p"){echo "selected";}?>>Event Platinum package</option>
                                                <option value="e-g" <?php  if ($package=="e-g"){echo "selected";}?>>Event Gold package</option>
                                                <option value="e-s" <?php  if ($package=="e-s"){echo "selected";}?>>Event Silver package</option>
                                                <option value="p-p" <?php  if ($package=="p-p"){echo "selected";}?>>Potrait Platinum package</option>
                                                <option value="p-g" <?php  if ($package=="p-g"){echo "selected";}?>>Potrait Gold package</option>
                                                <option value="p-s" <?php  if ($package=="p-s"){echo "selected";}?>>Potrait Silver package</option>
                                            </select>
                                            <label for="package">Packages</label>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="d-grid ">
                                            <button class="btn btn-primary btn-lg w-50" name="submitButton"
                                                type="submit">Submit</button>
                                        </div>
                                        <!-- End of contact form -->

                                    </div>
                                </div>
                            </form>
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

</html>