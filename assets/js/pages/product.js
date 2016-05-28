/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {
    
    
    
    /*
     * 
     * Upload
     */
    $(".triggerUpload").click(function(){
      $("#fileUploadInput").trigger("click");
    });
    
    $('#fileUploadInput').change(function()	
    {
      console.log("changed");
        $("#uploadForm").ajaxForm(
        {
          success:       showResponse,  // post-submit callback
          dataType:     'json'
        }).submit();
    });
    
    function showResponse(data)  { 
      console.log("link: " + data.msg);
      console.log("name: " + data.fileName);
      $("#productImageName").val(data.fileName);
      $("#productImage").val(data.fileName);
      return false;
    } 
    
    /*
     * End upload
     */
    
    
    $("#commentform").submit(function(){
      return false;
       var data_form = $('#commentform').serialize();
                    console.log(data_form);
                    $.ajax({
                        type: 'post',
                        url: $('#commentform').attr('action'),
                        data: data_form,
                        dataType: 'json',
                        success: function(rs){
                            console.log(rs);
                            return;
                            if (rs.status){
                                $('.notification').hide();
                                
                                $('.msgsuccess').text(rs.msg);
                                $('.not-scc').fadeIn('slow');
                                $('#commentform').trigger('reset');
                                $("#loadComments").load(rs.load);
                                //document.location.reload();
                            }
                            else{
                                $('.notification').hide();
                                $('.not-err').fadeIn('slow');
                                $('.msgerror').text(rs.msg);
                            }
                            var hideNoti = setTimeout(function(){
                                    $('.notification').fadeOut('slow');
                                },2000);
                            return false;
                        }
                    });
                    return false;
    });
    
 $(document).ready(function(){
	$(".rating").jRating({
	  length:5,
	  decimalLength:1,
          rateMax: 10,
	  onSuccess : function(res){
		
	  },
	  onError : function(res){

	  }
          
	});
  });
  
  $(document).ready(function(){
	$(".ratingdisable").jRating({
	  length:5,
	  decimalLength:1,
          rateMax: 10,
	  isDisabled : true
	});
  });


    
    
    
    $("#editForm").validate({
		rules: {
			name: "required"  
		},
		messages: {
			name: "Please enter the item name"
		},
                submitHandler: function(){
                    var data_form = $('#editForm').serialize();
                    console.log(data_form);
                    $.ajax({
                        type: 'post',
                        url: $('#editForm').attr('action'),
                        data: data_form,
                        dataType: 'json',
                        success: function(rs){
                            if (rs.status){
                                $('.notification').hide();
                                $('.alert-success').fadeIn('slow');
//                                var refresh = setTimeout(function(){
//                                    window.location.reload(); 
//                                },2000)
                            }
                            else{
                                $('.notification').hide();
                                $('.alert-danger').fadeIn('slow');
                            }
                            return false;
                        }
                    });
                    return false;
                }
                
	}); 
    
    
});
