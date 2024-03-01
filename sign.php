<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "sign";

//creating connection
$conn = mysqli_connect("$db_host" , "$db_user" , "$db_password" , "$db_name");

//checking connection
if (!$conn) {
    die("connection failed !". mysqli_connect_error());
}

//checking submit button press or not
if (isset($_REQUEST['submit'])) {
    // checking for empty fields
    if (($_REQUEST['first']=="" || $_REQUEST['last']=="" || $_REQUEST['mail']=="" || $_REQUEST['pass']=="" || $_REQUEST['date']=="")) {
        echo "fill all fields";
    }
}
else{
    //inser data in variable
    $first = $_REQUEST['first'];
    $last = $_REQUEST['last'];
    $mail = $_REQUEST['mail'];
    $pass = $_REQUEST['pass'];
    $date = $_REQUEST['date'];

    //query to insert data into database

    $sql = "INSERT INTO signup(FirstName,LastName,email,password,date) VALUES ('$first', '$last', '$mail', '$pass', '$date')";

    //checkdata is inserted or not
    if (mysqli_query($conn,$sql)) {
        echo "nre record inserted successfully";
    }
    else{
        echo "unable data inserted";
    }
}

?>