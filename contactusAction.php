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
    
    <div class="window">
    <img src="media/icons8-checkmark.gif" width="80px" height="60px"><br>
    <h1>Thank you your message have been submitted!</h1>
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
    
   
    
</body>
</html>