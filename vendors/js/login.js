// Login User
$(document).ready(function(){
    $("#user_pass").blur(function()
    {
        var encryptedpass = '';
        encryptedpass = $.md5($.trim($("#user_pass").val()));
        document.getElementById('strcrypt').value = encryptedpass;
    });
    $("#login_btn").click(function()
    {
        if($("#user_name").val() == "" || $("#user_pass").val() == "")
        {
            warningalert("Please fill required fields");
        }
        else
        {
            $.ajax({
                type: "POST",
                url: base_url + "login/isloginuser",
                data: $('#user_login').serialize(),
                success:function(data)
                {
                    if(data !='')
                    {
                        warningalert(data);
                        //window.location.href = base_url;
                    }
                    else
                    {
                        window.location.href = base_url+"jobdetails";
                    }
                }
            });
        }
    });
});