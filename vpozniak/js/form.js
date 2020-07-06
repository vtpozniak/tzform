

$('#send').on("click", function () {
    var username = $("#username").val().trim();
    var email = $("#email").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();

    if (username == ""){
            $("#error").text("input username")
        return false;
    } else if (email == ""){
            $("#error").text("input email")
        return false;
    } else if(phone == ""){
            $("#error").text("input phone")
        return false;
    } else if(message.length < 5){
            $("#error").text("message must be longer than 5 characters")
        return false;
    }

    $("#error").text("");

      $.ajax({

        url: 'src/save_data.php',
        type: 'POST',
        change: false,
        data: {'username': username, 'email': email, 'phone': phone, 'message': message},
        dataType: 'html',
        beforeSend: function(){
            $("#send").prop("disabled", true);
        },
        success: function (data) {
            if (!data)
                alert("message not sent")
            else
                $("#massageForm").trigger("reset");
            $("#send").prop("disabled", false);

        },

    });
});



