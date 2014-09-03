<div class="col-lg-8"> 
    <div class="panel panel-default">  
        <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Admin Dashboard Window
        </div>      
        <div class="panel-body">
            
            <div id="fb-root"></div>
            <script>
               (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
            <strong>Member Posts</strong><br/>
            <!--<div align="right" style="font-weight: bolder"><a href="logout.php"><font color="blue">Logout</font></a></div>-->
            <div id="regDiv">    
                <div class="fb-comments" data-href="http://www.tourethiopiadiasporanet.com/memberhome2.php" data-num-posts="8" data-width="650"></div>
            </div> 
            
            <div id="morris-area-chart" ng-view>
                
            </div>
            <br/>
            <div id="processStatusDiv"></div>
        </div>                     
    </div>          
</div> 