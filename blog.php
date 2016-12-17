<?php include 'modules/userControl.php'; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="canonical" href="http://elevatehealthandfitness.co.ukblog.php">
        
<!--        facebook props-->
        <meta property="og:image" content="img/jpg/Scenery-Logo.jpg">
        <meta property="og:title" content="Elevate Health & Fitness Blog">
        
        <title>Elevate Blog</title>

        <?php include 'components/headLinks.php'; ?>

    </head>

    <body id="blogPage" class="aboutPages">
        <?php include "components/header.php"; ?>
            <div class="container">
                <div id="contentContainer" class="col-sm-9">
                    <div id="content">

                    </div>
                    <?php include 'components/share.php'; ?>
                </div>
                <div id="menu" class="col-sm-3 menu">
                    <h3>Read More:</h3>
                    <ul id="menuItems" class="pull-right">

                    </ul>
                </div>
            </div>


            <?php include 'components/footer.php' ?>
                <script src="js/twitter.js">
                </script>
                <?php include 'modules/navigationClassControl.php'; ?>
                    <script type="text/javascript" src="js/blog.js"></script>
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
             <!--    Pinterest-->
        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>

    </body>

    </html>