


var form= document.getElementById('login');




form.addEventListener('submit', function(event){
    event.preventDefault;
    
    var userbox = document.getElementById('username');
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var errorMsg = document.getElementsByClassName('errorMsg')[0];
    var agreed= document.getElementById('agreement').checked;
    //Validation

    // Username
    if(username == null || username == ""){
        errorMsg.innerHTML= '&#9746; Username cannot be blank';
        errorMsg.style.display = 'block';
        userbox.className= 'error';
    } else {
        userbox.className= 'success';
        errorMsg.style.display = 'none';

    }

    if(username.length < 6 || username.length >15){
        errorMsg.innerHTML= '&#9746; Username cannot be less than 6 or more than 16 characters';
        errorMsg.style.display = 'block';
        userbox.className= 'error';
    } else {
        userbox.className= 'success';
        errorMsg.style.display = 'none';

    }


    // // Agreement
    // if(!agreed){
    //     errorMsg.innerHTML= '&#9746; Username cannot be blank';
    //     errorMsg.style.display = 'block';
    //     userbox.className= 'error';
    // } 

    // }

});

