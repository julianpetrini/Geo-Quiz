<?php include 'inc/header.php'; 

$_SESSION['question6']=$_POST['question6'];

// JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : " . $_SESSION['question6']."<br>"; 

if(isset($_POST['submit'])){

    $question7=$_POST['question7'];

    $_SESSION['question7']=$question7;

}
?>

<!--CONTENT-->
<body>
    
    <form name="form2" action="question8.php" method="POST" onsubmit="return fragen7()">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">Which country we find a city called Casablanca?</h1>
                        <label>
                            <input type="radio" name="question7" value="0" id="incorrect">
                            <img src="img/73.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question7" value="0" id="incorrect1">
                            <img src="img/72.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question7" value="1" id="correct">
                            <img src="img/71.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question7" value="0" id="incorrect2">
                            <img src="img/74.png" width="auto" height="58">
                        </label>

                        <input type="hidden" name="lastPageID" value="question7">
                        <h4 id="validation-warning" class="warning text-center"></h4>

                        <label>
                            <input type="image" role="button" type="submit" name="submit" src="img/submit.png" class="start">
                        </label>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

<!--JULIAN PETRINI AUTHOR-->
<?php include 'inc/footer.php';?>
