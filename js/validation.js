function formValidation() {
    var fname = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;


    var fnamepattern = /^[a-zA-Z. ]+$/;
    var phonePattern = /^(\+88|88)?01[3-9]\d{8}$/;
    var emailPattern = /^[a-zA-Z0-9_-]{3,}@[a-zA-Z0-9_-]{3,}\.[a-zA-Z]{2,4}$/
    var passwordpattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/


    if (fnamepattern.test(fname)) {
        document.getElementById("ferror").innerHTML = "";

    } else {
        document.getElementById("ferror").innerHTML = "**Only Character Are Allowed**";
        return false;
    }

    if (emailPattern.test(email)) {
        document.getElementById("eerror").innerHTML = "";

    } else {
        document.getElementById("eerror").innerHTML = "**Email Is Invalid**";
        return false
    }

    if (phonePattern.test(phone)) {
        document.getElementById("merror").innerHTML = "";

    } else {
        document.getElementById("merror").innerHTML = "**Phone Number Is Invalid**";
        return false;
    }

    if (passwordpattern.test(password)) {
        document.getElementById("perror").innerHTML = "";

    } else {
        document.getElementById("perror").innerHTML = "**Password Incorrect**";
        return false;
    }

    if (password == cpassword) {
        document.getElementById("cperror").innerHTML = "";
    } else {
        document.getElementById("cperror").innerHTML = "**Password Not Match**";
        return false;
    }





}