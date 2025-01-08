<?php
include 'permit/fun-db.php';
// foreach(galids(1) as $id){
//     $data = galselect($id);
//     $img = $data['image'];
//     echo $img ;
// }
// echo galinsert(uniqid(''),1);




// // getting data from select ----------------------
// $data = galselect(25);
// if ($data == false) {
//     echo '0';
// } else {

//     echo $data['image'];
//     echo $data['categary'];
// }


// $ids = galids(1);
// print_r($ids);


?>
<html>
<form action="permit/fun-upload.php" method="post" enctype="multipart/form-data">

    <select name="catagery" id="catagery">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="file" name="file" id="">
    <input type="submit" name="submit">
</form>

<div class="collapse show gallery" id="div1">

    <?php
    for ($x = 1; $x < 5; $x++) {
        foreach (galids($x) as $id) {
            $data = galselect($id);
            $img = $data['image'];
            echo "<a href='$img' data-lightbox='gallery'><img src='$img'></a>";
            echo "<button class='deleteBtn' data-id='$id'>Delete</button>";
            echo $img;
        }
    }
    ?>

</div>

<script src="http://localhost/photgrapher-website/js/img-del.js"></script>

</html>