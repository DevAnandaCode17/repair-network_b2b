function waitingalert()
{
    swal({
        icon: base_url+"vendors/img/waiting.gif",
        text: 'Please wait',
        className: "waiting",
        button: false,
        closeOnEsc: false,
        closeOnClickOutside: false
    })
}

function warningalert(warningmessage)
{
    swal({
        title: "Warning",
        text: warningmessage,
        icon: "warning",
        button: "Ok",
        closeOnEsc: false,
        closeOnClickOutside: false
    })
}

function warningalertwithfocus(warningmessage, focusobj)
{
    swal({
        title: "Warning",
        text: warningmessage,
        icon: "warning",
        button: "Ok",
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true,
    })
    .then((confirm) => {
        if (confirm) {
            focusobj.focus();
        }
    });
}

function successalertwithredirect(successmessage, redirecttrue, redirectfalse)
{
    swal({
        title: "Success",
        text: successmessage,
        icon: "success",
        buttons: true,
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true,
    })
    .then((confirm) => 
    {
        if (confirm) {
            window.location.href = redirecttrue;
        }
        else
        {
            window.location.href = redirectfalse;
        }
    });
}

function successalertwithredirectone(successmessage, redirecttrue)
{
    swal({
        title: "Success",
        text: successmessage,
        icon: "success",
        button: "Ok",
        closeOnEsc: false,
        closeOnClickOutside: false,
        dangerMode: true,
    })
    .then((confirm) => 
    {
        if (confirm) {
            window.location.href = redirecttrue;
        }
    });
}

function successalert(successmessage)
{
    swal({
        title: "Success",
        text: successmessage,
        icon: "success",
        button: "Ok",
        closeOnEsc: false,
        closeOnClickOutside: false
    })
}

function alertclose()
{
    swal.close()
}

function erroralert(errormessage)
{
    swal({
        title: "Error",
        text: errormessage,
        icon: "error",
        button: "Ok",
        closeOnEsc: false,
        closeOnClickOutside: false
    })
}

function infoalert(infomessage)
{
    swal({
        text: infomessage,
        icon: "info",
        button: "Ok",
        closeOnEsc: false,
        closeOnClickOutside: false
    })
}

function sessionexpire()
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