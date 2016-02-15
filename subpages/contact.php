<?php
$title = "Contact Me";
require "../root/menu.php";
?>
<div id="main">
    <div class="img">
        <img src="../images/contact.jpg">
    </div>
    <div class="content">
        <h1 class="title">Contact Me</h1>

        <form id="contactform">
            <h3 class="name">Your Name</h3>

            <div class="contact">
                <input type="text" id="nameinput" name="name" placeholder="Your Name Here">
            </div>
            <div class="contact" id="namediv">
                <p class="error" id="nameerror">You must enter a name.</p>
            </div>
            <div class="clear"></div>
            <h3 class="email">Email</h3>

            <div class="contact">
                <input type="text" id="emailinput" name="email" placeholder="Your Email Here">
            </div>
            <div class="contact" id="emaildiv">
                <p class="error" id="emailerror">You must enter a valid email.</p>
            </div>

            <div class="clear"></div>
            <h3 class="info">Your Message</h3>

            <div class="contact">
                <textarea id="msginput" placeholder="Your Message Here"></textarea>
            </div>
            <div class="contact" id="msgdiv">
                <p class="error" id="msgerror">You must enter a message.</p>
            </div>
            <div class="clear"></div>
            <br/>
            <br/>
            <button id="submitform" name="msg" type="submit">Submit Form</button>
        </form>
    </div>
</div>
<?php
require "../root/footer.php";
?>
