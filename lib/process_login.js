$('document').ready( function()
{
    $('.login_form').validate({
        rules:
            {
                login_username:
                {
                    required: true
                },
                login_password:
                {
                    required: true,
                    minlength: 6
                }
            },
        messages:
        {
            login_username: "Please fill in your username",
            login_password:
            {
                required: "Please fill in a password",
                minlength: "Password is to short"
            },
        },
        submitHandler: submitForm
    }); // Validation END

    function submitForm()
    {
        var data = $('.login_form').serialize();

        $.ajax({
            type: "POST",
            url: "process_login.php",
            data: data,
            beforeSend: function()
            {
                $(".ajax").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Gegevens valideren');
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            },
            success: function(response)
            {
                if ( response=="ok" )
                {
                    $('.ajax').html('<i class="fa fa-spinner fa-spin fa-fw"></i> Uw wordt doorgelinkt');
                    $('.ajax').css('border', '1px solid #357a35');
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 3000);
                }
                else if ( response=="nook" )
                {
                    $('.ajax').html('<i class="fa fa-check-circle-o" aria-hidden="true"></i> Inlogpoging mislukt');
                }
            }
        }); // Ajax END
    } // submitForm END
}); // Ready END
