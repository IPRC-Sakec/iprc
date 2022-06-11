
$(document).ready(function() {

    $("#ResetPasswordForm").on('submit',function(e){

        e.preventDefault();
        var email = $("#username").val();
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        

        $.ajax({
            type: "POST",
            url: "reset_password.php",
            data: {email:email,password:password,confirm_password:confirm_password},

            success:function(data){
                    
                    $(".form-message").css("display","block");
                    $(".form-message").html(data);
                    $("#ResetPasswordForm")[0].reset();
                }
        });
    });
});