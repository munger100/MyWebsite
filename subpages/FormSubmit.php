<?php
$title = "Thank You!";
require "../root/menu.php";
?>
<div id="main" style="margin: 0">
    <div class="img">
        <img src="../images/contact.jpg">
    </div>
    <div class="content">
        <h1 class="title">Thank you for submitting that message!</h1>

        <p class="block" style="margin-left: 50px">
            Thank you <span id="name"></span>, your message was completely useless because the information you just
            entered was completely disregarded. But since you still entered a message, we thank you for pressing this
            button
            by showing you what you sent us! Lucky you!
        </p>

        <p id="email">From: </p>

        <p id="msg">Message: </p>

    </div>
    <script>
        function getParams() {
            var params = {},
                    pairs = document.URL.split('?').pop().split('&');
            for (var i = 0, p; i < pairs.length; i++) {
                p = pairs[i].split('=');
                params[p[0]] = p[1];
            }
            return params;
        }
        var params = getParams();
        console.log("Params" + params);
        var newname = "";
        var names = decodeURI(params['name']).split(" ");
        names.forEach(function(name){
            var nameNew = name.split("");
            nameNew[0] = nameNew[0].toUpperCase();
            newname += nameNew.join("") + " ";
        });
        newname = newname.trim();


        $('#name').text(newname);
        $('#msg').html("<b>Message:</b> " + decodeURIComponent(params['msg']));
        $('#email').html("<b>From:</b> " + decodeURIComponent(params['email']));


    </script>
</div>
<?php
require "../root/footer.php";
?>
