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


function submitFeedback(){
    var cn = document.getElementById("cn").value;
    var fb = document.getElementById("fb").value;

    var img = document.getElementById("img");

    var f = new FormData();
    f.append("cn", cn);
    f.append("fb", fb);
    f.append("img", img.files[0]);
    
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            alert(text);


        }
    };
    r.open("POST", "../config/add_client_feedback.php", true);
    r.send(f);
}


function submitNewUpdate(){
    var ut = document.getElementById("ut").value;
    var img = document.getElementById("img");

    var f = new FormData();
    f.append("ut", ut);
    f.append("img", img.files[0]);
    
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            alert(text);


        }
    };
    r.open("POST", "../config/add_new_update.php", true);
    r.send(f);
}

function viewModal(subj,masg){

var m = document.getElementById("msgmodal");
var nm = new bootstrap.Modal(m);
document.getElementById("msubid").innerHTML=subj;
document.getElementById("masgid").innerHTML=masg;
nm.show();

}

function deleteInquire(id){

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {

            var f = new FormData();
            f.append("id", id);
           
            
            var r = new XMLHttpRequest();
            r.onreadystatechange = function() {
                if (r.readyState == 4) {
                    var text = r.responseText;
        
                 window.location.reload();
        
        
                }
            };
            r.open("POST", "../config/deleteInquire.php", true);
            r.send(f);
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })

}


function deleteFeedback(id){

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {

            var f = new FormData();
            f.append("id", id);
           
            
            var r = new XMLHttpRequest();
            r.onreadystatechange = function() {
                if (r.readyState == 4) {
                    var text = r.responseText;
        
                 window.location.reload();
        
        
                }
            };
            r.open("POST", "../config/deleteFeedback.php", true);
            r.send(f);
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })

}