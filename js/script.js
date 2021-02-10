function validate(){ 
    
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpass = document.getElementById("confirmpass").value;


    if(email == "" || password == "" || confirmpass == ""  || email == null || password == null ||
        confirmpass == null){
        document.getElementById("error").innerHTML = "All fields must be required!";    
        return false;
    }
    else if(password.length < 8){
        document.getElementById("error").innerHTML = "Password must be at least 8 characters";
        return false;
    }
    else if(confirmpass != password){
        document.getElementById("error").innerHTML = "Password doesn't match";
        return false;
    }
    else{
        return true;
    }
}

function validatelogin(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    if(email == "" || password == "" || email == null || password == null){
        document.getElementById("error").innerHTML = "All fields must be required!";    
        return false;
    }
    else if(email.length < 5){
        document.getElementById("error").innerHTML = "Email must be at least 5 characters";
        return false;
    }
    else if(password.length < 8){
        document.getElementById("error").innerHTML = "Password must be at least 8 characters";
        return false;
    }
    else{
        return true;
    }
}


function validatecontact(){
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    if(email == ""  || subject == "" || message == "" || email == null || subject == null || message == null){
        document.getElementById("error").innerHTML = "All fields must be required!";    
        return false;
    }

    
}