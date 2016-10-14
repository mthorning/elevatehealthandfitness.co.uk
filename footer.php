<footer class="pageFooter container-fluid">
    <div class="row rowMargin">
        <div class="col-sm-6 col-lg-3">
            <p><b>&copy; Elevate Health &amp; Fitness</b></p>
        </div>
        <div class="col-sm-6 col-lg-3">
            <p>41 My Street, <br /> Truro, TR1 1AA</p>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="tel:xxxxxxxxxxx">Tel:01872 362736</a>
            <br />
            <a href="tel:xxxxxxxxxxx">Mob:0747264526</a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="mailto:ken@elevatehealthandfitness.co.uk">ken@elevatehealthandfitness.co.uk</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-7 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2">
            <div id="shareBoxContainer">
                <?php include "shareBox.php"; ?>
            </div>
        </div>
        <div id="designCredit" class="col-xs-11 col-sm-5 col-sm-offset-1 credit">
            <p>Created by <a href="http://stack-design.co.uk">Stack-Design</a></p>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>

            <!--            navigation class control-->
            <script>
                $(function () {
                    $('li').removeClass('active');
                    $('#navIndex').addClass('active');
                    $('#navToggleButton').click(function () {
                        $('#dropdownNavMenu').toggleClass('pull-right');
                    });
                });
            </script>