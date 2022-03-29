<?php include 'inc/header.php';?>


<body>
    
<div id="page-wrap">
 


 <form action="result.php" method="post" id="quiz">
 
            <ol>
            
                <li>
                
                    <h3>What is the capital city of Australia?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Sydney</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Adelaide </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Melbourne</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Canberra </label>
                    </div><br><br>
                    <h6>Australia is the only country in the world that covers an entire continent.</h6>
                </li>
                
                
            
            <input type="submit" value="Submit" class="submitbtn" />
 
 </form>
 
 </div>
 
 
</body>  


<?php include 'inc/footer.php';?>