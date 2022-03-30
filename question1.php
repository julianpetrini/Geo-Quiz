<?php include 'inc/header.php';

if(isset($_POST['submit'])){

    $question1=$_POST['question1'];

    $_SESSION['question1']=$question1;

}

?>

<!--CONTENT-->
<body>
    
    <form name="form1" action="question2.php" method="POST" onsubmit="return fragen1()">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">How many countries do we have in the world today?</h1>
                        <label>
                            <input type="radio" name="question1" value="1" id="correct">
                            <img src="img/b11.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question1" value="0" id="incorrect">
                            <img src="img/b22.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question1" value="0" id="incorrect1">
                            <img src="img/b33.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question1" value="0" id="incorrect2">
                            <img src="img/b44.png" width="auto" height="58">
                        </label>

                        <input type="hidden" name="lastPageID" value="question1">
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
