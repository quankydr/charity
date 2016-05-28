/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#changeInfoForm").validate({
    rules: {
        firstName: "required",
        lastName: "required",
        houseNo: "required",
        street: "required",
        city: "required",
        phone: "required",
        cardNum1: {
            required: true,
            digits: true,
            minlength: 4
        },
        cardNum2: {
            required: true,
            digits: true,
            minlength: 4
        }, cardNum3: {
            required: true,
            digits: true,
            minlength: 4
        }, cardNum4: {
            required: true,
            digits: true,
            minlength: 4
        }, cvc: {
            required: true,
            digits: true,
            minlength: 3,
            maxlength: 3
        }, month: {
            required: true,
            min: 1,
            max: 12
        }, year: {
            required: true,
            min: 2013,
            max: 2019
        }

    },
    messages: {
        firstName: "Please enter First name",
        lastName: "Please enter Last name",
        houseNo: "Please enter house no",
        street: "Please enter street",
        city: "Please enter city",
        phone: "Please enter phone",
        cardNum1: {
            required: "Required",
            digits: "Number only",
            minlength: "Must be 4 numbers"
        }, cardNum2: {
            required: "Required",
            digits: "Number only",
            minlength: "Must be 4 numbers"
        }, cardNum3: {
            required: "Required",
            digits: "Number only",
            minlength: "Must be 4 numbers"
        }, cardNum4: {
            required: "Required",
            digits: "Number only",
            minlength: "Must be 4 numbers"
        }, cvc: {
            required: "Required",
            digits: "Number only",
            minlength: "Must be 3 numbers"
        }, month: {
            required: "Required",
            min: "Must choose month",
            max: "Must choose month"
        }, year: {
            required: "Required",
            min: "Must choose year",
            max: "Must choose year"
        }
    },
    submitHandler: function() {
        var data_form = $('#changeInfoForm').serialize();
        console.log(data_form);
        console.log($("#changeInfoForm"));
        $.ajax({
            type: 'post',
            url: $('#changeInfoForm').attr('action'),
            data: data_form,
            dataType: 'json',
            success: function(rs) {
                console.log(rs);
                if (rs.status) {
                    $('.notification').hide();
                    $('.success-change').fadeIn('slow');
                }
                else {
                    $('.notification').hide();
                    $('.error-change').fadeIn('slow');

                }
                var hideNoti = setTimeout(function() {
                    $('.notification').fadeOut('slow');
                }, 2000);
                return false;
            }
        });
        return false;
    }

});





$("#changePasswordform").validate({
    rules: {
        oldpassword:{
            required : true
        },
        newpassword: {
            required : true,
            minlength: 6,
            maxlength: 12
        },
        confirmpassword: {
            required : true,
            minlength: 6,
            maxlength: 12,
            equalTo: "#newpassword"
        }

    },
    messages: {
        oldpassword:{
            required : "Required",
            minlength: "At least 6 character",
            maxlength: "Too long, 12 t maximum"
        },
        newpassword: {
            required : "Required",
            minlength: "At least 6 character",
            maxlength: "Too long, 12 t maximum"
        },
        confirmpassword: {
            required : "Required",
            minlength: "At least 6 character",
            maxlength: "Too long, 12 t maximum",
            equalTo : "Mismatching"
        }
    },
    submitHandler: function() {
        var data_form = $('#changePasswordform').serialize();
        console.log(data_form);
        console.log($("#changePasswordform"));
        $.ajax({
            type: 'post',
            url: $('#changePasswordform').attr('action'),
            data: data_form,
            dataType: 'json',
            success: function(rs) {
                console.log(rs);
                if (rs.status) {
                    $('.notification').hide();
                    $('.success-changepw').fadeIn('slow');
                    $('#changePasswordform').trigger("reset");
                }
                else {
                    $('.notification').hide();
                    $('.change-msg-err').text(rs.msg);
                    $('.error-changepw').fadeIn('slow');
                }
                var hideNoti = setTimeout(function() {
                    $('.notification').fadeOut('slow');
                }, 2000);
                return false;
            }
        });
        return false;
    }

}); 