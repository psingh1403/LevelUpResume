var fullname = document.querySelector('#fullname2');
var email = document.querySelector('#email2');
var password = document.querySelector('#password2');

fullname.addEventListener('input', checksignupName);
email.addEventListener('input', checksignupemail);
password.addEventListener('input', checksignuppassword);

function checksignupName(e) {
    if (e.target.value.length >= 4 || e.target.value.length == 0) {
        fullname.style.border = "1px solid silver";
        fullname.style.borderLeft = "12px solid rgb(82, 227, 220)";
    }else{
        fullname.style.border = "2px solid red";
        fullname.style.borderLeft = "12px solid red";
    }
}

function checksignupemail(e) {
    var emailrowstring12 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (e.target.value.match(emailrowstring12)) {
        email.style.border = "1px solid silver";
        email.style.borderLeft = "12px solid rgb(82, 227, 220)";
    }else{
        email.style.border = "2px solid red";
        email.style.borderLeft = "12px solid red";
    }
}

function checksignuppassword(e) {
    if (e.target.value.length >= 8 || e.target.value.length == 0) {
        password.style.border = "1px solid silver";
        password.style.borderLeft = "12px solid rgb(82, 227, 220)";
    }else{
        password.style.border = "2px solid red";
        password.style.borderLeft = "12px solid red";
    }
}

function signupvalidations() {
    if (fullname.value.length < 3) {
        fullname.style.border = "2px solid red";
        fullname.style.borderLeft = "12px solid red";
        fullname.focus();
        return false;
    }
    var emailrowstring = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!email.value.match(emailrowstring)) {
        email.style.border = "2px solid red";
        email.style.borderLeft = "12px solid red";
        email.focus();
        return false;
    }
    if (password.value.length < 7) {
        password.style.border = "2px solid red";
        password.style.borderLeft = "12px solid red";
        password.focus();
        return false;
    }
}


