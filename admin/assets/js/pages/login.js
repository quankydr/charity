$(function(){
    document.title = "Login";



   // check either fields are blank or not
   $('#btn_login').click(function(){
      if ($('.userid').val() == ""){
          $('.userid').focus();
          console.log("test")
          $('#login-error').text('Please enter username').hide().fadeIn();
          setTimeout(function(){
              $('#login-error').fadeOut();
          }, 4000);
          return false;
      }
      if ($('.password').val() == ""){
          $('.password').focus();
          $('#login-error').text('Please enter password').hide().fadeIn();
          setTimeout(function(){
              $('#login-error').text('');
          }, 4000);
          return false;
      }
      
      
      $("#login-error").text("Processing...");
      
      // return false;

      //check username and password with server side
      var username = $('.userid').val(),
          password = $('.password').val();
        $.ajax({
                type: 		"post",
                url: 		"admin/login/doLogin",
                data: 		{user: username, pass: password},
                dataType:       "json",
                success:	function(res) {
                    console.log(res);
                    // return false;
                    if (res.status){
                        window.location.href = res.href;
                    }else{
                        $("#login-error").text(res.error).hide().fadeIn("slow");
                        setTimeout(function(){
                            $('#login-error').text('');
                        }, 4000);
                    }
                }
        });
      return false;
   });
});