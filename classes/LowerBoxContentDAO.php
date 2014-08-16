<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LowerBoxContentDAO
 *
 * @author alemayehu
 */
class LowerBoxContentDAO {

    public function __construct() {
        
    }

    public function save($lowerBoxContent) {
        try {

            $lowerBoxContentInsert = DBConnection::getInstance()->insert('tbl_lower_box_content', array(
                'title' => $lowerBoxContent->getTitle(),
                'content' => $lowerBoxContent->getContent(),
                'post_date' => $lowerBoxContent->getPostDate(),
                'which_column' => $lowerBoxContent->getWhichColumn(),
                'modified_by' => $lowerBoxContent->getModifiedBy(),
                'modification_date' => $lowerBoxContent->getModificationDate()
            ));

            if (!DBConnection::getInstance()->insert('tbl_lower_box_content', $lowerBoxContentInsert = array())) {
                throw new Exception('There was a problem saving lower box content.');
            }
        } catch (Exception $ex) {
            error_log($ex->__toString());
        }
    }

    public function delete($fields = array()) {
        if (!DBConnection::getInstance()->delete('tbl_lower_box_content', $fields)) {
            throw new Exception('There was a problem deleting lower box content.');
        }
    }

    public function update($lowerBoxContentId, $fields = array()) {
        if (!DBConnection::getInstance()->update('tbl_lower_box_content', $lowerBoxContentId, $fields)) {
            throw new Exception('There was a problem updating lower box content.');
        }
    }

    public function find($lowerBoxContent = null) {
        if ($lowerBoxContent) {
            $field = (is_numeric($lowerBoxContent)) ? 'lower_box_content_id' : 'title';
            $data = DBConnection::getInstance()->get('tbl_lower_box_content', array($field, '=', $lowerBoxContent));

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

    public function findAllLowerBoxContents() {
        $data = DBConnection::getInstance()->get('tbl_lower_box_content', array('lower_box_content_id', '>', 0));
        return $data;
    }

}

//end class
