function fragen1(){
    let getSelectedValue = document.querySelector( 'input[name="question1"]:checked'); 

    
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
    let getSelectedValue = document.querySelector( 'input[name="question2"]:checked'); 

    
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


//Schneider.J :-P

function fragen5(){
    var getSelectedValue = document.querySelector( 'input[name="question5"]:checked'); 

    
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("BRAVO SLAY QUEEN !!");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("STUDY MORE QUEEN !!");
        window.open('https://www.weforum.org/agenda/2018/03/these-are-the-world-s-most-densely-populated-places/ ','_blank');
        
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("STUDY MORE QUEEN !!");
        window.open('https://www.weforum.org/agenda/2018/03/these-are-the-world-s-most-densely-populated-places/','_blank'); 
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY");
        window.open('https://www.weforum.org/agenda/2018/03/these-are-the-world-s-most-densely-populated-places/','_blank');
    }
}

function fragen6(){
    var getSelectedValue = document.querySelector( 'input[name="question6"]:checked'); 

    
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("GIRL GET THAT POINT !");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("REALLY ?WHAT DID YOU LEARN AT SCHOOL ??");
        window.open('https://www.worldatlas.com/articles/which-cities-are-located-on-two-continents.html','_blank');
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("REALLY ?WHAT DID YOU LEARN AT SCHOOL ??");
        window.open('https://www.worldatlas.com/articles/which-cities-are-located-on-two-continents.html','_blank');
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("REALLY ?WHAT DID YOU LEARN AT SCHOOL ??");
        window.open('https://www.worldatlas.com/articles/which-cities-are-located-on-two-continents.html','_blank');
    }
}

//Schneider.J
// JS - Ali Filliol
function fragen3(){
    let getSelectedValue = document.querySelector( 'input[name="question3"]:checked'); 

    if(getSelectedValue === null) {
        alert("Choose an option please");
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("YOU ARE BRAINY!!!");
        
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.geographyrealm.com/country-least-densely-populated/','_blank');

    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("PLEASE CHECK THE PAGE BELOW");
        window.open('https://www.geographyrealm.com/country-least-densely-populated/','_blank'); 
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("PLEASE CHECK THE PAGE BELOW");
        window.open('https://www.geographyrealm.com/country-least-densely-populated/','_blank');
    }
}

function fragen4(){
    let getSelectedValue = document.querySelector( 'input[name="question4"]:checked'); 
  
    if(getSelectedValue === null) {
        alert("Choose an option please");
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("YOU ARE BRAINY!!!");
        
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.britannica.com/place/Canberra','_blank');

    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("PLEASE CHECK THE PAGE BELOW");
        window.open('https://www.britannica.com/place/Canberra','_blank'); 
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("PLEASE CHECK THE PAGE BELOW");
        window.open('https://www.britannica.com/place/Canberra','_blank');
    }
}

function fragen7(){
    let getSelectedValue = document.querySelector( 'input[name="question7"]:checked'); 

    
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("YOU ARE AMAZING");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY");
        window.open('https://kanbrik.com/what-country-is-the-city-of-casablanca-in/','_blank');
        
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("YOU SHOULD STUDY");
        window.open('https://kanbrik.com/what-country-is-the-city-of-casablanca-in/','_blank'); 
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY");
        window.open('https://kanbrik.com/what-country-is-the-city-of-casablanca-in/','_blank');
    }
}

function fragen8(){
    let getSelectedValue = document.querySelector( 'input[name="question8"]:checked'); 

  
    if(getSelectedValue === null) {   
        alert("Choose an option please");  
        return false;
    }
    else if(getSelectedValue===document.getElementById('correct')){
        alert("So good !");  
    }
    else if(getSelectedValue===document.getElementById('incorrect')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.visualcapitalist.com/worlds-youngest-and-oldest-countries/#:~:text=The%20youngest%20country%20in%20the,below%20the%20age%20of%2015.','_blank');
    }
    else if(getSelectedValue===document.getElementById('incorrect1')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.visualcapitalist.com/worlds-youngest-and-oldest-countries/#:~:text=The%20youngest%20country%20in%20the,below%20the%20age%20of%2015.','_blank');
    }
    else if(getSelectedValue===document.getElementById('incorrect2')){
        alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
        window.open('https://www.visualcapitalist.com/worlds-youngest-and-oldest-countries/#:~:text=The%20youngest%20country%20in%20the,below%20the%20age%20of%2015.','_blank');
    }
}
