<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LowerBoxContent
 *
 * @author alemayehu
 */
class LowerBoxContent {

    private $lowerBoxContentId;
    private $title;
    private $content;
    private $postDate;
    private $whichColumn;
    private $modifiedBy;
    private $modificationDate;

    public function __construct() {
        
    }

    public function getLowerBoxContentId() {
        return $this->lowerBoxContentId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getPostDate() {
        return $this->postDate;
    }

    public function getModifiedBy() {
        return $this->modifiedBy;
    }

    public function getModificationDate() {
        return $this->modificationDate;
    }

    public function setLowerBoxContentId($lowerBoxContentId) {
        $this->lowerBoxContentId = $lowerBoxContentId;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setPostDate($postDate) {
        $this->postDate = $postDate;
    }

    public function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;
    }

    public function setModificationDate($modificationDate) {
        $this->modificationDate = $modificationDate;
    }
    
    public function getWhichColumn() {
        return $this->whichColumn;
    }

    public function setWhichColumn($whichColumn) {
        $this->whichColumn = $whichColumn;
    }

    
    public function save($lowerBoxContent) {
        $lowerBoxContentDao = new LowerBoxContentDAO();
        $lowerBoxContentDao->save($lowerBoxContent);
    }

    public function update($lowerBoxContent) {
        $lowerBoxContentDao = new LowerBoxContentDAO();
        //now build the array represting the php object...
        $fields = array(
            'title' => $lowerBoxContent->getTitle(),
            'content' => $lowerBoxContent->getContent(),
            'post_date' => $lowerBoxContent->getPostDate(),
            'which_column' => $lowerBoxContent->getWhichColumn(),
            'modified_by' => $lowerBoxContent->getModifiedBy(),
            'modification_date' => $lowerBoxContent->getModificationDate()
        );
        $lowerBoxContentDao->update($lowerBoxContent->getLowerBoxContentId(), $fields);
    }

    public function delete($lowerBoxContent) {
        $lowerBoxContentDao = new LowerBoxContentDAO();
        $lowerBoxContentDao->delete($lowerBoxContent);
    }

    public function getTopLowerBoxContent($howMany) {
        $tableName = "tbl_lower_box_content";
        $orderColumn = "post_date";
        $sortOrder = "desc";
        $howManyRecords = $howMany;
        //now get the first top element from this table order by column in some arrangment...
        $lowerBoxContentDao = new LowerBoxContentDAO();
        $topRecordResultSet = $lowerBoxContentDao->getOnlySelectedRecords($tableName, $howManyRecords, $orderColumn, $sortOrder);
        return $topRecordResultSet;
    }

    public function getAllLowerBoxContents() {
        $lowerBoxContentDao = new LowerBoxContentDAO();
        $fetchedLowerBoxContents = $lowerBoxContentDao->findAllLowerBoxContents();
        return $fetchedLowerBoxContents;
    }

}//end class
?>