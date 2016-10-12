<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/shareStyle.css" rel="stylesheet" type="text/css">

</head>

<body id="contactForm">
    <?php include "header.php"?>
        <div class="container-fluid navMargin">
            <div class="row">
                <div class="contactForm col-sm-offset-1 col-sm-10">
                    <h1>Contact Us:</h1>
                    <?php  
                
//error messages
$missingName = '<p><strong>Please enter your name.</strong></p>';
$missingEmail = '<p><strong>Please enter your email address.</strong></p>';               
$invalidEmail = '<p><strong>Please enter a valid email address.</strong></p>';    
$missingMessage = '<p><strong>Please enter a message.</strong></p>';
    
//Get user input
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
                
                
//if user has submitted form
if ($_POST["submit"]) {
    if(!$name) {
        $errors .= $missingName;
    }else{
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    }
    
    if(!$email) {
        $errors .= $missingEmail;
    }else{
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= $invalidEmail;
        }
    }
    
    if (!$message) {
        $errors .=$missingMessage;
    }else{
        $message = filter_var($message, FILTER_SANITIZE_STRING);
    }
    
    //if there are any errors
    if ($errors) {
        $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
    }
        // no => send email. email sent? 
            // yes => print success message
            // no => print warning message
//print result message
echo $resultMessage;
}
                
?>
                        <form action="contactform.php" method="post">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" class="form-control" rows="5">
                                    <?php echo $message; ?>
                                </textarea>
                            </div>
                            <input value="Send Message" type="submit" name="submit" class="btn btn-lg btnColor pull-right">
                        </form>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!--            navigation class control-->
        <script>
            $(function () {
                $('li').removeClass('active');
                $('#navContact').addClass('active');
            });
        </script>
</body>

</html>