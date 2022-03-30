












































































































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
let getSelectedValue = document.querySelector( 'input [name="question4"]:checked');

if(getSelectedValue === null) {
    alert("Choose an option please");
    return false;
}
else if(getSelectedValue===document.getElementById('correct')){
    alert("YOU ARE BRAINY!!!");
    
}
else if(getSelectedValue===document.getElementById('incorrect')){
    alert("YOU SHOULD STUDY MORE, HERE YOU CAN LEARN ABOUT IT");
    window.open('https://www.britannica.com/place/Canberra/','_blank');

}
else if(getSelectedValue===document.getElementById('incorrect1')){
    alert("PLEASE CHECK THE PAGE BELOW");
    window.open('https://www.britannica.com/place/Canberra/','_blank'); 
}
else if(getSelectedValue===document.getElementById('incorrect2')){
    alert("PLEASE CHECK THE PAGE BELOW");
    window.open('https://www.britannica.com/place/Canberra/','_blank');
}
}


