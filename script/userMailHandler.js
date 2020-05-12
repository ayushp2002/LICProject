function postUserData() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var pan = $("#pan").val();
    var rstatus;

    // if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
        $.ajax({
           url: 'https://localhost/LICProject/userRegisterMail.php',
           method: 'POST',
        //    dataType: 'json',
           data: {
               name: name,
               email: email,
               phone: phone,
               pan: pan
           }, success: function (response) {
                // if (response.status == "success")
                //     alert('Email Has Been Sent!');
                // else {
                //     alert('Please Try Again!');
                //     console.log(response);
                // }
                rstatus = response.status;
           }
        });
    // }
    alert(rstatus);
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else
        caller.css('border', '');

    return true;
}