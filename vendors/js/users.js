$(function () {
    createuser();
    if($('#view_users').length != 0){
        viewusers(10,0);
    }
    if($('#view_engineers').length != 0){
        viewengineers(10,0);
    }    
    createengineer();
    datepickerinit();

    updateengineer();
    $("#reset_user").on("click", function() {
        $("#view_users_form")[0].reset()
        viewusers(10,0);
    });
});

function datepickerinit()
{
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    });
}

function createuser()
{
	$('#create_user').click(function(){
        var email_regex = /(^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$)/;
		if($.trim($('#user_name').val()) == '')
		{
			warningalertwithfocus('Enter a user name for the user', $('#user_name'))
		}
		else if($.trim($('#user_first_name').val()) == '')
		{
			warningalertwithfocus('Enter a first name of the user', $('#user_first_name'))
		}
		else if($.trim($('#user_group_id').val()) == '')
		{
			warningalertwithfocus('Select the user group for the user', $('#user_group_id'))
		}	
		else if($.trim($('#user_pass').val()) == '')
		{
			warningalertwithfocus('Enter the password for the user', $('#user_pass'))
		}
		else if($.trim($('#user_pass_confirm').val()) == '')
		{
			warningalertwithfocus('Reenter the password', $('#user_pass_confirm'))
		}
		else if($.trim($('#user_pass').val()) != $.trim($('#user_pass_confirm').val()))
		{
			warningalertwithfocus('Both passwords do not match', $('#user_pass'))
		}
        else if ($.trim($('#user_email').val()) != "" && !email_regex.test($.trim($('#user_email').val()))) {
            warningalertwithfocus(
                "Please enter a valid email.",
                $("#user_email")
            );
		}	
		else
		{
			$.ajax({
		        type: 'post', 
		        url : base_url +"users/createuser",
		        data: $('#add_user_form').serialize(),
		        beforeSend: function() {
	                waitingalert()
	            },
		        success: function(result) 
		        {
		            if(result == 'inserted')
	            	{
	            		$("#add_user_form")[0].reset();
	            		successalert('Successfully created the user');
	            	}
	            	else if(result == 'exists')
            		{
            			warningalertwithfocus('This username already exists. Enter an another one', $('#user_name'))
            		}
            		else
        			{
        				erroralert('Failed to create the user');
        			}
		        }
		    });
		}
	});
}

function viewusers(pagecount, page)
{
    $('#pagecount').val(pagecount);
    $('#page').val(page);
    $.ajax({
        type: 'post', 
        url : base_url +"users/ajaxviewuserspage",
        data: $('#view_users_form').serialize(),
        beforeSend: function() {
            waitingalert()
        },
        success: function(result) 
        {
            $('#view_users').html(result);
            alertclose();
        }
    });  
}

function deleteuser(user_id, elem)
{  
    swal({
        title: "Warning",
        text: 'Are you sure you want to delete this user?',
        icon: "warning",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true,
    })
    .then((confirm) => {
        if (confirm) {
             $.ajax({
                type: 'post', 
                url : base_url +"users/deleteuser",
                data: {
                    user_id : user_id,
                    rn_token_name : $('#view_users_form').find('input[name="rn_token_name"]').val(), 
                },
                success: function(result) 
                {
                    if(result === 'deleted')
                    {
                        $(elem).parent().parent().remove();
                        swal("Successfully deleted the user", {icon: "success",});
                    }
                    else
                    {
                        swal("Cannot delete the user", {icon: "error",});
                    }                    
                }
            });
        }
    });
}

function saveeditprofile()
{
    var firstname  = $.trim($('#firstname').val());
    var firstname_regex   = /^[a-zA-Z]+$/;
    var lastname  = $.trim($('#lastname').val());
    var lastname_regex   = /^[a-zA-Z]+$/;
    var email      = $.trim($('#email').val());
    var email_regex    = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var phone = $.trim($('#phone').val());
    var phone_regex = /([0-9]+)/;

    if (firstname == '' || !firstname_regex.test(firstname))
    {
        warningalertwithfocus('Enter a valid first name', $('#firstname'))
    }
    else if (lastname == '' || !lastname_regex.test(lastname))
    {
        warningalertwithfocus('Enter a valid last name', $('#lastname'))
    }
    else if (email == '' || !email_regex.test(email))
    {
        warningalertwithfocus('Enter a valid email', $('#email'))
    }
    else if (phone == '' || !phone_regex.test(phone))
    {
        warningalertwithfocus('Enter a valid phone number', $('#phone'))
    }
    else {
        $.ajax({
            type: 'post',
            url: base_url + "users/ajaxUpdateProfile/",
            data: $('#add_user_form').serialize(),
            beforeSend: function() {
                waitingalert()
            },
            success: function(result){
                var split   = result.split("##");
                var message = split[0];
                var html    = split[1];
                if(message == 'success')
                {
                    swal({
                        title: "Success",
                        text: 'Successfully updated the details',
                        icon: "success",
                        button: "Ok",
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        dangerMode: true,
                    })
                    .then((confirm) => {
                        location.reload();
                    });
                }
                else if( message == 'failed')
                {
                    warningalert('Failed to update the details')
                }
                else if(message == 'sessionout')
                {
                    swal({
                        title: "Warning",
                        text: 'Your session has been expired! Please Login again',
                        icon: "warning",
                        button: "Ok",
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        dangerMode: true,
                    })
                        .then((confirm) => {
                            if (confirm) {
                                window.location.href = base_url;
                            }
                        });
                }
                else
                {
                    warningalert('Something went wrong')
                }
            }
        });
    }
}

function savenewpassword()
{
    var new_password  = $.trim($('#new_password').val());
    var confirm_password  = $.trim($('#confirm_password').val());

    if(new_password === '' || confirm_password === '')
    {
        warningalertwithfocus('Password Fields is empty', $('#new_password'));
    }
    else if (new_password !== confirm_password)
    {
        warningalertwithfocus('Password does not match', $('#new_password'));
    }
    else if (confirm_password.length < 6) {
        warningalertwithfocus('Your password must be at least 6 characters', $('#confirm_password'));
    }
    else if (confirm_password.search(/[a-z]/i) < 0) {
        warningalertwithfocus('Your password must contain at least one letter.', $('#confirm_password'));
    }
    else if (confirm_password.search(/[0-9]/) < 0) {
        warningalertwithfocus('Your password must contain at least one digit.', $('#confirm_password'));
    }
    else{
        $.ajax({
            type: 'post',
            url: base_url + "users/ajaxUpdatePassword/",
            data: $('#change_password_form').serialize(),
            beforeSend: function() {
                waitingalert();
            },
            success: function(result){
                var split   = result.split("##");
                var message = split[0];
                var html    = split[1];
                if(message == 'success')
                {
                    swal({
                        title: "Success",
                        text: 'Successfully updated the details',
                        icon: "success",
                        button: "Ok",
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        dangerMode: true,
                    });
                }
                else if( message == 'failed')
                {
                    warningalert('Failed to update the details');
                }
                else if(message == 'sessionout')
                {
                    swal({
                        title: "Warning",
                        text: 'Your session has been expired! Please Login again',
                        icon: "warning",
                        button: "Ok",
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                        dangerMode: true,
                    })
                        .then((confirm) => {
                            if (confirm) {
                                window.location.href = base_url;
                            }
                        });
                }
                else
                {
                    warningalert('Something went wrong');
                }
            }
        });
    }
}

jQuery('#edit_user_dls_via_ajx').click(function(){
    jQuery(this).addClass('hide');
    jQuery('.edit_user_details_ajax p').removeClass('hide');
    jQuery('#update_user_dls_via_ajx').removeClass('hide');
    jQuery('#cancel_user_dls_via_ajx').removeClass('hide');
    jQuery('form input').removeAttr('readonly');
    jQuery('#user_group_id').removeAttr('disabled');
    jQuery('#user_group_id').removeClass('cls_events_handler');
});

jQuery('#cancel_user_dls_via_ajx').click(function(){
    jQuery(this).addClass('hide');
    jQuery('#update_user_dls_via_ajx').addClass('hide');
    jQuery('#edit_user_dls_via_ajx').removeClass('hide');
    jQuery('#user_group_id').prop('disabled','disabled');
    jQuery('#user_name').attr("readonly", true);
    jQuery('#user_first_name').attr("readonly", true);
    jQuery('#user_last_name').attr("readonly", true);
    jQuery('#user_email').attr("readonly", true);
    jQuery('#user_phone').attr("readonly", true);



});


jQuery('#update_user_dls_via_ajx').click(function(event){
    event.preventDefault();
    var user_id      =  jQuery('.edit_user_details_ajax #user_id').val();
    var user_name    =  jQuery('.edit_user_details_ajax #user_name').val();
    var user_fname   =  jQuery('.edit_user_details_ajax #user_first_name').val();
    var user_lname   =  jQuery('.edit_user_details_ajax #user_last_name').val();
    var email        =  jQuery('.edit_user_details_ajax #user_email').val();
    var phone        =  jQuery('.edit_user_details_ajax #user_phone').val();
    var user_group   =  jQuery('.edit_user_details_ajax #user_group_id').val();
     
    jQuery.ajax({
        type: 'post', 
        url : base_url +"users/update_userdetails",
        data: $('#add_user_form').serialize(),
        success: function(result) 
        {
            
            if(result == 'success')
            {

            jQuery('#edit_user_dls_via_ajx').removeClass('hide');
            jQuery('#update_user_dls_via_ajx').addClass('hide');
            jQuery('#cancel_user_dls_via_ajx').addClass('hide');
            
            jQuery('form input').attr('readonly', true);
            jQuery('#user_group_id').addClass('cls_events_handler');



                swal({
                    title: "Success",
                    text: 'Successfully updated the user details',
                    icon: "success",
                    button: "Ok",
                    closeOnEsc: false,
                    closeOnClickOutside: false,
                    dangerMode: true,
                });
            } 
            else 
            {
                swal({
                    title: "Error",
                    text: result,
                    icon: "error",
                    button: "Ok",
                    closeOnEsc: false,
                    closeOnClickOutside: false,
                    dangerMode: true,
                });
                $('.swal-modal .swal-text').html(result);
            }
        }
    }); 
});

function createengineer()
{
    $('#create_engineer').click(function(){
        var user_name_regex      = /(^[a-zA-Z0-9]*$)/;
        if($.trim($('#eng_first_name').val()) == '')
        {
            warningalertwithfocus('Enter a first name for the engineer', $('#eng_first_name'))
        }
        else if($.trim($('#eng_phone_number').val()) == '')
        {
            warningalertwithfocus('Enter a phone number of the engineer', $('#eng_phone_number'))
        }
        else if($.trim($('#eng_date_of_birth').val()) == '')
        {
            warningalertwithfocus('Select choose the date of birth of the engineer', $('#eng_date_of_birth'))
        }   
        else if($.trim($('#user_name').val()) == '')
        {
            warningalertwithfocus('Enter a user name for the user', $('#user_name'))
        }
        else if(!user_name_regex.test($.trim($('#user_name').val())))
        {
            warningalertwithfocus('Enter a valid user name', $('#user_name'))
        }
        else if($.trim($('#user_pass').val()) == '')
        {
            warningalertwithfocus('Enter the password for the user', $('#user_pass'))
        }
        else if($.trim($('#user_pass_confirm').val()) == '')
        {
            warningalertwithfocus('Reenter the password', $('#user_pass_confirm'))
        }
        else if($.trim($('#user_pass').val()) != $.trim($('#user_pass_confirm').val()))
        {
            warningalertwithfocus('Both passwords do not match', $('#user_pass'))
        }   
        else
        {
            $.ajax({
                type: 'post', 
                url : base_url +"createengineer",
                data: $('#add-engineer').serialize(),
                beforeSend: function() {
                    waitingalert()
                },
                success: function(result) 
                {
                    if(result == 'inserted')
                    {
                        $("#add-engineer")[0].reset()
                        successalert('Successfully created the engineer')
                    }
                    else if(result == 'exists')
                    {
                        warningalertwithfocus('This username already exists. Enter an another one', $('#user_name'))
                    }
                    else
                    {
                        erroralert('Failed to create the engineer');
                    }
                }
            });
        }
    });
}

function viewengineers(pagecount, page)
{
    $.ajax({
        type: 'post', 
        url : base_url +"users/ajaxviewengineerspage",
        data: $('#view_engineers_form').serialize(),
        beforeSend: function() {
            waitingalert()
        },
        success: function(result) 
        {
            $('#view_engineers').html(result);
            alertclose();
        }
    });  
}

function deleteengineer(eng_id, elem)
{  
    swal({
        title: "Warning",
        text: 'Are you sure you want to delete this engineer?',
        icon: "warning",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true,
    })
    .then((confirm) => {
        if (confirm) {
             $.ajax({
                type: 'post', 
                url : base_url +"users/deleteengineer",
                data: {
                    eng_id : eng_id,
                    rn_token_name : $('#view_engineers_form').find('input[name="rn_token_name"]').val(), 
                },
                success: function(result) 
                {
                    if(result === 'deleted')
                    {
                        $(elem).parent().parent().remove();
                        swal("Successfully deleted the engineer", {icon: "success",});
                    }
                    else
                    {
                        swal("Cannot delete the engineer", {icon: "error",});
                    }                    
                }
            });
        }
    });
}

function updateengineer()
{
    $('#update_engineer').click(function(){
        var user_name_regex      = /(^[a-zA-Z0-9]*$)/;
        if($.trim($('#eng_first_name').val()) == '')
        {
            warningalertwithfocus('Enter a first name for the engineer', $('#eng_first_name'))
        }
        else if($.trim($('#eng_phone_number').val()) == '')
        {
            warningalertwithfocus('Enter a phone number of the engineer', $('#eng_phone_number'))
        }
        else if($.trim($('#eng_date_of_birth').val()) == '')
        {
            warningalertwithfocus('Select choose the date of birth of the engineer', $('#eng_date_of_birth'))
        } 
        else if($.trim($('#user_pass').val()) != $.trim($('#user_pass_confirm').val()))
        {
            warningalertwithfocus('Both passwords do not match', $('#user_pass'))
        }   
        else
        {
            $.ajax({
                type: 'post', 
                url : base_url +"updateengineer",
                data: $('#edit_engineer_form').serialize(),
                beforeSend: function() {
                    waitingalert()
                },
                success: function(result) 
                {
                    if(result == 'updated')
                    {
                        swal({
                            title: "Success",
                            text: 'Successfully updated the engineer details',
                            icon: "success",
                            button: "Ok",
                            closeOnEsc: false,
                            closeOnClickOutside: false,
                            dangerMode: true,
                        })
                        .then((confirm) => {
                            if (confirm) {
                                location.reload();
                            }
                        });
                    }
                    else
                    {
                        erroralert('Failed to update the engineer');
                    }
                }
            });
        }
    });
}
function updatenewpassword()
{
    var new_password  = $.trim($('#user_pass').val());
    var confirm_password  = $.trim($('#user_pass_confirm').val());
 //  alert("hai");

    if(new_password == '' || confirm_password == '')
    {   
        warningalertwithfocus('Password Fields is empty', $('#user_pass'));
    }
    else if (new_password != confirm_password)
    {
        warningalertwithfocus('Password does not match', $('#user_pass'));
    }
    else if (confirm_password.length < 6) {
        warningalertwithfocus('Your password must be at least 6 characters', $('#user_pass_confirm'));
    }
    else if (confirm_password.search(/[a-z]/i) < 0) {
        warningalertwithfocus('Your password must contain at least one letter.', $('#user_pass_confirm'));
    }
    else if (confirm_password.search(/[0-9]/) < 0) {
        warningalertwithfocus('Your password must contain at least one digit.', $('#user_pass_confirm'));
    }
    else{
        console.log("hai");
        $.ajax({
            type: 'post',
            url: base_url + "users/updatePassword/",
            data: $('#change_password_form').serialize(),
            beforeSend: function() {
                waitingalert();
            },
            success: function(response) {
                var parsedJson = $.parseJSON(response);

                if (parsedJson.status == 'error') {
                    swal("Error!", parsedJson.message, "error", {
                        button: "OK",
                    });
                } else {
                    swal({
                        title: "Success",
                        text: parsedJson.message, 
                        icon: "success",
                        button: "OK"
                    })
                    .then((isConfirm) => {
                        if (isConfirm) {
                            window.location.reload();
                        } else {
                            swal("Error!", "Something went wrong! Please try again", "error", {
                                button: "OK",
                            });
                        }
                    }); 
                } 
            }
        });
    }
}
//User Status Update 
function userStatusUpdate(user_id, status) {
    swal({
        title: "Warning",
        text: "Are you sure want to change status this user ?",
        icon: "warning",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true,
    })
    .then((confirm) => {
        if (confirm) {
            $.ajax({
                type: 'post', 
                url : base_url +"users/updateStatus",
                data: {
                    user_id : user_id,
                    status : status,
                    rn_token_name : $('#view_users_form').find('input[name="rn_token_name"]').val(), 
                },
                beforeSend: function() {
                    waitingalert();
                },
                success: function(result) {
                    if (result === 'success') {
                        alertclose();
                        swal({
                            title: "Success",
                            text: "User status updated successfully.", 
                            icon: "success",
                            button: "OK"
                        })
                        .then((isConfirm) => {
                            if (isConfirm) {
                               location.reload();  
                            } else {
                                swal("Error!", "Something went wrong! Please try again", "error", {
                                    button: "OK",
                                });
                            }
                        });
                    } else {
                        swal("Error!", "Something went wrong! Please try again", "error", {
                            button: "OK",
                        });  
                    }                    
                }
            });
        }
    }); 
}
