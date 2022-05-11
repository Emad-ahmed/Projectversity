function formValidation() {
    var fname = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;


    var fnamepattern = /^[a-zA-Z. ]+$/;
    var phonePattern = /^(\+88|88)?01[3-9]\d{8}$/;
    var emailPattern = /^[A-Za-z_0-9]{3,}@[A-Za-z]+.[a-z]{3,}$/


    if (fnamepattern.test(fname)) {
        document.getElementById("ferror").innerHTML = "";

    } else {
        document.getElementById("ferror").innerHTML = "**Only Character Are Allowed";
        return false;
    }

    if (emailPattern.test(email)) {
        document.getElementById("eerror").innerHTML = "";

    } else {
        document.getElementById("error").innerHTML = "**Email Is Inavlid";
    }

    if (phonePattern.test(phone)) {
        document.getElementById("merror").innerHTML = "";

    } else {
        document.getElementById("merror").innerHTML = "**Phone Number Is Inavlid";
        return false;
    }






}