<?php
	//require_once 'classes/CenterBoxContent.php';
	require_once 'core/indexinit.php';
	//I need to get the top first record sorted by post_date from center_box_content...
	$centerBoxContent = new CenterBoxContent();
	$topCenterBoxContentRecord = $centerBoxContent->getTopCenterBoxContent(1);
	//var_dump ($topCenterBoxContentRecord);
?>
<div id="home-content" class="left mobile-collapse">
    <h2 class="replace"><?php echo $topCenterBoxContentRecord->title ?></h2>
    <div class="intro mobile-collapse">
        <!--<div class="thumbnail_100_right mobile-collapse" style="background: url(&quot;img/stock/100x100_thumbnail_1.jpg&quot;) repeat;"></div>-->
        <p class="intro mobile-collapse">
            <!--Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Vestibulum tortor quam, feugiat vitae, ultricies eget. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.-->
            <?php
                echo $topCenterBoxContentRecord->content;
            ?>
        </p>
    </div>
    <hr />
    <?php
        $lowerBoxContent = new LowerBoxContent();
        $topLowerFirstColumnBoxRecord = $lowerBoxContent->getTopLowerBoxContentOfColumn(1, "First Column");
        $topLowerSecondColumnBoxRecord = $lowerBoxContent->getTopLowerBoxContentOfColumn(1, "Second Column");
        $topLowerThridColumnBoxRecord = $lowerBoxContent->getTopLowerBoxContentOfColumn(1, "Third Column");
    ?>
    <div class="col_201 alpha mobile-collapse" style="text-align: left">
        <h3 class="replace"><?php echo $topLowerFirstColumnBoxRecord->title;?></h3>
        <div class="thumbnail_60_left" style="background: url(&quot;img/stock/60x60_thumbnail_5.jpg&quot;) repeat;"></div>
        <p class="landing_col1">            
            <?php echo implode(' ', array_slice(explode(' ', $topLowerFirstColumnBoxRecord->content), 0, 350));?>
            ...
        </p>
        <a href="#" class="fancy small">Learn More <img class="arrow" src="img/nav-right-arrow.png"/></a><br/>
    </div>
    <div class="col_201 mobile-collapse" style="text-align: left">
        <h3 class="replace"><?php echo $topLowerSecondColumnBoxRecord->title;?></h3>
        <div class="thumbnail_60_left" style="background: url(&quot;img/stock/60x60_thumbnail_4.jpg&quot;) repeat;"></div>
        <p class="landing_col mobile-collapse">
            <?php echo implode(' ', array_slice(explode(' ', $topLowerSecondColumnBoxRecord->content), 0, 350));?>
        </p>
        <a href="#" class="fancy small">Learn More <img class="arrow" src="img/nav-right-arrow.png"/></a><br/>
    </div>
    <div class="col_201 omega mobile-collapse" style="text-align: left">
        <h3 class="replace"><?php echo $topLowerThridColumnBoxRecord->title;?></h3>
        <div class="thumbnail_60_left" style="background: url(&quot;img/stock/60x60_thumbnail_6.jpg&quot;) repeat;"></div>
        <p class="landing_col">
            <?php echo implode(' ', array_slice(explode(' ', $topLowerThridColumnBoxRecord->content), 0, 350));?>
        </p>
        <a href="#" class="fancy small">Learn More <img class="arrow" src="img/nav-right-arrow.png"/></a><br/>
    </div>
</div>