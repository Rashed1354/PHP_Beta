
// show password
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function SFunction() {
    var x = document.getElementById("r_pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


function S2Function() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

$('input[name="profile_pic"]').change(function(e) {
    let file_url = URL.createObjectURL(e.target.files[0]); 
    $('img#upload_preview').attr('src', file_url); 
}); 