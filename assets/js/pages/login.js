$(function() {


    // check either fields are blank or not
    //Login
    $('.loginSubmit').click(function() {
        var path = window.location.pathname;
        var page = path.split("/").pop();
        if ($('#inputEmail').val() === "") {
            $('#inputEmail').focus();
            $('#login-error').text('Please enter username').hide().fadeIn();
            setTimeout(function() {
                $('#login-error').fadeOut();
            }, 4000);
            return false;
        }
        if ($('#inputPassword').val() === "") {
            $('#inputPassword').focus();
            $('#login-error').text('Please enter password').hide().fadeIn();
            setTimeout(function() {
                $('#login-error').text('').fadeOut();
            }, 4000);
            return false;
        }

        $("#login-error").text("Processing...");


        //check username and password with server side
        var username = $('#inputEmail').val(),
                password = $('#inputPassword').val();
        $.ajax({
            type: "post",
            url: SITE_URL + "user/login/",
            data: {user: username, pass: password},
            dataType: "json",
            success: function(res) {
                console.log(res);
                if (res.status) {
                    if (res.active) {
                        if (page ==  "product") {
                            window.location.reload();
                        } else {
                            $("#loginSection").load(SITE_URL + "user/getLogin");
                            $(".loginClose").trigger("click");
                            $("#cartContainer").load(SITE_URL + "basket/getBasket" );
                        }
                    } else {
                        window.location.href = res.href;
                    }

                    return false;
                } else {
                    $("#login-error").text(res.error).hide().fadeIn("slow");
                    setTimeout(function() {
                        $('#login-error').fadeOut();
                    }, 4000);
                }
            }
        });
        return false;
    });



    /*
     * Register module
     */


    $("#registerForm").validate({
        rules: {
            inputFirstNameRegister: "required",
            inputUsernameRegister: "required",
            inputPasswordRegister: "required"

        },
        messages: {
            inputUsernameRegister: "Name required",
            inputPasswordRegister: "Password required",
            inputFirstNameRegister: "First name required"
        },
        submitHandler: function() {
            var data_form = $('#registerForm').serialize();
            console.log(data_form);
            $.ajax({
                type: 'post',
                url: $('#registerForm').attr('action'),
                data: data_form,
                dataType: 'json',
                success: function(rs) {
                    console.log(rs);
                    if (rs.status) {
                        window.location.href = rs.href;
                    }
                    else {
                        $("#register-error").text(res.error).hide().fadeIn("slow");
                        setTimeout(function() {
                            $('#register-error').fadeOut();
                        }, 4000);
                    }
                    return false;
                }
            });
            return false;
        }

    });




    //Logout
    //Module


    $(document).on('click', '#logOutAnchor', function() {
        var path = window.location.pathname;
        var page = path.split("/").pop();

        $.ajax({
            type: "post",
            url: SITE_URL + "user/logOut",
            success: function(rs) {
                if (page == "profile") {
                    window.location.href = SITE_URL;
                } else {
                    $("#loginSection").load(SITE_URL + "user/getLogin");
                }

                return false;
            },
            error: (function(er) {
                console.log(er);
            })
        });
        return false;
    });
});