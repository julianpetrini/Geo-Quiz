<?php include 'inc/header.php';

$_SESSION['question7']=$_POST['question7'];

// JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : " . $_SESSION['question6']."<br>"; 

if(isset($_POST['submit'])){

    $question8=$_POST['question8'];

    $_SESSION['question8']=$question8;

}
?>

<!--CONTENT-->
<body>
    
    <form name="form8" action="result.php" method="POST" onsubmit="return fragen8();">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">What is the youngest "people-age" country in the world today?</h1>
                        <label>
                            <input type="radio" name="question8" value="0" id="incorrect">
                            <img src="img/84.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question8" value="1" id="correct">
                            <img src="img/81.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question8" value="0" id="incorrect1">
                            <img src="img/82.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question8" value="0" id="incorrect2">
                            <img src="img/83.png" width="auto" height="58">
                        </label>

                        <input type="hidden" name="lastPageID" value="question8">
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