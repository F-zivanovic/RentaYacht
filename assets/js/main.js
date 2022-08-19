const submitBtn = document.querySelector('.sbm-btn');
submitBtn.addEventListener('click', validateForm);

function validateForm() {

    var a = document.forms["contact"]["fullname"].value;
    var b = document.forms["contact"]["telephonNumber"].value;
    var c = document.forms["contact"]["email"].value;
    var d = document.forms["contact"]["date"].value;
    var e = document.forms["contact"]["hour"].value;
    var f = document.forms["contact"]["hourStart"].value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "",
        e == null || e == "", f == null || f == "") {
        alert("Sva polja u formi su obavezna");
        return false;
    }
    else {
        alert("Podaci su uspešno prosleđeni.");
    }
}






