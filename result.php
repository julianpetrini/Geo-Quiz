<?php include 'inc/header.php';

$_SESSION['question2']=$_POST['question2'];
?>


<!--CONTENT-->
<body>
    
        <div class="mask maskstyle">
            <div class="p-5 text-center bg-image header1" >
                <div class="d-flex justify-content-center align-items-center h-75">
                    <div class="text-white">
                        <h1 class="mb-3 display-1">RESULT PAGE</h1>
                       <?php
                        echo "This is the answer : " . $_SESSION['question1']."<br>"; 
                        echo "This is the answer : " . $_SESSION['question2']."<br>";
                        ?>
                    </div>
                </div>
            </div>
        </div>


































</body>

<!--END OF CONTENT-->
<?php include 'inc/footer.php';?>
