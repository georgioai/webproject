<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ-2 SCORE</title>
</head>
<style>
    html{
        background-color:black;
    }
    
    h1{
        color:white;
        font-size:30px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;;
        border:2px solid grey;
        border-radius:12px;
        padding:20px;
        margin-top:300px;
       
        text-align:center;
    }
    a{
        text-decoration:none;
        font-size:18px;
        text-align:center;
        color:red;
        display: block; 
        margin: 0 auto;
    }
</style>
<body>
<?php if (isset($_POST['form_submitted'])): 
    $answerkeys=[
        'q1'  => 'B',   
        'q2'  => 'C',   
        'q3'  => 'B',   
        'q4'  => 'C',   
        'q5'  => 'B',   
        'q6'  => 'B',   
        'q7'  => 'A',   
        'q8'  => 'C',   
        'q9'  => 'C',   
        'q10' => 'A',   
    ];

    $counter=0;
                //  will get(q1,..) will get the value
    foreach($answerkeys as $qnb =>$correctans)
    {
        //if one is skipped;this help
        if(isset($_POST[$qnb]))
        {
            //Compare the user's picked answer with the correct one
            if($_POST[$qnb]==$correctans){
                $counter+=10;
            }
        }
    }
    echo "<h1>Your score : $counter /100</h1>";
    echo '<a href="quiz02.html">Try Again</a>';
    
    ?>
    <?php endif; ?>
    
    
   
</body>
</html>