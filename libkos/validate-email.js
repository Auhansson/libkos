document.getElementById("reg-email").addEventListener("blur", function() {
    var email = document.getElementById("reg-email").value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        var errorMessage = "Недійсний формат електронної пошти!";
        document.getElementById("email-error").innerHTML = errorMessage;
    } else {
        document.getElementById("email-error").innerHTML = "";
    }
});

