<?php include 'inc/header.php'; 

$_SESSION['question2']=$_POST['question2'];



if(isset($_POST['submit'])){

    $question3=$_POST['question3'];

    $_SESSION['question3']=$question3;

}

?>

<!--CONTENT-->
<body>
    
    <form name="form3" action="question4.php" method="POST" onsubmit="return fragen3();">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">Which country has the fewest people compared to its land size?</h1>
                        <label>
                            <input type="radio" name="question3" value="1" id="correct"  >
                            <img src="img/Mongolia.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question3" value="0" id="incorrect">
                            <img src="img/Palau.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question3" value="0" id="incorrect1">
                            <img src="img/Malta.png" width="auto" height="58">
                        </label>

                        <label>
                            <input type="radio" name="question3" value="0" id="incorrect2">
                            <img src="img/Liechtenstain.png" width="auto" height="58">
                        </label>

                        <input type="hidden" name="lastPageID" value="question3">
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

<!--Author: Ali Filliol-->
<?php include 'inc/footer.php';?>
