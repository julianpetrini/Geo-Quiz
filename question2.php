<?php include 'inc/header.php'; 

$_SESSION['question1']=$_POST['question1'];

// JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : " . $_SESSION['question1']."<br>"; 

if(isset($_POST['submit'])){

    $question2=$_POST['question2'];

    $_SESSION['question2']=$question2;

}
?>

<!--CONTENT-->
<body>
    
    <form name="form2" action="result.php" method="POST" onsubmit="return fragen2()">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">What is the smallest country in the world in terms of landmass?</h1>
                        <label>
                            <input type="radio" name="question2" value="0" id="incorrect">
                            <img src="img/q24.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question2" value="0" id="incorrect1">
                            <img src="img/q23.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question2" value="1" id="correct">
                            <img src="img/q21.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question2" value="0" id="incorrect2">
                            <img src="img/q22.png" width="auto" height="58">
                        </label>

                        <input type="hidden" name="lastPageID" value="question2">
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
