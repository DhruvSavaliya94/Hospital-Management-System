function isValidate() {
    debugger
    var regEx1 = /^[9]\d{9}|[8]\d{9}$/;
    var email = document.getElementById("EmailID").value;
    var pass = document.getElementById("Password").value;
    var confpass = document.getElementById("ConfirmPassword").value;
    var contact = document.getElementById("Contact").value;
    if (email == undefined) {
        return false;
    } else if (pass != confpass) {
        alert("Password and confirm password  not matched.");
        return false;
    } else if (!regEx1.test(contact)) {
        alert("Invalid contact number.");
        return false;
    } else {
        return true;
    }
    return false;
}