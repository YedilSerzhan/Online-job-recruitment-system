/************************** validate sign In form **************************/
function validateForm() {
    var x = document.forms["signInForm"]["password"].value;
    var y = document.forms["signInForm"]["username"].value;
    if (y.toString()[0] > 'z' || y.toString()[0] < 'a') {
        alert("Username should strat with lowerCase letter");
        return false;
    }
    if (x.length < 6) {
        alert("Password is too weak!");
        return false;
    }
}





