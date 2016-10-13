<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About Me</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/shareStyle.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="aboutPages">
    <?php include "header.php"; ?>
        <div class="container">
            <div class="profilePic">
                <img src="img/jpg/KenProfile.jpg" alt="Ken Profile Picture">
            </div>
            <h2>ABOUT ME:</h2>
            <br />
            <h2>KEN WALKER</h2>
            <br />
            <h2>Qualifications:</h2>
            <ul>
                <li>BSc (Hons) Sports Performance &amp; Coaching (1st Class)</li>
                <li>C.H.E.K Exercise Coach</li>
                <li>C.H.E.K Holistic Lifestyle Coach Level 1</li>
                <li>FdSc Personal Trainer</li>
            </ul>
            <br />
            <h2>Bio:</h2>
            <p>With my own lifelong passion for health, fitness, sport and leading a healthy active lifestyle, as well as a strong work ethic, working as a postman in Truro for over 26 years, I began my career in the fitness industry in 2009 with a view to helping others achieve their own health and fitness goals.</p>
            <p>My journey began by successfully completing the intensive 2 year FdSc Personal Trainer qualification through Truro College, covering aspects such as exercise physiology, nutrition, anatomy, injuries, rehabilitation and exercise psychology. I then trained as a C.H.E.K Institute level 1 Holistic Lifestyle Coach to further enhance my skills and knowledge as a personal trainer. This knowledge was then applied through work as a personal trainer in Truro, helping clients to achieve their health and fitness goals.</p>
            <p>Understanding the importance of continual professional development in the area of health and fitness and keeping up with the latest research, I further enhanced my education and knowledge in the field by successfully completing the BSc Sports Performance and Coaching degree at Truro College, graduating with 1st class honours in 2014.</p>
            <div class="profilePic">
                <img src="img/jpg/KenRunning.jpg" alt="Ken Finishing a Race">
            </div>
            <p> Having completed the C.H.E.K Holistic Lifestyle Coach course and being very impressed by the C.H.E.K philosophy, I then decided to complete the C.H.E.K Exercise Coach course in September 2016. This provided me the skills to carry out complex assessments that are vital when designing bespoke training programs that meet the clients’ needs.
            </p>
            <p>My own personal passions includes a love of running, with a long background of competing in running and triathlon events, including marathons and Olympic distance triathlons, being an active member of Newquay Road Runners. Having returned from serious injury in 2008, when I was told I may not be able to run again, I went on to improve on my previous fitness levels, winning Truro Half Marathon in 2014 and running London Marathon in 2016 in a time of 2hrs 42mins (a 16min pb!). With two young children, I also fully understand the demands of a busy family life and the challenges of balancing this with work and training. With my desire to help others achieve their own personal health and fitness goals, my own personal experience, in conjunction with the knowledge gained from continual learning, I am in a prime position to offer individuals the help required to achieve their own health and fitness goals, providing holistic programmes that are time efficient, flexible and specific to each individuals unique circumstances.
            </p>
            <br />
            <h2>Other Courses:</h2>
            <ul>
                <li>Scientific Core Conditioning (C.H.E.K Institute)</li>
                <li>Scientific Back Training (C.H.E.K Institute)</li>
                <li>Program Design (C.H.E.K Institute)</li>
                <li>OCR Level 2 Certificate in Fitness Instructing (Gym based exercise &amp; Circuits)</li>
                <li>Leader in Running Fitness (United Kingdom Athletics)</li>
                <li>1st4Sport Level 1 Triathlon Coach (British Triathlon)</li>
            </ul>
            <br />
            <h2>Professional Bodies:</h2>
            <ul>
                <li>Register of Exercise Professional (REPs) Personal Trainer Level 3</li>
                <li>C.H.E.K Institute</li>
                <li>Ken is first-aid qualified and holds Public Liability Insurance to £5m</li>
            </ul>
        </div>
        <?php include "footer.php" ?>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>

            <!--            navigation class control-->
            <script>
                $(function () {
                    $('li').removeClass('active');
                    $('#navAbout').addClass('active');
                });
            </script>


</body>

</html>