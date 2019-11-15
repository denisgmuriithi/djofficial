<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="disk_jockey";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//check connection
//Check connection
if (isset($_POST['submit'])){
    $firstname= $_POST['name'];
    $secondname= $_POST['second'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $county= $_POST['county'];
    $comments= $_POST['comments'];

//print_r($_POST);

//echo var_dump($_POST);
//connect data to database
$sql = "INSERT INTO `information`(`id`, `name`, `second`, `email`, `phone`, `county`, `comments`) 
VALUES ('','$firstname','$secondname','$email','$phone','$county','$comments')";

if (mysqli_query($conn, $sql)) {
    echo "Booking was successfully received";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}