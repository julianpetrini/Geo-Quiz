<?php include 'inc/header.php';

$_SESSION['question5']=$_POST['question5'];


if(isset($_POST['submit'])){

    $question6=$_POST['question6'];

    $_SESSION['question6']=$question6;

}
?>


<!-- Question 6 Schneider.J-->
<body>
    
    <form name="form6" action="question6.php" method="POST" onsubmit="validateQuestion(inputID, radioName)">
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">Name the only city that spans two continents?</h1>
                        <label>
                            <input type="radio" name="question6" value="1" id="correct">
                            <img src="img/Istanbul.jpg" width="220" height="170">
                        </label>

                        <label>
                            <input type="radio" name="question6" value="2" id="incorrect">
                            <img src="img/Jakarta.jpg" width="220" height="170">
                        </label>

                        <label>
                            <input type="radio" name="question6" value="3" id="incorrect1">
                            <img src="img/Lagos2.jpg" width="220" height="170">
                        </label>

                        <label>
                            <input type="radio" name="question6" value="4" id="incorrect2">
                            <img src="img/Manila.jpg" width="220" height="170">
                        </label>

                        <input type="hidden" name="lastPageID" value="question6">
                        <h4 id="validation-warning" class="warning text-center"></h4>

                        <label>
                            <input type="image" role="button" type="submit" name="submit" src="img/submit.png" class="start">
                        </label>

                    </div>
                </div>
            </div>
        </div>
    </form>


<!--Schneider.J-->
<?php include 'inc/footer.php';?>
