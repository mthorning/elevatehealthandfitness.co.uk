<?php include 'modules/userControl.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Form</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body id="contactUsPage" class="aboutPages">
    <?php include "components/header.php"?>
    <div class="container">
        <h1>CONTACT US</h1>
        <br />
        <h4>Whether you are interested in elevating your health and are keen to book a free, no obligation consultation, or if you would like some more information about our programs, or any other questions you may have, please use the contact form below and we will get back to you asap!</h4>
        <br />
        <h4>Alternatively, if you’d prefer to talk to us direct, please call on: <strong>07979087053</strong></h4>
        <br />
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
        echo $resultMessage;
    }else{
        //email details
                    $email_to = "ken@elevatehealthandfitness.co.uk";                    
                    $email_subject = "Customer Enquiry";
                    //email form details
                    $email_message = 
    "<html>
        <body>
            <img style='border: 1px solid black; width: 20%; height: auto;' src='http://elevatehealthandfitness.co.uk/img/png/navbarLogo.png'>
            <div style='padding: 5px;'>
                <h2 Style='color: #001EF9; text-shadow: 1px 1px 1px #000'>You have been contacted by ".ucwords($name).":</h2>
                <h3 Style='color: #001EF9; text-shadow: 1px 1px 1px #000'>Message:</h3>
                <p style='padding-left: 30px; font-style: italic; font-size: 1.2em'>" . $message . "</p>
            </div>
            <br />
            <hr />
            <p style='font-size: 1.1em'>Email: <span style='font-style: italic'><a href='mailto:" . $email . "'>" . $email . "</a></span></p>  
        </body>
    </html>";
                    
                    
                    $headers = "From: " .$email. "\r\n" .
                                "Reply-To: " .$email. "\r\n".
                                "Content-type: text/html" . "\r\n".
                                "CC: monitor@stack-design.co.uk";
                    mail($email_to, $email_subject, $email_message, $headers);  

                    echo "<script> window.location.replace('thankyou.php'); </script>";
    }

}
                
?>
                        <form action="" method="post">
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
                                <textarea name="message" id="message" class="form-control" rows="5"><?php echo $message; ?></textarea>
                            </div>
                            <input value="Send Message" type="submit" name="submit" class="btn btn-lg btnColor pull-right">
                        </form>
    </div>

    <?php include 'components/footer.php'; ?>
    <script src="js/twitter.js">
                </script>
    <?php include 'modules/navigationClassControl.php'; ?>
</body>

</html>