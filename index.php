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
               
</head>
<body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script>
        
	<div id="content-wrapper"> 
		<!-- Container begin -->
		<div id="container"> 
			<!-- Header begin-->
			<?php
                            include_once 'core/indexinit.php';
                            include_once 'page_sections/index_header.php';
                        ?>
			<!-- Header end --> 
			<!-- slide start -->
			<?php
                            include_once 'page_sections/index_slider.php';
                        ?>
			<!-- slide end --> 
			<!-- Main begin-->
			<div id="main" class="round_8 clearfix mobile-collapse">
                                <!--home content start-->
                                <?php
                                    include_once 'page_sections/index_home_content.php';
                                ?>				
                                <!--home content end-->
                                
                                <!--home content side bar start-->
				<?php
                                    include_once 'page_sections/index_home_side_bar.php';
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
            
            $('#btnlogin').click(function(){
                //now get the values from the form...
                var email = $('#txtemail').val();
                var username = $('#txtusername').val();
                var password = $('#txtpassword').val();
                
                if(email != "" && username != "" && password != ""){
                    var dataString = "email="+email+"&username="+username+
                            "&password="+password;
                    $.ajax({
                    url: 'page_sections/validate_member.php',		
                    data: dataString,
                    type:'POST',
                    success:function(data){                                                
                        //clearFormInputFields();
                        //upon success redirect page to member_dashboard.php...
                        //window.location.href = "member_dash_board.php";
                        
                        if (!data.success) {
                            $scope.message = "Invalid user credential! Try again.";
                        } else {
                            // if successful, bind success message to message
                            //redirect the page to adminhome.php
                            window.location.href = "member_dash_board.php";
                        }
                        //alert(data);
                    },
                    error:function(error){
                        alert(error);
                    }
                });
                }else{
                    //code to print validation message...
                }
                
            });
            
            $('#btnreset').click(function(){
                $('#txtemail').val('');
                $('#txtusername').val('');
                $('#txtpassword').val('');
            });
            
            //remove this class which is dynamically added to the page...
            $('.loading').empty();
            
        });//end document.ready function
    </script> 
</html>