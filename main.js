//JULIAN JS

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
        
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.worldometers.info/geography/how-many-countries-are-there-in-the-world/#:~:text=There%20are%20195%20countries%20in,and%20the%20State%20of%20Palestine.','_blank'); 
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.worldometers.info/geography/how-many-countries-are-there-in-the-world/#:~:text=There%20are%20195%20countries%20in,and%20the%20State%20of%20Palestine.','_blank');
    }
}

function fragen2(){
    var getSelectedValue = document.querySelector( 'input[name="question2"]:checked'); 

    
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("So good !");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.history.com/news/what-is-the-smallest-country-in-the-world#:~:text=Based%20on%20landmass%2C%20Vatican%20City,than%20the%20island%20of%20Manhattan.','_blank');
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.history.com/news/what-is-the-smallest-country-in-the-world#:~:text=Based%20on%20landmass%2C%20Vatican%20City,than%20the%20island%20of%20Manhattan.','_blank');
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.history.com/news/what-is-the-smallest-country-in-the-world#:~:text=Based%20on%20landmass%2C%20Vatican%20City,than%20the%20island%20of%20Manhattan.','_blank');
    }
}


//END OF JS JULIAN