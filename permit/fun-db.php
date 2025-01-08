<?php

// database coonection
$conn = new mysqli("localhost", "root", "", "database-site07");

//path of image files
$path = 'uploads/';

//check id connect to the database
if ($conn->connect_error) {
    die("Connection refused ? ? ?" . $conn->connect_error);
}


function galinsert($name, $catagory)
{
    //add data to gallery table
    global $conn;

    $sql = "INSERT INTO  gallery (image,category) VALUES ('$name','$catagory')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }

}


function galdelete($id)
{
    //delte data from gallery table
    global $conn;

    $sql = "DELETE FROM gallery WHERE  `gallery`.`id` = $id";

    if ($conn->query($sql) === TRUE) {
        return $conn->affected_rows;
    } else {
        return false;
    }

}

function galselect($id)
{
    //get data from gallery table
    global $conn;
    global $path;
    $sql = "SELECT `image`, `category` FROM `gallery` WHERE `gallery`.`id` = $id";

    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $result = array();
                $result['image'] = $path . $row['image'] . ".jpg";
                $result['categary'] = $row['category'];
                return $result;
            }

        } else {
            return false;
        }

    } else {
        return false;
    }
}



function galids($count)
{
    //select id from gallery table
    global $conn;
    $sql = "SELECT id FROM gallery WHERE category = $count";

    $result = $conn->query($sql);
    if ($result) {
        $idArray = array();
        while ($row = $result->fetch_assoc()) {
            $idArray[] = $row['id'];
        }
        return $idArray;

    } else {
        return false;
    }
}



function bookinsert($fname, $lname, $mnumber, $email, $address, $message, $date, $package)
{
    //add data to booking table 
    global $conn;

    $sql = "INSERT INTO `booking`(`fname`, `lname`, `mnumber`, `mail`, `address`, `message`, `date`, `packages`) VALUES ('$fname','$lname','$mnumber','$email','$address','$message','$date','$package')";

    if ($conn->query($sql) === TRUE) {

        return true;
    } else {
        //die(  $conn->error);
        return false;
    }
}

function bookselect($id)
{
    //get data from booking table
    global $conn;

    $sql = "SELECT `fname`, `lname`,`mnumber`,`mail`,`address`,`message`,`date`,`packages` FROM `booking` WHERE `booking`.`id` = $id";

    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }

        } else {
            return false;
        }

    } else {
        return false;
    }
}
function bookingids($count)
{
    //get id s from the database table
    global $conn;
    $sql = "SELECT 'id' FROM booking ";

    $result = $conn->query($sql);
    if ($result) {
        $idArray = array();
        while ($row = $result->fetch_assoc()) {
            $idArray[] = $row['id'];
        }
        return $idArray;

    } else {
        return false;
    }
}

function usrinsert($user, $password)
{
    //insert users into database
    global $conn;

    $sql = "INSERT INTO users (username,password,level) VALUES ('$user','$password','1')";

    if ($conn->query($sql) === TRUE) {

        return true;
    } else {
        //die(  $conn->error);
        return false;
    }
}

function futbookingid()
{
    //get ids of futere date from booking table
    global $conn;
    $sql = "SELECT id FROM booking WHERE date >=  CURDATE()  ORDER BY `booking`.`date` ASC";

    $result = $conn->query($sql);

    if ($result) {
        $idArray = array();
        while ($row = $result->fetch_assoc()) {
            $idArray[] = $row['id'];
        }
        return $idArray;

    } else {
        return false;
    }
}

function signin($name,$password){
    global $conn;

    $sql = "SELECT level FROM users WHERE (username = '$name') AND (password = '$password')";;

    $result = $conn->query($sql);

    if ($result) {
        $id = array();
        while ($row = $result->fetch_assoc()) {
            $id = $row['level'];
        }
        return $id;
    } else {
        return false;
    }
}

function dbclose()
{
    global $conn;
    $conn->close();
}
?>