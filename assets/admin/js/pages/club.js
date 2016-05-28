/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {

    $('.sidebar-menu').find('li').removeClass('active');
    $('.sb-category').parent('li').addClass('active');
    $('#dataTable').dataTable({
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": true
    });

    $("#form").validate({
		rules: {
                    name: "required",
		},
		messages: {
                    name: "Please enter name",
		},
                submitHandler: function(){
                    var data_form = $('#form').serialize();
                    console.log(data_form);
                    console.log($("#form"));
                    $.ajax({
                        type: 'post',
                        url: $('#form').attr('action'),
                        data: data_form,
                        dataType: 'json',
                        success: function(rs){
                            if (rs.status){
                                $('.notification').hide();
                                $('.msgsuccess').text(rs.msg);
                                $('.notification').fadeIn('slow');

                                 $('#dataTable').dataTable().fnAddData( [
                                    rs.insertedID,
                                    $('#name').val(),
                                    "Enable",
                                    "<a href='sport/edit/"+ rs.insertedID +"'>Edit</a> "
                                ] );
                                console.log(rs.msg);
                                $('#form').trigger('reset');
                            }
                            else{
                                console.log(rs.msg);
                                $('.notification').hide();
                                $('.msgerror').fadeIn('slow');
                                $('.msgerror').text(rs.msg);
                            }
                            var hideNoti = setTimeout(function(){
                                    $('.notification').fadeOut('slow');
                                },2000);
                            return false;
                        }
                    });
                    return false;
                }

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
