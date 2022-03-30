<?php include 'inc/header.php';

$_SESSION['question8']=$_POST['question8'];
?>


<!--RESULT INFO-->
<body>
    <div class="mask maskstyle">
        <div class="p-5 text-center bg-image header1" >
            <div class="d-flex justify-content-center align-items-center h-75">
                <div class="text-white">
                        <h1 class="mb-3 display-1">RESULT PAGE</h1>
                        <?php       
                        $a=array($_SESSION['question1'],$_SESSION['question2'],$_SESSION['question3'],$_SESSION['question4'],$_SESSION['question5'],$_SESSION['question6'],$_SESSION['question7'],$_SESSION['question8']);
                        //echo "esta es la suma de todo " .array_sum($a);

                        if (array_sum($a)==0)
                        {
                            echo "<h1 class='mb-3 text-center texto-up'>All were wrong ! what happened</h1>";
                            
                        }
                        else if (array_sum($a)<5){
                            echo "<h1 class='mb-3 text-center texto-up'>You should improve your Geo knowledges</h1>";
                        }

                        else if (array_sum($a)<7){
                            echo "<h1 class='mb-3 text-center texto-up'>Almost perfect</h1>";
                        }

                        else if (array_sum($a)==8){
                            echo "<h1 class='mb-3 text-center texto-up'>WOW PERFECT SCORE !!!</h1>";
                        }

                        else {
                            echo "<h1 class='mb-3 text-center texto-up'>HERE WE GO AGAIN !</h1>";
                        }

                        $total=array_sum($a);
                    
                        echo "<h1 class='mb-3 text-center texto-up'>This is your total points: $total</h1>
                                <div class='img-responsive'>
                                    <img src='/img/logo.png'>
                                </div>"
                        ?>
                </div>
            </div>
        </div>
    </div>

    
</body>

<!--JULIAN PETRINI AUTHOR-->
<?php include 'inc/footer.php';?>
