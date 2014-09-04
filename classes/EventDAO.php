<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventDAO
 *
 * @author alemayehu
 */
class EventDAO {
    
    public function __construct() {
        
    }

    public function save($event) {
        try {            
            $eventInsert = DBConnection::getInstance()->insert('tbl_event', array(
                'title' => $event->getTitle(),
                'author' => $event->getAuthor(),
                'post_date' => $event->getPostDate(),
                'event_detail' => $event->getEventDetail(),
                'modified_by' => $event->getModifiedBy(),
                'modification_date' => $event->getModificationDate()
            ));

            if (!DBConnection::getInstance()->insert('tbl_event', $eventInsert = array())) {
                throw new Exception('There was a problem saving Event.');
            }
        } catch (Exception $ex) {
            error_log($ex->__toString());
        }
    }

    public function delete($fields = array()) {
        if (!DBConnection::getInstance()->delete('tbl_event', $fields)) {
            throw new Exception('There was a problem deleting event.');
        }
    }

    public function update($eventId, $fields = array()) {
        if (!DBConnection::getInstance()->update('tbl_event', $eventId, $fields)) {
            throw new Exception('There was a problem updating event.');
        }
    }

    public function find($event = null) {
        if ($event) {
            $field = (is_numeric($event)) ? 'event_id' : 'title';
            $data = DBConnection::getInstance()->get('tbl_event', array($field, '=', $event));

            if ($data->count()) {
                $this->data = $data->first();
                return $this->data;
            }
        }
        return false;
    }

    public function getOnlySelectedRecords($tableName, $howManyRecords, $orderColumn, $sortOrder, $whichColumn) {
        $action = "SELECT * ";
        $resultSet = DBConnection::getInstance()->doThisQueryLowerBox($action, $tableName, $howManyRecords, $orderColumn, $sortOrder, $whichColumn);

        if ($resultSet->count()) {
            $this->data = $resultSet->first();
            return $this->data;
        }
    }

    public function findAllEvent() {
        $data = DBConnection::getInstance()->get('tbl_event', array('event_id', '>', 0));
        return $data;
    }
    
}//end class
