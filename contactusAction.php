<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREETING MESSAGE</title>
</head>
<style>
    html{
        background-image:url("media/68CAAB30-E069-4F53-BA8C-975DAC8D9166_1_201_a.jpeg")
    }
    .window{
        margin:auto;
        background-color:white;
        width:900px;
        height:500px;
        text-align:center;
        margin-top:200px;
        padding:20px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .window h1{
        margin-top:20px;
        font-size:36px;
        margin-bottom:70px;
    }
    .sub-info{
        color:white;
        border:2px solid black;
        background-color:black;
        font-size:16px;
        font-family:monospace;
        letter-spacing:1px;
        word-spacing:4px;
        border-radius:12px;
    }
    h2{
        color:white;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        margin-top:140px;
    }
    
</style>
<body>
    <!--code will be executed when form is submitted-->
    <?php if (isset($_POST['form_submitted'])): ?> 
    
    <div class="window">
    <img src="media/icons8-checkmark.gif" width="80px" height="60px"><br>
    <h1>Thank you, your message have been submitted!</h1>
    <h3>An agent will get to you as soon as possible!</h3>
    <br><br><br>
    <p><i>You can review below your submitted information!</i></p>
    </div>

    <h2>Submitted Information:</h2>
    <div class="sub-info">
        <p> First Name: <?php echo htmlspecialchars($_POST['fnfield'])?> </p>
        <p>Last Name:  <?php echo htmlspecialchars($_POST['lnfield'])?></p>
        <p>Email:  <?php echo htmlspecialchars($_POST['emailfield'])?></p>
        <p>Phone Number: <?php echo (int)$_POST['phnfield']?></p>
        <p>Message: <?php echo htmlspecialchars($_POST['txtarfield'])?></p>
    </div>
    
   
    <?php endif; ?> 

                             <!--INSERT INTO  THE LOCAL (MySQL WORKBENCH and phpMyAdmin) DATABASE HERE-->


    <!--CREATE CONNECTION FIRST-->
    <?php $conn = new mysqli("localhost", "root", "root", "webproject");?>

    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webproject";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
  die("❌ Connection failed: " . $conn->connect_error);
}

// Get data from form
$fname = $_POST['fnfield'];
$lname = $_POST['lnfield'];
$email = $_POST['emailfield'];
$phone = $_POST['phnfield'];
$message = $_POST['txtarfield'];

// Prepare SQL insert QUERY
$sql = "INSERT INTO ContactUS (fname, lname, email, phoneNb, message) 
        VALUES ('$fname', '$lname', '$email', '$phone', '$message')";

// Execute and check
if ($conn->query($sql) === TRUE) {
  echo "<h2 style='color:green;'>✅ Your message has been saved.</h2>";
} else {
  echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

              <!--INSERT INTO ONLINE phpMyAdmin DATABASE HERE-
                           (infinityfree.com)-->  

<?php

$servername = "sql205.infinityfree.com";
$username = "if0_38936062";
$password = "cs3311gGHabG98"; 
$dbname = "if0_38936062_webproject";

// connection also here, like before 
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// DATA 
$fname = $_POST['fnfield'];
$lname = $_POST['lnfield'];
$email = $_POST['emailfield'];
$phone = $_POST['phnfield'];
$message = $_POST['txtarfield'];

// INSERT INTO , like preparing the statement here
$sql = "INSERT INTO ContactUS (fname, lname, email, phoneNb, message)
        VALUES ('$fname', '$lname', '$email', '$phoneNb', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting us, $fname! Your message has been received.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>