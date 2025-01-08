<!DOCTYPE html>
<html lang="en">
<?php include 'fun-db.php ' ?>

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
                        <a href="index.php" class="list-group-item list-group-item-action py-2 ripple active">
                            <span>Main dashboard</span>
                        </a>
                    </div>

                    <!--      gallery    -->
                    <div class="topic-2 row">
                        <img class="col-4" src="http://localhost/photgrapher-website/assets/icons/gallery.png" alt="">
                        <p class="col-8">Gallery</p>
                    </div>

                    <a href="gal-add.php" class="list-group-item list-group-item-action py-2 ripple">
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
    <main style="margin-top: 58px; margin-left: 310px;">
        <div class="container pt-4">

            <main style="margin-top: 58px;">
                <div class="container pt-4">
                    <div class="container-fluid main">
                        <div class="row justify-content-center">
                            <div class="card border-1 rounded-3 shadow-lg text-center">
                                <h4 class='mt-5'>Booking Details</h4>
                                <div id="gallery" class="pt-4 border-0 ">

                                    <div class="collapse show table-responsive" id="div1">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Custermer Name</th>
                                                    <th scope="col">Cotact number</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Location</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $y = 1;
                                                foreach (futbookingid() as $id) {
                                                    $data = bookselect($id);
                                                    if (date("Y-m-d")===$data['date']) {
                                                        echo "<tr class='table-danger'>";
                                                    } else {
                                                        echo "<tr>";
                                                    }
                                                    echo "<th scope='row'>" . $y . "</th>";
                                                    echo "<td>" . $data['date'] . "</td>";
                                                    echo "<td>" . $data['fname'] . " " . $data['lname'] . "</td>";
                                                    echo "<td>" . $data['mnumber'] . "</td>";
                                                    echo "<td>" . $data['mail'] . "</td>";
                                                    echo "<td>" . $data['address'] . "</td>";
                                                    echo "</tr>";
                                                    $y++;
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        </div>
        </div>
    </main>



    </div>
    </main>
    <!--Main layout-->




</body>
<script src="http://localhost/photgrapher-website/js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="http://localhost/photgrapher-website/js/jquery-ui-1.13.2/jquery-ui.js"></script>
<script src="http://localhost/photgrapher-website/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="http://localhost/photgrapher-website/js/admin-panel.js"></script>
<script src="http://localhost/photgrapher-website/js/lightbox.js"></script>

</html>