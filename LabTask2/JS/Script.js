let attempts = 0;
let locked = false;

function validateLogin() {

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    

    if (locked) {
        document.getElementById("message").innerHTML = "Account is locked.";
        return false;
    }

    if (username == "" || password == "") {
        document.getElementById("message").innerHTML = "Username and Password cannot be empty.";
        return false;
    }

    if (username == "AIUB" && password == "$_student") {

        document.getElementById("message").innerHTML = "Successfully Logged In";

        attempts = 0;
        return false;
    }

    attempts++;

    if (attempts == 1) {
        document.getElementById("message").innerHTML = "You have 3 attempts left.";
    }
    else if (attempts == 2) {
        document.getElementById("message").innerHTML = "You have 2 attempts left.";
    }
    else if (attempts == 3) {
        document.getElementById("message").innerHTML = "You have 1 attempt left. You are locked for 5 minutes.";
        locked = true;
    }

    return false;
}