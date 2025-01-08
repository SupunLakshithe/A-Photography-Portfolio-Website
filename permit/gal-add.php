<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../js/jquery-ui-1.13.2/jquery-ui.css">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/lightbox.css" />
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body class="admin-panelbody">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar -->

        <nav id="sidebarMenu" class=" d-block sidebar  bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-2 mt-1 ">

                    <div class='center-side'>
                        <p class="side-1">Lismore's Lens</p>
                        <p class="side-2">"Where Every Frame Tells a Story"</p>
                    </div>

                    <div class="topic-1 row">
                        <img class="col-4" src="http://localhost/photgrapher-website/assets/icons/admin-panel.png"
                            alt="">
                        <p class="col-8">Admin Panel</p>
                    </div>

                    <div class="my-3">
                        <a href="index.php" class="list-group-item list-group-item-action py-2 ripple">
                            <span>Main dashboard</span>
                        </a>
                    </div>

                    <!--      gallery    -->
                    <div class="topic-2 row">
                        <img class="col-4" src="http://localhost/photgrapher-website/assets/icons/gallery.png" alt="">
                        <p class="col-8">Gallery</p>
                    </div>

                    <a href="gal-add.php" class="list-group-item list-group-item-action py-2 ripple active">
                        <span>Add Photos</span>
                    </a>
                    <a href="gal-del.php" class="list-group-item list-group-item-action py-2 ripple">
                        <span>Remove Photos</span>
                    </a>

                    <!--      users    -->
                    <div class="topic-2 row mt-3">
                        <img class="col-4" src="http://localhost/photgrapher-website/assets/icons/user.png" alt="">
                        <p class="col-8">Users</p>
                    </div>
                    <a href="user-add.php" class="list-group-item list-group-item-action py-2 ripple ">
                        <span>Add User</span>
                    </a>
                    <a href="user-change.php" class="list-group-item list-group-item-action py-2 ripple">
                        <span>Delete / update users</span>
                    </a>
                    <a href="user-gal.php" class="list-group-item list-group-item-action py-2 ripple">
                        <span>User Gallery</span>
                    </a>

                    <!--      setting    -->
                    <div class="topic-2 row mt-3">
                        <img class="col-4" src="http://localhost/photgrapher-website/assets/icons/setting.png" alt="">
                        <p class="col-8">Setting</p>
                    </div>
                    <a href="set-com.php" class="list-group-item list-group-item-action py-2 ripple ">
                        <span>Add Comments</span>
                    </a>
                    <a href="set-pic.php" class="list-group-item list-group-item-action py-2 ripple">
                        <span>Profile picture</span>
                    </a>
                    <a href="set-pak.php" class="list-group-item list-group-item-action py-2 ripple">
                        <span>Edit Packages</span>
                    </a>
                    <hr>

                    <div class="end-data">
                        <p>This Web-Application is written by Supun Lakshitha.</p>
                    </div>

                </div>
            </div>
        </nav>


        <!-- Sidebar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container pt-4">
            <div class="container-fluid img-upload">
                <div class="row justify-content-center">
                    <div class="card border-1 rounded-3 shadow-lg">
                        <h3>Upload image files to gallery</h3>
                        <form action="fun-upload.php" method="post" enctype="multipart/form-data">
                            <div class="r1 row">
                                <h7 class="col-sm-8">Selecet The catagery</h7>
                                <select class="col-sm-4" name="catagery" id="catagery">
                                    <option value="1">Wild Life</option>
                                    <option value="2">Weddings</option>
                                    <option value="3">Potraits</option>
                                    <option value="4">Events</option>
                                </select>
                            </div>
                            <div class="r2 row">
                                <div>
                                    <h7>Image</h7>
                                    <h7 class="text-muted">Select only JPG file type</h7>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                Browse&hellip; <input type="file" name="file" class="input1">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] === "GET") {
                                if (isset($_GET['done'])) {
                                    $done = $_GET["done"];
                                    if ($done=="true") {
                                        echo "<h7> Image uploaded succesfully </h7> <br> <br>";
                                    } 
                                    else {
                                        echo "<h7 class='err'> Image upload failed <br> PLZ select JPG file type </h7> <br> <br>";
                                    }
                                }
                            }
                            ?>
                            <input class="submit" type="submit" name="submit">
                            <br><br>
                            <a href="http://localhost/photgrapher-website/permit/gal-add.php">Refresh</a>

                        </form>
                    </div>
                </div>
            </div>
    </main>
    <!--Main layout-->




</body>
<script src="http://localhost/photgrapher-website/js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="http://localhost/photgrapher-website/js/jquery-ui-1.13.2/jquery-ui.js"></script>
<script src="http://localhost/photgrapher-website/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="http://localhost/photgrapher-website/js/gal-upload.js"></script>
<script src="http://localhost/photgrapher-website/js/lightbox.js"></script>

</html>