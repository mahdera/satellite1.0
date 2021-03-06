<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta info begin-->
	<title>Satellite Official Web Site</title>
	<meta charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<!--<meta name="viewport" content="width=device-width,initial-scale=1.0"/>-->
	<!-- Meta info end-->
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="shortcut icon"  href="img/favicon.ico" />
        <!-- Responsive CSS section -->
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen and (max-width: 900px)"/>
        <script type="text/javascript" src="admin_js/jquery-1.11.0.js"></script>
</head>
<body>
        <?php
            include_once 'page_sections/social_media_js_imports.php';
        ?>
    
	<div id="content-wrapper"> 
		<!-- Container begin -->
		<div id="container"> 
			<!-- Header begin-->
			<?php
                            include_once 'core/indexinit.php';
                            include_once 'page_sections/index_header.php';
                         ?>
			<!-- Header end --> 
			
			<!-- Main begin-->
			<div id="main" class="round_8 clearfix mobile-collapse">
                                <!--home content start-->
                                <?php
                                    include_once 'page_sections/signup_content.php';
                                ?>				
                                <!--home content end-->
                                
                                <!--home content side bar start-->
				<?php
                                    include_once 'page_sections/index_signup_home_side_bar.php';
                                ?>
                                <!--end home content side bar-->
			</div>
			<!-- Main end --> 
			<!-- Footer begin -->
			<?php
                            include_once 'page_sections/index_footer.php';
                        ?>
			<!-- Footer end --> 
			
		</div>
		<!-- Container end --> 
	</div>
	<!--put the javascript import statements in here...-->
	<?php
            include_once 'page_sections/javascript_import_script.php';
        ?>
        <!--end import javascript files-->
</body>
	<script type="text/javascript">
            $(document).ready(function(){					    
                $('#slider').nivoSlider({
                    effect: 'fade' 		
                });		    

                // Quick Menu
                $('#quickmenu').tinycarousel({ 
                    axis: 'y',
                    display: 3, 
                    duration: 500
                });
            });//end document.ready function
	</script> 
</html>