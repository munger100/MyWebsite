$(document).ready(function () {
    var indexs = window.location.href.split("/");
    var index = indexs[indexs.length - 1] == "index.html" || indexs[indexs.length - 1] == "";
    var body = $(document.getElementsByTagName('body')),
        reset_float = '<div class="clear"></div>';
    // Insert navbar and footer
    body.html(reset_float + body.html() + reset_float);
    // Form management

    /*
    //$(document).ready(function() {
    //
    //
    //    $("#main-form").on("submit", function(e) {
    //        $(".error").html(''); // clear error messages
    //        var errorFlag = false;
    //        var thisForm = $(this);
    //        var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();

            if (!name) {
                $("#errorName").html('Please enter your name');
                errorFlag = true;
            }

            if (!email) {
                $("#errorEmail").html('Please enter your email');
                errorFlag = true;
            } else if (!isEmail(email)) {
                $("#errorEmail").html('Please enter a <strong>valid</strong> email');
                errorFlag = true;
            }

            if (!message) {
                $("#errorMessage").html('Please enter a message');
                errorFlag = true;
            }

            if (!errorFlag) {
                $("#submitButton").val('Sending ...').attr('disabled', 'disabled');
                alert("Hello " + name);
                alert("I see your email is " + email);
                alert("and you wanted to say \"" + message + "\"");
                // thisForm.unbind('submit').submit(); // default post
                $.post(thisForm.attr("action"), { Action: "postContact", name: name, email: email, message: message }, function(response) {
                    alert(response);
                    $("#submitButton").val(response);
                }); // post to original target via ajax and receive response
            }

        });

    });
    */

    $("#autofill").click(function() {

        $('#nameinput').val("Firstname Lastname");
        $('#msginput').val("Test message.");
        $('#emailinput').val("test@testy.test");
    });
    $('#contactform').on("submit", function (event) {
        event.preventDefault();
        var nameval = $('#nameinput').val();
        var msgval = $('#msginput').val;
        var emailval = $('#emailinput').val();
        var nameerror = $('#nameerror');
        var msgerror = $('#msgerror');
        var emailerror = $('#emailerror');
        var submit = true;
        if (nameval === "") {
            nameerror.show();
            submit = false;
        } else {
            nameerror.hide();
        }

        if (msgval === "") {
            msgerror.show();
            submit = false;
        } else {
            msgerror.hide();
        }

        if (emailval === "") {
            emailerror.text("You must enter your email.");
            emailerror.show();
            submit = false;
        } else if (!isValidEmail(emailval)) {
            emailerror.text("You must enter a valid email.");
            emailerror.show();
            submit = false;
        } else {
            emailerror.hide();
        }

        var form = $(this);
        var formData =  form.serializeArray();
        if (submit) {
            console.log("Submitting");
            $.post("../subpages/contact-process.php",formData, function(response) {
                form.html(response + " ");
                console.log(formData)

            });
        }
    });
    function isValidEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
     }

});