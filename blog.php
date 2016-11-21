<?php include 'modules/userControl.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elevate Blog</title>
    
    <?php include 'components/headLinks.php'; ?>

</head>

<body id ="blogPage" class="aboutPages">
    <?php include "components/header.php"; ?>
        <div class="container">
            <div id="contentContainer" class="col-sm-9">
                <div id="content">

                </div>
                <div id="shareBoxContainer">
                        <?php include 'components/shareBox.php'; ?>
                </div>
            </div>
            <div id="menu" class="col-sm-3 menu">
                <h3>Read More:</h3>
                <ul id="menuItems" class="pull-right">

                </ul>
            </div>
        </div>
        
        
        <?php include 'components/footer.php' ?>
        
        <?php include 'modules/navigationClassControl.php'; ?>
        <script type="text/javascript" src="js/blog.js"></script>

</body>

</html>