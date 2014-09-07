<?php
    require_once '../core/init.php';
    //check if the user has successfully logged in...otherwise redirect him/her 
    //back to the index page.
    if(! isset($_SESSION['user'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Meta info begin-->
<title>Peekaboo - Themeforest Site Template by Population2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robots" content="index, follow" />
<!-- Meta info end-->
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/default.css" />
<link rel="shortcut icon"  href="../img/favicon.ico" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/Museo.font.js"></script>
<script type="text/javascript" src="../js/Museo_Sans.font.js"></script>
<script type="text/javascript" src="../js/supersized.3.1.3.core.min.js"></script>
<script type="text/javascript" src="../js/superfish-compile.js"></script>
<script type="text/javascript" src="../js/jquery.colorbox.js"></script>
<script type="text/javascript" src="../js/jquery.tweet.js"></script>
<script type="text/javascript" src="../js/p2.js"></script>
</head>
<body>
<div id="content-wrapper"> 
    
    <!-- Container begin -->
    <div id="container"> 
        <!-- Header begin-->
        <?php
            require_once 'member_header.php';
        ?>
        
        <!-- Header end --> 
        
        <!-- Main begin-->
        <div id="main" class="round_8 clearfix">
            <div id="content" class="left">
                <a class="landing_img" href="#"><img src="../img/stock/640x200_landing.jpg" alt="placeholder"/></a>
                <div class="intro">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. </p>
                </div>
                <div class="col_201 alpha">
                    <h3 class="replace">Our Teachers</h3>
                    <div class="thumbnail_60_left" style="background: url(&quot;../img/stock/60x60_thumbnail_1.jpg&quot;) repeat;"></div>
                    <p class="landing_col">Nunc quis arcu. Donec gangsta placerizzle maurizzle et netus et fames ac turpis egestas lectus.</p>
                    <a href="#" class="fancy small">Learn More <img class="arrow" src="img/nav-right-arrow.png"/></a><br/>
                </div>
                <div class="col_201">
                    <h3 class="replace">Food &amp; Nutrition</h3>
                    <div class="thumbnail_60_left" style="background: url(&quot;../img/stock/60x60_thumbnail_2.jpg&quot;) repeat;"></div>
                    <p class="landing_col">Nunc quis arcu. Gangsta et netus et malesuada fames ac turpis egestas placerizzle maurizzle stuff.</p>
                    <a href="#" class="fancy small">Learn More <img class="arrow" src="img/nav-right-arrow.png"/></a><br/>
                </div>
                <div class="col_201 omega">
                    <h3 class="replace">Curriculum</h3>
                    <div class="thumbnail_60_left" style="background: url(&quot;../img/stock/60x60_thumbnail_3.jpg&quot;) repeat;"></div>
                    <p class="landing_col">Nunc quis arcu. Donec et netus et fames ac turpis egestas ante. Maurizzle stuff lectus.</p>
                    <a href="#" class="fancy small">Learn More <img class="arrow" src="img/nav-right-arrow.png"/></a><br/>
                </div>
            </div>
            <?php
                require_once 'member_side_bar.php';
            ?>
            <!--side bar ends here -->
        </div>
        <!-- Main end --> 
        <!-- Footer begin -->
        <?php
            require_once 'member_footer.php';
        ?>
        
        <!-- Footer end --> 
    </div>
    <!-- Container end --> 
</div>

</body>
</html>
