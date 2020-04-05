function isValidate() {
    debugger
    var regEx1 = /^[9]\d{9}|[8]\d{9}$/;
    var regEx2 = /^[A-Za-z]+$/;
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var email = document.getElementById("email_id").value;
    var pass = document.getElementById("Password").value;
    var confpass = document.getElementById("ConfirmPassword").value;
    var contact = document.getElementById("Contact").value;

    if (email == undefined) {
        return false;
    } else if (!regEx2.test(fname) || !regEx2.test(lname)) {
        alert("Invalid Name");
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

function drValidation() {
    debugger
    var regEx1 = /^[0-9]{10}$/;
    var contact = document.getElementById("mobileno").value;
    var Userdate = document.getElementById("dateofbirth").value;
    var ToDate = new Date().toISOString().slice(0, 10);
    if (Userdate >= ToDate) {
        alert("The Date must be Lesser than today's date")
        return false;
    } else if (!regEx1.test(contact)) {
        alert("Invalid contact number.");
        return false;
    } else {
        return true;
    }
    return false;
}

function ptValidation() {
    debugger
    var regEx1 = /^[0-9]{10}$/;
    var contact = document.getElementById("ptmobileno").value;
    var Userdate = document.getElementById("ptdateofbirth").value;
    var TodayDate = new Date().toISOString().slice(0, 10);
    if (Userdate >= TodayDate) {
        alert("The Date must be Lesser than today's date")
        return false;
    } else if (!regEx1.test(contact)) {
        alert("Invalid contact number.");
        return false;
    } else {
        return true;
    }
    return false;
}

function apValidation() {
    debugger
    var fromDate = document.getElementById("datetime1").value;
    var toDate = document.getElementById("datetime2").value;
    var TodayDate = new Date().toISOString().slice(0, 10);
    if (fromDate >= toDate || fromDate < TodayDate || toDate <= TodayDate) {
        alert("The Date must be Lesser than today's date")
        return false;
    } else {
        return true;
    }
    return false;
}