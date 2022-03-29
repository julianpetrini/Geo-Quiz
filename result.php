
<!DOCTYPE html>


<html>
 
<head>
 <meta charset=UTF-8 />
 
 <title>GeoMinds Quiz</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
 <div id="page-wrap">
 
 
 
        <?php
            
            
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            
        
            $totalCorrect = 0;
            
            
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            
            
            echo "<div id='results'>$totalCorrect / 2 correct</div>";
            
        ?>
 
 </div>
 
</body>
 
</html>































</body>


<?php include 'inc/footer.php';?>
