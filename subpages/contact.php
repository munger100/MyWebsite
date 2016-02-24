<?php
$title = "Contact Me";
require "../menu.php";
?>
<div id="main">
    <div class="img">
        <img src="../images/contact.jpg">
    </div>
    <div class="content">
        <h1 class="title">Contact Me</h1>

        <form id="contactform" action="contact-process.php" method="post">
            <h3>Your Name</h3>

            <div class="contact">
                <input type="text" name="name" id="nameinput" placeholder="Your Name Here">
            </div>
            <div class="contact" id="namediv">
                <p class="error" id="nameerror">You must enter a name.</p>
            </div>
            <div class="clear"></div>
            <h3>Email</h3>

            <div class="contact">
                <input type="text" name="email" id="emailinput" placeholder="Your Email Here">
            </div>
            <div class="contact" id="emaildiv">
                <p class="error" id="emailerror">You must enter a valid email.</p>
            </div>

            <div class="clear"></div>
            <h3>Your Message</h3>

            <div class="contact">
                <textarea name="message" placeholder="Your Message Here" id="msginput"></textarea>
            </div>
            <div class="contact" id="msgdiv">
                <p class="error" id="msgerror">You must enter a message.</p>
            </div>
            <div class="clear"></div>
            <br/>
            <br/>
            <button id="submit" type="submit">Submit Form</button>
            <button id="autofill" type="button">Autofill</button>
        </form>
    </div>
</div>
<?php
require "../footer.php";
?>
