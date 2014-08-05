<?php
    require_once '../core/init.php';
    class CenterBoxContent {
        private $centerBoxContentId;
        private $title;
        private $content;
        private $postDate;
        private $modifiedBy;
        private $modificationDate;
        
        public function __construct($title, $content, $postDate, $modifiedBy, $modificationDate){
            $this->title = $title;
            $this->content = $content;
            $this->postDate = $postDate;
            $this->modifiedBy = $modifiedBy;
            $this->modificationDate = $modificationDate;
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
        
        public function saveContent(){
        	
        }
    }//end class
    
?>