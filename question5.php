<?php include 'inc/header.php';

$_SESSION['question4']=$_POST['question4'];


if(isset($_POST['submit'])){

    $question5=$_POST['question5'];

    $_SESSION['question5']=$question5;

}
?>



<!--Question 5 Schneider.J-->
<body>
    
    <form name="form5" action="question6.php" method="POST" onsubmit="return fragen5()">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">Which country has the highest population density?</h1>
                        <label>
                            <input type="radio" name="question5" value="1" id="correct">
                            <img src="img/Monaco.jpg" width="220" height="170">
                        </label>

                        <label>
                            <input type="radio" name="question5" value="0" id="incorrect">
                            <img src="img/China.jpg" width="220" height="170">
                        </label>

                        <label>
                            <input type="radio" name="question5" value="0" id="incorrect1">
                            <img src="img/Germany.jpg" width="220" height="170">
                        </label>

                        <label>
                            <input type="radio" name="question5" value="0" id="incorrect2">
                            <img src="img/Japan.jpg" width="220" height="170">
                        </label>

                        <input type="hidden" name="lastPageID" value="question5">
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
    


<!--Schneider J.-->
<?php include 'inc/footer.php';?>


