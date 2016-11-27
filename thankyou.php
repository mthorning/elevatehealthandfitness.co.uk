<?php include 'modules/userControl.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    
    <?php include 'components/headLinks.php'; ?>

</head>

<body class="aboutPages">
    <?php include "components/header.php"; ?>
        <div style="display: flex; align-items: center; justify-content: center; height: 80vh;" class="container-fluid">
            <div class="h4 alert alert-info" style="background: #fff;">
                <strong>Message Sent! </strong>Thank you for your enquiry, you will hear back from us soon.
                <br />
                <a class="h1 text-center alert-info" style="display: block; background: #fff;" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            </div>
        </div>
        
        <?php include 'components/footer.php' ?>
        <script src="js/twitter.js">
                </script>
        <?php include 'modules/navigationClassControl.php'; ?>

</body>

</html>