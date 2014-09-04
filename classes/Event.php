<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author alemayehu
 */
class Event {
    
    private $eventId;
    private $title;
    private $author;
    private $postDate;
    private $eventDetail;
    private $modifiedBy;
    private $modificationDate;
    
    public function __construct() {
        
    }
    
    public function getEventId() {
        return $this->eventId;
    }

    public function setEventId($eventId) {
        $this->eventId = $eventId;
    }

        
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPostDate() {
        return $this->postDate;
    }

    public function getNewsDetail() {
        return $this->newsDetail;
    }

    public function getModifiedBy() {
        return $this->modifiedBy;
    }

    public function getModificationDate() {
        return $this->modificationDate;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setPostDate($postDate) {
        $this->postDate = $postDate;
    }

    public function setEventDetail($eventDetail) {
        $this->eventDetail = $eventDetail;
    }

    public function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;
    }

    public function setModificationDate($modificationDate) {
        $this->modificationDate = $modificationDate;
    }

    public function save($event){
        $eventDao = new EventDAO();
        $eventDao->save($event);
    }
    
    public function update($event){
        $eventDao = new EventDAO();
        //now build the array represting the php object...
        $fields = array(
            'title' => $event->getTitle(),
            'author' => $event->getAuthor(),
            'post_date' => $event->getPostDate(),
            'event_detail' => $event->getEventDetail(),
            'modified_by' => $event->getModifiedBy(),
            'modification_date' => $event->getModificationDate()
        );
        $eventDao->update($event->getEventId(), $fields);
    }
    
    public function delete($event){
        $eventDao = new EventDAO();
        $eventDao->delete($event);
    }
    
    public function getExactlyThisMuchEvent($howMany){
        $tableName = "tbl_event";
        $orderColumn = "post_date";
        $sortOrder = "desc";        
        //now get the first top element from this table order by column in some arrangment...
        $eventDao = new EventDAO();
        $topRecordResultSet = $eventDao->getOnlySelectedRecords($tableName, $howMany, $orderColumn, $sortOrder, null);
        return $topRecordResultSet;
    }
    
    public function getAllEvent(){
        $eventDao = new EventDAO();
        $fetchedEvent = $eventDao->findAllEvent();
        return $fetchedEvent;
    }
    
}//end class
