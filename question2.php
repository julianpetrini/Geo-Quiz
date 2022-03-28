<?php include 'inc/header.php'; 

$_SESSION['question1']=$_POST['question1'];

echo "This is the answer : " . $_SESSION['question1']."<br>"; 




if(isset($_POST['submit'])){

    $question2=$_POST['question2'];

    $_SESSION['question2']=$question2;

}

?>

<!--CONTENT-->
<body>
    
    <form name="form2" action="result.php" method="POST" onsubmit="return validateQuestion('single-choice-1', 'question2');">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">Second question</h1>
                        <label>
                            <input type="radio" name="question2" value="1" id="single-choice-1">
                            <img src="img/b11.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question2" value="2" id="single-choice-2">
                            <img src="img/b22.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question2" value="3" id="single-choice-3">
                            <img src="img/b33.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question2" value="4" id="single-choice-4">
                            <img src="img/b44.png" width="auto" height="58">
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

<!--END OF CONTENT-->
<?php include 'inc/footer.php';?>
