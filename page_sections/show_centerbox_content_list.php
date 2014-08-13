<?php
	require_once '../core/init.php';
	$userId = Session::get(Config::get('session/session_name'));
	//echo $userId;
	//now get the data from the database...
	$data = array();

	$centerBoxContent = new CenterBoxContent();	
	$contentList = $centerBoxContent->getAllCenterBoxContents();

	//var_dump($contentList);

	if(!empty($contentList)){
		if($contentList->count()){	
			$boxContentResultSet = $contentList->getResults();		
		}
	}else{
		echo 'Center box content is empty';
	}

	//var_dump($boxContentResultSet);
?>
<h4>Center Box Contents</h4>
<!-- /.panel-heading -->
<div class="panel-body">
	<div class="table-responsive" >		
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th>Ser.No</th>					
					<th>Title</th>
					<th>Post Date</th>					
					<th>Content</th>
					<th>Edit</th>
					<th>Delete</th>					
				</tr>
			</thead>
			<tbody>	
				<?php
					$ctr = 1;
					foreach($boxContentResultSet as $boxContent){						
						$centerBoxContentId = $boxContent->center_box_content_id;
						?>
							<tr class="gradeA">
								<td><?php echo $ctr++;?></td>
								<td><?php echo $boxContent->title;?></td>
								<td><?php echo $boxContent->post_date;?></td>
								
								<td>
									<a ng-href="">
										<?php
											echo '<div style="display:inline-block; overflow:hidden; width:250px; height:45px;">'.strip_tags($boxContent->content).'</div>';
										?>
									</a>
								</td>
								<td class="center">
									<a href="#/view/setting/centerbox/content/edit/<?php echo $centerBoxContentId;?>">E</a>
								</td>
								<td class="center">
									<a href="#/view/setting/centerbox/content/view/<?php echo $centerBoxContentId;?>">D</a>
								</td>
							</tr>				
						<?php
					}//end foreach loop
				?>				
			</tbody>
		</table>
		<hr/>
		<div id="centerBoxContentDetailDiv"></div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
       $('#dataTables-example').dataTable();
    });
</script>
