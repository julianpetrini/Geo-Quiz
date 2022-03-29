/*
THIS WAS THE PATH TO THE CORRECT FUNCTION OF VALIDATION AND TO CHOOSE AN ANSWER

function questionTry(){
    if(document.getElementById('question1')===undefined){
        alert("you are a gil");
    }

    if(document.getElementById('question1').checked =! 0){
        alert("wrong answer"); 
    }

    else if (document.getElementById('question').checked == false) {   
        alert("Summer radio button is selected");   
    } 
    else {  
       return false;
            }  
    
}

function prueba(){
    let myElement = document.getElementById("question1").value;

    
        alert(myElement);
}

function prueba2(){
    if(document.getElementById('correct').checked == true) {   
        alert("GREAT ANSWER");   
    }
    else if (document.getElementById('option1').checked == true){
        alert("WRONG ANSWER"); 
        return false;
    }
    else if (document.getElementById('option2').checked == true){
        alert("WRONG ANSWER");
        return false;
    }
    else if (document.getElementById('option3').checked == true){
        alert("WRONG ANSWER"); 
        return false;
    }

    else if (document.getElementById()=!checked){
        alert("GIVE AN ASNWER IN ORDER TO CONTINUE"); 
        return false;
    }
    
}
*/

function fragen1(){
    var getSelectedValue = document.querySelector( 'input[name="question1"]:checked'); 

    
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("YOU ARE AMAZING");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.worldometers.info/geography/how-many-countries-are-there-in-the-world/#:~:text=There%20are%20195%20countries%20in,and%20the%20State%20of%20Palestine.','_blank');
        return false;
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.worldometers.info/geography/how-many-countries-are-there-in-the-world/#:~:text=There%20are%20195%20countries%20in,and%20the%20State%20of%20Palestine.','_blank');        return false;
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.worldometers.info/geography/how-many-countries-are-there-in-the-world/#:~:text=There%20are%20195%20countries%20in,and%20the%20State%20of%20Palestine.','_blank');        return false;
    }
}

function fragen2(){
    var getSelectedValue = document.querySelector( 'input[name="question2"]:checked'); 

    
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("YOU ARE AMAZING");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.history.com/news/what-is-the-smallest-country-in-the-world#:~:text=Based%20on%20landmass%2C%20Vatican%20City,than%20the%20island%20of%20Manhattan.','_blank');
        return false;
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.history.com/news/what-is-the-smallest-country-in-the-world#:~:text=Based%20on%20landmass%2C%20Vatican%20City,than%20the%20island%20of%20Manhattan.','_blank');        return false;
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.history.com/news/what-is-the-smallest-country-in-the-world#:~:text=Based%20on%20landmass%2C%20Vatican%20City,than%20the%20island%20of%20Manhattan.','_blank');        return false;
    }
}
