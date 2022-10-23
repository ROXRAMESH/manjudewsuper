function SubmitInquire() {

    var fname = document.getElementById("firstn").value;
    var lname = document.getElementById("lastn").value;

    var email = document.getElementById("email").value;
    var mobile = document.getElementById("phone").value;

    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;


    var f = new FormData();
    f.append("fname", fname);
    f.append("lname", lname);
    f.append("email", email);
    f.append("mobile", mobile);
    f.append("subject", subject);
    f.append("message", message);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            alert(text);


        }
    };
    r.open("POST", "config/add_inquire_proc.php", true);
    r.send(f);


}

function test() {
alert("hi");

}