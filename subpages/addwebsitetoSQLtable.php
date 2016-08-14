<?php

require "./contact-database.php";

$index = '<div class="banner">
        <img class="banner" src="./images/banner.jpg">
    </div>

    <div class="content">
        <h1 class="title">My Name is Matthew Munger</h1>

        <div class="block">
            <h3 class="subtitle">My Family</h3>

            <p>I am the oldest of four children. My family is half French, from Saguenay, half
                English, from Candiac. </p>
            <button type="button" class="about-button">Read more</button>
        </div>
        <div class="block">
            <h3 class="subtitle">My School</h3>

            <p>I attend Heritage Regional High School and am in the iCan computer program. With
                high grades in math and science, I prefer programming over 3d modeling or Photoshop.</p>
            <button type="button" class="about-button">Read more</button>
        </div>
        <div class="block">
            <h3 class="subtitle">My Job</h3>

            <p>I work at a breakfast restaurant in the DIX30 on weekends.</p>
            <button type="button" class="about-button">Read more</button>
        </div>
    </div>';
$about = '<div class="img">
        <img src="../images/about.jpg">
    </div>
    <div class="content">
        <h1 class="title">About Me</h1>

        <p class="block" id="aboutblock">
            I am the oldest of four children. My family is half French, from Saguenay, half English, from Candiac.
            I attend Heritage Regional High School and am in the iCan computer program. With
            high grades in math and science, I prefer programming over 3d modeling or Photoshop. I work in a
            breakfast restaurant at the DIX30 on weekends.

        </p>
    </div>';
$contact = '<div class="img">
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
        <div id="form-error" class="hide">
            You have already entered information using that email.<br/><br/>
            Please try again using another email.<br/><br/><br/>
            <input class="retry" type="button" value="Retry">

        </div>
        <div id="form-success" class="hide">
            Thank you! Your information was entered successfully!
        </div>
    </div>';


if ($clear = mysqli_query($conn, "DELETE FROM `ContentTable`")) {
    echo 'Deleted all table data';
} else {
    echo 'lol ur gay   ' . mysqli_error($conn);
}

$query = "INSERT INTO `ContentTable` (`index-main`, `about-main`, `contact-main`) VALUES ('%s', '%s', '%s')";
$query = sprintf($query, $index, $about, $contact);
if ($result = mysqli_query($conn, $query)) {
    echo 'Inserted record successfully';
} else {
    echo 'suck my nuts fag   ' . mysqli_error($conn);
}

mysqli_close($conn);

?>