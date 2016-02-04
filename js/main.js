$(document).ready(function () {
    var indexs = window.location.href.split("/");
    var index = indexs[indexs.length - 1] == "index.html" || indexs[indexs.length - 1] == "";
    var body = $(document.getElementsByTagName('body')),
        navbar = '<div class="navbar">' +
            '<ul> ' +
            '<li class="navbarli"">' +
            '<a href="' + (index ? "" : "../" ) + 'index.html">HOME PAGE</a>' +
            '</li> ' +
            '<li class="navbarli">' +
            '<a href="' + (index ? "" : "../" ) + 'subpages/about.html">ABOUT ME</a>' +
            '</li> ' +
            '<li class="navbarli">' +
            '<a href="' + (index ? "" : "../" ) + 'subpages/contact.html">CONTACT ME</a>' +
            '</li>' +
            '</ul>' +
            '</div>',
        footer = '<div id="footer" align="center">' +
            'Matthew Munger &#9731;' +
            '</div>',
        reset_float = '<div class="clear"></div>';
    // Insert navbar and footer
    body.html('<div id="wrapper">' + navbar + reset_float + body.html() + reset_float + footer + '</div>');
    // Form management
    $('#contactform').submit(function (event) {
        var nameval = $('#nameinput').val();
        var msgval = $('#msginput').val();
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

        if (submit) {
            window.location.href = "../subpages/FormSubmit.html?name=" + nameval + "&email=" + emailval + "&msg=" + msgval;
        }
        event.preventDefault();
    });
    function isValidEmail(email) {
        if (email.indexOf('@') === -1) {
            return false;
        }
        ending = email.split("@")[1];
        first = ending.split(".")[0];
        last = ending.split(".")[1];
        if (first === "") {
            return false;
        }
        return last !== "";
    }
});