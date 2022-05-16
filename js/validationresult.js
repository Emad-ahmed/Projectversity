function formValidationStu() {
    var studentid = document.getElementById("id").value;
    var birthdate = document.getElementById("birth").value;



    var studentidpattern = /^[1-9]{8,15}$/;
    var birthdatePattern = /^(?:0[1-9]|[12]\d|3[01])([\/.-])(?:0[1-9]|1[012])\1(?:19|20)\d\d$/;

    if (studentidpattern.test(studentid)) {
        document.getElementById("siderror").innerHTML = "";

    } else {
        document.getElementById("siderror").innerHTML = "**Enter Valid Student Id**";
        return false;
    }

    if (birthdatePattern.test(birthdate)) {
        document.getElementById("birerror").innerHTML = "";

    } else {
        document.getElementById("birerror").innerHTML = "**Enter Valid Birth date **";
        return false
    }

}