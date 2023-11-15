$(document).ready(function() {
    if (window.location.href.indexOf("#") > -1) {
        if (window.location.href.indexOf('reload')==-1) {
            window.location.replace(window.location.href+'?reload');
        }
    }
});
$(function() {
    datepickerinit();
    $('#received_on').daterangepicker({
        locale: {
            format: 'DD-MM-YYYY'
        }
    });
    $('#received_on').val('');
    if ($("#view_jobs").length != 0) {
        viewjobs(20, 0, 0);
    }
    editjob();
    statusUpdates();
    $("#reset_forms").on("click", function() {
        $("#client_full_name").val('');
        $("#client_phone_number").val('');
        $("#job_id_search").val('');
        $("#post_code").val('');
        $("#search").val('');
        $("#job_type").val('');
        $("#boiler_type").val('');
        $("#boiler_make").val('');
        $("#job_status").val('');
        $("#received_on").val('');
        viewjobs(20, 0, 0);

    });

    if ($("#create_job").length != 0) {
        getaddresspostode();
        getaddresspostodecancel();
        addjobmanual();
    }

    if ($("#managenotes").length != 0) {
        addnotes();
        shownotes();
        showjobstatus();
    }

    if ($("#managejobstatus").length != 0) {
        $("#attempt_added_on").datetimepicker({
            format: "yyyy-mm-dd hh:ii:ss"
        });
        addjobstatus();
        showjobstatus();
    }
});

function datepickerinit() {
    $(".datepicker").datepicker({
        autoclose: true,
        format: "dd-mm-yyyy"
    });
}

function viewjobs(pagecount, page, forcesearch = 0) {
    $("#pagecount").val(pagecount);
    $("#page").val(page);
    $("#forcesearch").val(forcesearch);

    if ($("#view_jobs").length > 0) {
        $.ajax({
            type: "post",
            url: base_url + "viewrnsbjob",
            data: $("#jobs_search_form").serialize(),
            beforeSend: function() {
                waitingalert();
            },
            success: function(result) {
                $("#view_jobs").html(result);
                // $('.rnquotes_search').removeClass('d-none');
                alertclose();
            }
        });
    }
}
$(".reset_form").on("click", function() {
    $.ajax({
        type: "get",
        url: base_url + "gche_quotes_session_unset",
        success: function(result) {
            window.location.href = base_url + "viewgchequotes";
        }
    });
});

function viewotherquotes() {
    $.ajax({
        type: "post",
        url: base_url + "viewotherquotes",
        data: $("#global-form").serialize(),
        beforeSend: function() {
            waitingalert();
        },
        success: function(result) {
            $("#otherquotes .box-body").html(result);
            addcustomerfeedback();
            alertclose();
        }
    });
}

function cancelquote() {
    $("#cancel-job-customer").click(function() {
        viewjobdetails();
    });
}

function deletejob(job_id) {
    swal({
        title: "Warning",
        text: "Are you sure you want to delete this job?",
        icon: "warning",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: false
    }).then(confirm => {
        if (confirm) {
            $.ajax({
                type: "post",
                url: base_url + "deletejob",
                data: {
                    rn_token_name: $("#jobs_search_form")
                        .find('input[name="rn_token_name"]')
                        .val(),
                    job_id: job_id
                },
                beforeSend: function() {
                    // waitingalert();
                },
                success: function(result) {
                    if (result == "failed") {
                        erroralert("Something went wrong");
                    } else {
                        swal({
                            title: "Success",
                            text: "Successfully deleted the job",
                            icon: "success",
                            button: "Ok",
                            closeOnEsc: false,
                            closeOnClickOutside: false,
                            dangerMode: true
                        }).then(confirm => {
                            if (confirm) {
                                if($('#view_jobs').length != 0){
                                    viewjobs(20,0);
                                }
                            }
                        });
                    }
                }
            });
        }
    });
}

function getaddresspostode() {
    $("#get-client-address").click(function() {
        var client_post_code = $("#client_post_code").val();
        if (client_post_code != "") {
            $.ajax({
                type: "post",
                url: base_url + "getjobaddresspostcode",
                data: $("#create_job").serialize(),
                beforeSend: function() {
                    waitingalert();
                },
                success: function(result) {
                    alertclose();

                    if (result != "") {
                        $("#get-address-wrap").html(result);
                        $("#client_address_edit").hide();
                        $("#client_address").change(function() {
                            $("#client_address_edit").val(this.value);
                        });
                        $("#edit_address").click(function() {
                            var address = $("#client_address").val();
                            $("#client_address").hide();
                            $("#edit_address").hide();
                            $("#cancel_address").show();
                            $("#client_address_edit").show();
                            $("#client_address_edit").val(address);
                        });
                        $("#cancel_address").click(function() {
                            var address = $("#client_address").val();
                            $("#client_address").show();
                            $("#cancel_address").hide();
                            $("#edit_address").show();
                            $("#client_address_edit").hide();
                            $("#client_address_edit").val(address);
                        });
                    }
                }
            });
        } else {
            //
        }
    });
}

function getaddresspostodecancel() {
    $("#get-address-cancel").click(function() {
        $("#client_post_code").val("");
        var html =
            '<input id="customer_address" name="customer_address" class="form-control" placeholder="Enter Customer Address" value="" type="text">';
        $("#get-address-wrap").html(html);
    });
}

function addjobmanual() {
    $("#save-job").click(function() {
        var job_reference_number = $.trim($("#job_reference_number").val());
        var client_full_name = $.trim($("#client_full_name").val());
        var client_phone_number = $.trim($("#client_phone_number").val());
        var client_post_code = $.trim($("#client_post_code").val());
        var client_address = $.trim($("#client_address").val());
        var client_address_edit = $.trim($("#client_address_edit").val());
        var client_email = $.trim($("#client_email").val());
        var job_type = $.trim($("#job_type").val());
        var boiler_type = $.trim($("#boiler_type").val());
        var boiler_make = $.trim($("#boiler_make").val());
        var fuel_type = $.trim($("#fuel_type").val());
        var job_comments = $.trim($("#job_comments").val());

        var alphabetic_regex = /(^[a-zA-Z ]*$)/;
        var alphanumeric_regex = /(^[a-zA-Z\d\-_\s]+$)/;
        var email_regex = /(^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$)/;

        if (job_reference_number == "") {
            warningalertwithfocus(
                "Please enter the job reference number",
                $("#job_reference_number")
            );
        }else if (client_full_name == "") {
            warningalertwithfocus(
                "Please enter the full name",
                $("#client_full_name")
            );
        } else if (
            client_full_name != "" &&
            !alphabetic_regex.test(client_full_name)
        ) {
            warningalertwithfocus(
                "Unwanted character used. Please enter the full name again.",
                $("#client_full_name")
            );
        } else if (client_phone_number == "") {
            warningalertwithfocus(
                "Please enter the phone number",
                $("#client_phone_number")
            );
        } else if (client_phone_number != "" && isNaN(client_phone_number)) {
            warningalertwithfocus(
                "Unwanted character used. Please enter the phone number again.",
                $("#client_phone_number")
            );
        } else if (client_post_code == "") {
            warningalertwithfocus(
                "Please enter the post code",
                $("#client_post_code")
            );
        } else if (
            client_post_code != "" &&
            !alphanumeric_regex.test(client_post_code)
        ) {
            warningalertwithfocus(
                "Unwanted character used. Please enter the post code again.",
                $("#client_post_code")
            );
        } else if (client_address == "" || client_address_edit =="") {
            warningalertwithfocus(
                "Please select/enter the address",
                $("#client_address")
            );
        } else if (client_email == "") {
            warningalertwithfocus("Please enter the email", $("#client_email"));
        } else if (client_email != "" && !email_regex.test(client_email)) {
            warningalertwithfocus(
                "Please enter a valid email.",
                $("#client_email")
            );
        } else if (job_type == "") {
            warningalertwithfocus(
                "Please select a job type",
                $("#job_type")
            );
        } else if (boiler_type == "") {
            warningalertwithfocus("Please select a boiler type", $("#boiler_type"));
        } else if (boiler_make == "") {
            warningalertwithfocus("Please select a boiler make", $("#boiler_make"));
        } else if (fuel_type == "") {
            warningalertwithfocus(
                "Please select a fuel type",
                $("#fuel_type")
            );
        } else if (job_comments == "") {
            warningalertwithfocus("Please enter the comments", $("#job_comments"));
        } else {
            $.ajax({
                type: "post",
                url: base_url + "addjobmanual",
                data: $("#create_job").serialize(),
                beforeSend: function() {
                    waitingalert();
                },
                success: function(result) {
                    alertclose();

                    if (result != "") {
                        if (result.indexOf("RNSB") == 0) {
                            swal({
                                title: "Success",
                                text: "Successfully created the job. Do you want to redirect to the job page?",
                                icon: "success",
                                buttons: true,
                                closeOnEsc: false,
                                closeOnClickOutside: false,
                                dangerMode: true
                            }).then(confirm => {
                                if (confirm) {
                                    window.location.href =
                                        base_url + "rnsbjobdetailsingle/" + result + "/";
                                } else {}
                            });
                        }else if(result == 'duplicate'){
                            warningalertwithfocus(
                                "The job reference number has already been taken.",
                                $("#job_reference_number")
                            );
                        }else{
                            warningalert('Failed');
                        }
                    }
                }
            });
        }
    });
}

function exporttoexcel(status) {
    if (status == 0) {
        var daterange = $('#received_on').val();
         if(daterange == ""){
            warningalert('Please select date range');
        } else {
            $.ajax({
                type: "post",
                url: base_url + "exportjobexcelauth",
                data: $("#jobs_search_form").serialize(),
                beforeSend: function() {
                    waitingalert();
                },
                success: function(result) {
                    if (result == "not_authorised_to_download_the_data") {
                        warningalert("You are not authorised to download the data");
                    }else if (result == "no data found") {
                        warningalert("No Data Found");
                    }else if (result != "") {
                        alertclose();
                        window.open(base_url + "/rnsbjobs/exportjobexcel/", "_blank");
                    } else {
                        warningalert("Something went wrong");
                    }
                }
            });
        }
    } else {
        $.ajax({
            type: "post",
            url: base_url + "exportjobexcelauth",
            data: $("#jobs_search_form").serialize(),
            beforeSend: function() {
                waitingalert();
            },
            success: function(result) {
                if (result == "not_authorised_to_download_the_data") {
                    warningalert("You are not authorised to download the data");
                } else if (result != "") {
                    alertclose();
                    window.open(base_url + "/rnsbjobs/exportjobexcel/", "_blank");
                } else {
                    warningalert("Something went wrong");
                }
            }
        });
    }
}

function addnotes() {
    $("#add-note").click(function(event) {
        var note = $.trim($("#job_notes").val());
        var fileName = $.trim($("#personal").val());

        if (note == "") {
            warningalertwithfocus(
                "Please enter the note for the job",
                $("#job_notes")
            );
        } else if (fileName !='' && !(/\.(jpg|jpeg|png|pdf)$/i).test(fileName)) {
            warningalertwithfocus(
                "Invalid file format",
                $("#personal")
            );            
        } else {
            var form_data = new FormData($('#managenotes')[0]);
            $.ajax({
                type: "post",
                url: base_url + "addjobnotes_rnsb",
                data: form_data,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    waitingalert();
                },
                success: function(result) {
                    if(result == "exceeds"){
                        erroralert("File size exceeds 5MB");
                    }else if (result == "added") {
                        swal({
                            title: "Success",
                            text: "Note added successfully",
                            icon: "success",
                            button: "OK",
                            closeOnEsc: false,
                            closeOnClickOutside: false,
                            dangerMode: true,
                          }).then(function () {
                          
                            $("#job_notes").val("");
                            $("#personal").val("");
                            shownotes();
                        });
                    } 
                    alertclose();
                }
            });
        }
    });
}

function shownotes() {
    if ($("#managenotes").length != 0) {
        $.ajax({
            type: "post",
            url: base_url + "showjobnotes_rnsb",
            data: $("#managenotes").serialize(),
            beforeSend: function() {
                // waitingalert();
            },
            success: function(result) {
                $("#view-quote-notes").html(result);
                alertclose();
            }
        });
    }
}

function deletejobnotes(note_id) {
    swal({
        title: "Warning",
        text: "Are you sure you want to delete this note?",
        icon: "warning",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true
    }).then(confirm => {
        if (confirm) {
            $.ajax({
                type: "post",
                url: base_url + "deletejobnotes_rnsb",
                data: {
                    rn_token_name: $("#managenotes")
                        .find('input[name="rn_token_name"]')
                        .val(),
                    quote_en: $("#managenotes")
                        .find('input[name="quote_en"]')
                        .val(),
                    note_id: note_id
                },
                beforeSend: function() {
                    waitingalert();
                },
                success: function(result) {
                    if (result == "failed") {
                        erroralert("Something went wrong");
                    } else {
                        swal({
                            title: "Success",
                            text: "Successfully deleted the note",
                            icon: "success",
                            button: "Ok",
                            closeOnEsc: false,
                            closeOnClickOutside: false,
                            dangerMode: true
                        }).then(confirm => {
                            if (confirm) {
                                shownotes();
                                statusUpdates();
                                alertclose();
                            }
                        });
                    }
                }
            });
        }
    });
}

function addjobstatus() {
    $("#add-job-status").click(function(event) {
        var job_status = $.trim($("#job_status").val());
        if (job_status == "") {
            warningalertwithfocus(
                "Please select the Job Status",
                $("#job_status")
            );
        }else {
            $.ajax({
                type: "post",
                url: base_url + "addjobstatus",
                data: $("#managejobstatus").serialize(),
                beforeSend: function() {
                    // waitingalert();
                },
                success: function(result) {

                    $("#job_status").val("");
                    showjobstatus();
                    statusUpdates();
                    alertclose();
                }
            });
        }
    });
}

function showjobstatus() {
    if ($("#managejobstatus").length != 0) {
        $.ajax({
            type: "post",
            url: base_url + "showjobstatus",
            data: $("#managejobstatus").serialize(),
            beforeSend: function() {
                // waitingalert();
            },
            success: function(result) {
                $("#view-job-status").html(result);
                alertclose();
            }
        });
    }
}

function deletejobstatus(status_id) {
    swal({
        title: "Warning",
        text: "Are you sure you want to delete this job status?",
        icon: "warning",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true
    }).then(confirm => {
        if (confirm) {
            $.ajax({
                type: "post",
                url: base_url + "deletejobstatus",
                data: {
                    rn_token_name: $("#managejobstatus")
                        .find('input[name="rn_token_name"]')
                        .val(),
                    quote_en: $("#managejobstatus")
                        .find('input[name="quote_en"]')
                        .val(),
                    status_id: status_id
                },
                beforeSend: function() {
                    // waitingalert();
                },
                success: function(result) {
                    if (result == "failed") {
                        erroralert("Something went wrong");
                    } else {
                        swal({
                            title: "Success",
                            text: "Successfully deleted the job status",
                            icon: "success",
                            button: "Ok",
                            closeOnEsc: false,
                            closeOnClickOutside: false,
                            dangerMode: true
                        }).then(confirm => {
                            if (confirm) {
                                showjobstatus();
                                statusUpdates();
                                alertclose();
                            }
                        });
                    }
                }
            });
        }
    });
}

function editjob() {
    $("#edit-job-customer").click(function () {
        $.ajax({
            type: "post",
            url: base_url + "editjob",
            data: $("#view_quote").serialize(),
            beforeSend: function () {
                waitingalert();
            },
            success: function (result) {
                $("#quotedetails .box-body").html(result);
                savequote();
                cancelquote();
                alertclose();
            }
        });
    });
}

function savequote() {
    $("#save-job-customer").click(function () {
        var client_full_name = $.trim($("#client_full_name").val());
        var client_phone_number = $.trim($("#client_phone_number").val());
        var client_post_code = $.trim($("#client_post_code").val());
        var client_address = $.trim($("#client_address").val());
        var client_email = $.trim($("#client_email").val());

        var alphabetic_regex = /(^[a-zA-Z ]*$)/;
        var alphanumeric_regex = /(^[a-zA-Z\d\-_\s]+$)/;
        var email_regex = /(^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$)/;

        if (client_full_name == "") {
            warningalertwithfocus(
                "Please enter the full name",
                $("#client_full_name")
            );
        } else if (
            client_full_name != "" &&
            !alphabetic_regex.test(client_full_name)
        ) {
            warningalertwithfocus(
                "Unwanted character used. Please enter the full name again.",
                $("#client_full_name")
            );
        } else if (client_phone_number == "") {
            warningalertwithfocus(
                "Please enter the phone number",
                $("#client_phone_number")
            );
        } else if (client_phone_number != "" && isNaN(client_phone_number)) {
            warningalertwithfocus(
                "Unwanted character used. Please enter the phone number again.",
                $("#client_phone_number")
            );
        } else if (client_post_code == "") {
            warningalertwithfocus(
                "Please enter the post code",
                $("#client_post_code")
            );
        } else if (
            client_post_code != "" &&
            !alphanumeric_regex.test(client_post_code)
        ) {
            warningalertwithfocus(
                "Unwanted character used. Please enter the post code again.",
                $("#client_post_code")
            );
        } else if (client_address == "") {
            warningalertwithfocus(
                "Please select/enter the address",
                $("#client_address")
            );
        } else if (client_email == "") {
            warningalertwithfocus("Please enter the email", $("#client_email"));
        } else if (client_email != "" && !email_regex.test(client_email)) {
            warningalertwithfocus(
                "Please enter a valid email.",
                $("#client_email")
            );
        } else {
            $.ajax({
                type: "post",
                url: base_url + "savejob",
                data: $("#view_quote").serialize(),
                beforeSend: function () {
                    waitingalert();
                },
                success: function (result) {
                    $("#quotedetails .box-body").html(result);
                    viewjobdetails();
                    alertclose();
                }
            });
        }
    });
}

function viewjobdetails() {
    $.ajax({
        type: "post",
        url: base_url + "viewjobdetails",
        data: $("#view_quote").serialize(),
        beforeSend: function () {
            waitingalert();
        },
        success: function (result) {
            $("#quotedetails .box-body").html(result);
            editjob();
            alertclose();
        }
    });
}

function statusUpdates() {
    if ($("#status_updates").length != 0) {
        $.ajax({
            type: "post",
            url: base_url + "statusupdates",
            data: $("#managenotes").serialize(),
            success: function(result) {
                $("#status_updates").html(result);
                alertclose();
            }
        });
    }
}