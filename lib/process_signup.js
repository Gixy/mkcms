$('document').ready( function()
{
    $("#sign-up-form").validate({
        rules:
            {
                reg_password:
                {
                    required: true,
                    minlength: 6
                },
                reg_username:
                {
                    required: true
                },
                reg_password_confirm:
                {
                    equalTo: "#reg_password"
                },
                reg_email:
                {
                    required: true,
                    email: true
                },
            },
        messages:
        {
            password:{
                      required: "Password may not be empty"
                     },
            user_email: "Please verify your email-adress",
            reg_password_confirm: "Passwords don't match",
            reg_username: "Please fill in your desired username"
        },
        submitHandler: submitForm
    });
    // Sign-Up form validation END
    // Sign-up submit clicked START
    function submitForm()
    {
        var data = $("#sign-up-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'process_signup.php',
            data : data,
            beforeSend: function()
            {
                $("#ajax").html('Stap 1');
            },
            success:  function(response)
            {
                if ( response=="ok" )
                {
                    $("#ajax").html('Registratie voltooid!');
                }
                else
                {
                    $("#ajax").html('Registratie mislukt!');
                }
            }
        });
        return false;
    }
}); // Ready END
