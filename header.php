<?php include "inc.title.php"; ?>
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <!--default for white or inverse for black-->
    <div id="navWrapper">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><a href="index.php"><img src="img/png/navbarLogo.png" id="navbarLogo"></a></a>
            <button id="navToggleButton" type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <!--bootstrap has some built-in functionality with data-target referring to the id of the containing div and data-toggle defining the function of the button as in JQuery-->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
        </div>
        <div id="navbarCollapse" class="navbar-collapse collapse">
            <ul id="dropdownNavMenu" class="nav navbar-nav pull-right">
                <li id="home"><a href="index.php"><span style="font-size: 0.85em;" class="glyphicon glyphicon-home"></span> Home</a></li>
                <li id="about" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="about_aboutMe.php">About me</a></li>
                        <li><a href="#">About Elevate</a></li>
                        <li><a href="#">CHEK philosophy</a></li>
                        <li><a href="#">Eat Smart</a></li>
                        <li><a href="#">Train Smart</a></li>
                        <li><a href="#">Live Smart</a></li>
                    </ul>
                </li>
                <li id="services"><a href="#">Services</a></li>
                <li id="testimonials"><a href="testimonials.php">Testimonials</a></li>
                <li id="FAQ"><a href="#">FAQ</a></li>
                <li id="blog"><a href="#">Blog<span class="caret"></span></a></li>
                <li id="contactUs"><a href="contactUs.php">Contact Us</a></li>
            </ul>
<!--
            <form class="navbar-form navbar-left" role="search">
                <div class="input-group">
                    <span class="input-group-btn"><button type="submit" class="btn btn-info">Go</button></span>
                    <label for="search" class="sr-only">Search Box</label>
                    <input type="text" id="search" class="form-control" placeholder="search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
-->
<!--
            <form class="navbar-form navbar-right">
                <input type="submit" class="btn btn-success" value="Login">
            </form>
-->
        </div>
    </div>
</nav>