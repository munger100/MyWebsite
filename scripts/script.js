$(document).ready(function () {
    var body = $(document.getElementsByTagName('body')),
        navbar = '<div class="navbar">' +
            '<ul> ' +
            '<li class="navbarli"">' +
            '<a href="/MyWebsite/index.html">HOME PAGE</a>' +
            '</li> ' +
            '<li class="navbarli">' +
            '<a href="/MyWebsite/subpages/about.html">ABOUT ME</a>' +
            '</li> ' +
            '<li class="navbarli" onclick="window.location.href=\'/MyWebsite/subpages/contact.html\'">' +
            '<a href="/MyWebsite/subpages/contact.html">CONTACT ME</a>' +
            '</li>' +
            '</ul>' +
            '</div>',
        footer = '<div class="footer" align="center">' +
            'Matthew Munger &#9731;' +
            '</div>',
        reset_float = '<div style="clear: both"></div>';
    // Insert navbar and footer
    body.html(navbar + reset_float + body.html() + reset_float + footer);

});
