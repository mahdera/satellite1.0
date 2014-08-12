<?php    
    class CenterBoxContent {
        private $centerBoxContentId;
        private $title;
        private $content;
        private $postDate;
        private $modifiedBy;
        private $modificationDate;
        
        public function __construct(){
            
        }
        
        public function setCenterBoxContentId($centerBoxContentId){
        	$this->centerBoxContentId = $centerBoxContentId;
        }
        
        public function getCenterBoxContentId(){
        	return $this->centerBoxContentId;
        }
        
        public function setTitle($title){
 	      	$this->title =  $title;
        }
        
        public function getTitle(){
        	return $this->title;
        }
        
        public function setContent($content){
        	$this->content = $content;
        }
        
        public function getContent(){
        	return $this->content;
        }
        
        public function setPostDate($postDate){
        	$this->postDate = $postDate;
        }
        
        public function getPostDate(){
        	return $this->postDate;
        }
       
        public function setModifiedBy($modifiedBy){
        	$this->modifiedBy = $modifiedBy;
        }
        
        public function getModifiedBy(){
        	return $this->modifiedBy;
        }
        
        public function setModificationDate($modificationDate){
        	$this->modificationDate = $modificationDate;
        }
        
        public function getModificationDate(){
        	return $this->modificationDate;
        }
        
        public function save($centerBoxContent){
        	$centerBoxContentDao = new CenterBoxContentDAO();
        	$centerBoxContentDao->save($centerBoxContent);
        }
        
        public function update($centerBoxContent){
        	$centerBoxContentDao = new CenterBoxContentDAO();
        	//now build the array represting the php object...
        	$fields = array(
        			'title' 			=> $centerBoxContent->getTitle(),
        			'content'  			=> $centerBoxContent->getContent(),
        			'post_date' 		=> $centerBoxContent->getPostDate(),
        			'modified_by' 		=> $centerBoxContent->getModifiedBy(),
        			'modification_date' => $centerBoxContent->getModificationDate()
        	);
        	$centerBoxContentDao->update($centerBoxContent->getCenterBoxContentId() , $fields);
        }
        
        public function delete($centerBoxContent){
        	$centerBoxContentDao = new CenterBoxContentDAO();
        	$centerBoxContentDao->delete($centerBoxContent);        	
        }
        
        public function getTopCenterBoxContent($howMany){
	        	$tableName = "tbl_center_box_content";
	        	$orderColumn = "post_date";
	        	$sortOrder = "desc";
	        	$howManyRecords = $howMany;
	        	//now get the first top element from this table order by column in some arrangment...
	        	$centerBoxContentDao = new CenterBoxContentDAO();
	        	$topRecordResultSet = $centerBoxContentDao->getOnlySelectedRecords($tableName, $howManyRecords, $orderColumn, $sortOrder);
	        	return $topRecordResultSet;
        }
        
    }//end class    
?>