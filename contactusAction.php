<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecs02.css">
    <title>GREETING MESSAGE</title>
</head>
<style>
    *{
        color:white;
    }
</style>
<body>
    <?php 
    echo "<h1>THANK YOU FOR SUBMITTING</h1>";
    echo "First name:" . htmlspecialchars($_POST['fnfield']);
    ?>
    
</body>
</html>