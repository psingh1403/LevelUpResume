const loginemail = document.querySelector('#email1'),
    loginpassword = document.querySelector('#password1');

loginemail.addEventListener('input', checkloginemail);
loginpassword.addEventListener('input', checkloginpassword);

function checkloginemail(e) {
    var emailrowstring2 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (e.target.value.match(emailrowstring2) || e.target.value.length ==0) {
        loginemail.style.border = "1px solid silver";
        loginemail.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        loginemail.style.border = "2px solid red";
        loginemail.style.borderLeft = "12px solid red";
    }
}

function checkloginpassword(e) {
    if (e.target.value.length >= 8 || e.target.value.length == 0) {
        loginpassword.style.border = "1px solid silver";
        loginpassword.style.borderLeft = "12px solid rgb(82, 227, 220)";
    } else {
        loginpassword.style.border = "2px solid red";
        loginpassword.style.borderLeft = "12px solid red";
    }
}

function loginvalidationafterclick() {
    var emailrowstring2 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!loginemail.value.match(emailrowstring2)) {
        loginemail.style.border = "2px solid red";
        loginemail.style.borderLeft = "12px solid red";
        loginemail.focus();
        return false;
    }

    if (loginpassword.value.length < 7) {
        loginpassword.style.border = "2px solid red";
        loginpassword.style.borderLeft = "12px solid red";
        loginpassword.focus();
        return false;
    }
}