<?php
$title = "Home";
require "menu.php";
?>
<div id="main">
    <div class="banner">
        <img class="banner" src="./images/banner.jpg">
    </div>

    <div class="content">
        <h1 class="title">My Name is Matthew Munger</h1>

        <div class="block">
            <h3 class="subtitle">My Family</h3>

            <p>I am the oldest of four children. My family is half French, from Saguenay, half
                English, from Candiac. </p>
            <button type="button" onclick="window.location.href='subpages/about.php'">Read more</button>
        </div>
        <div class="block">
            <h3 class="subtitle">My School</h3>

            <p>I attend Heritage Regional High School and am in the iCan computer program. With
                high grades in math and science, I prefer programming over 3d modeling or Photoshop.</p>
            <button type="button" onclick="window.location.href='subpages/about.php'">Read more</button>
        </div>
        <div class="block">
            <h3 class="subtitle">My Job</h3>

            <p>I work at a breakfast restaurant in the DIX30 on weekends.</p>
            <button type="button" onclick="window.location.href='subpages/about.php'">Read more</button>
        </div>
    </div>

</div>
<?php
require "footer.php";
?>
