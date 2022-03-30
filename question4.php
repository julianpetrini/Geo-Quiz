<?php include 'inc/header.php'; 

$_SESSION['question3']=$_POST['question3'];



if(isset($_POST['submit'])){

    $question4=$_POST['question4'];

    $_SESSION['question4']=$question4;

}

?>

<!--CONTENT-->
<body>
    
    <form name="form4" action="question5.php" method="POST" onsubmit="return fragen4();">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">What is the capital city of Australia?</h1>
                      
                        <label>
                            <input type="radio" name="question4" value="0" id="incorrect">
                            <img src="img/Adelaide.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question4" value="0" id="incorrect1">
                            <img src="img/Melbourne.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question4" value="0" id="incorrect2">
                            <img src="img/Sydney.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question4" value="1" id="correct">
                            <img src="img/Canberra.png" width="auto" height="58">
                        </label>
                        
                        <h5>Fun Fact: Australia is the only country in the world that covers an entire continent.</h5>

                        <input type="hidden" name="lastPageID" value="question4">
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
