<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Elevate Health &amp; Fitness</title>

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

<body id="indexPage">
    <?php include 'navigation.php'; ?>
        <div id="introSection" class="container-fluid navMargin">
            <div class="whiteContainer">
                <div class="container">
                    <div class="row">
                        <!--                        Main Section-->
                        <div class="col-xs-9">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <img id="tagline" src="img/tagline.png">
                                </div>
                            </div>
                            <div class="row rowMargin">
                                <div class="col-xs-6">
                                    <div class="textBox">
                                        <h2>EAT SMART</h2>
                                        <p>Lorem ipsum dolor sit amet, vel idque voluptatibus et, audiam lobortis iudicabit ne nam. No inani option complectitur ius, ius etiam discere tincidunt at. Te vix congue nonumes. Sed te cibo vocibus. His cu odio minimum, ad movet habemus nominavi ius. An mel reque intellegat, no elit fabulas molestiae eos. Mel in nostrud adolescens, per ad denique blandit.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="imgwrapper">
                                        <img src="img/food.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="row rowMargin">
                                <div class="col-xs-6">
                                    <div class="imgWrapper">
                                        <img src="img/cycling.jpeg">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="textBox">
                                        <h2>TRAIN SMART</h2>
                                        <p>Lorem ipsum dolor sit amet, vel idque voluptatibus et, audiam lobortis iudicabit ne nam. No inani option complectitur ius, ius etiam discere tincidunt at. Te vix congue nonumes. Sed te cibo vocibus. His cu odio minimum, ad movet habemus nominavi ius. An mel reque intellegat, no elit fabulas molestiae eos. Mel in nostrud adolescens, per ad denique blandit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row rowMargin">
                                <div class="col-xs-6">
                                    <div class="textBox">
                                        <h2>LIVE SMART</h2>
                                        <p>Lorem ipsum dolor sit amet, vel idque voluptatibus et, audiam lobortis iudicabit ne nam. No inani option complectitur ius, ius etiam discere tincidunt at. Te vix congue nonumes. Sed te cibo vocibus. His cu odio minimum, ad movet habemus nominavi ius. An mel reque intellegat, no elit fabulas molestiae eos. Mel in nostrud adolescens, per ad denique blandit.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="imgWrapper">
                                        <img src="img/exercising%20woman.jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                    Sidebar-->
                        <div class="col-xs-3 well well-lg">
                            <h4>A sidebar is sometimes useful, depends what you want:</h4>
                            <div class="sidebarSection">
                                <p>This could be some sort of menu structure or list of blog entries.</p>
                                <ul>
                                    <li><a href='#'>List item 1</a></li>
                                    <li><a href='#'>List item 2</a></li>
                                    <li><a href='#'>List item 3</a></li>
                                    <li><a href='#'>List item 4</a></li>
                                    <li><a href='#'>List item 5</a></li>
                                    <li><a href='#'>List item 6</a></li>
                                </ul>
                            </div>
                            <div class="sidebarSection">
                                <p>You could put extra links in to important places:</p>
                                <a target="_blank" href="http://chekinstitute.com/">CHEK Institute</a>
                            </div>
                            <div class="sidebarSection">
                                <p>or calls to action:</p>
                                <a class="btn btn-lg btnColor" href="contactform.php">Get in touch!</a>
                            </div>
                            <div class="sidebarSection">
                                <p>or Share buttons:</p>
                                <?php include "shareBox.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <img src="img/Elevate%20Logo.png">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <img src="img/Elevate_Timelinecover.png">
                </div>
            </div>
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
                    $('#navHome').addClass('active');
                });
            </script>

            <script>
                $(function () {
                    $('#indexPage').addClass('fixedScenery');
                });
            </script>
</body>

</html>