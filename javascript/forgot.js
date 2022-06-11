$(document).ready(function() {
    $("#ForgotPasswordForm").on('submit',function(e){
        e.preventDefault();
        var email = $("#username").val();
        //alert(email);

        $.ajax({ 
            type: "POST",
            url: "forgot_password_in.php",
            data: {email:email},

            success:function(data){
                
                $(".form-message").css("display","block");
                $(".form-message").html(data);
            }
        });
    });
});

