<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
    <!--default for white or inverse for black-->
    <div id="navWrapper">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><a href="index.php"><img src="img/navbarLogo.png" id="navbarLogo"></a></a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <!--bootstrap has some built-in functionality with data-target referring to the id of the containing div and data-toggle defining the function of the button as in JQuery-->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
        </div>
        <div id="navbarCollapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li id="navHome"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li id="navAbout"><a href="testPage.php">About</a></li>
                <li id="navServices"><a href="#">Services</a></li>
                <li id="navTestimonials"><a href="#">Testimonials</a></li>
                <li id="navFAQ"><a href="#">FAQ</a></li>
                <li id="navBlog"><a href="#">Blog<span class="caret"></span></a></li>
                <li id="navContact"><a href="contactform.php">Contact Us</a></li>
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