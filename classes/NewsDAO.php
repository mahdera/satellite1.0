<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsDAO
 *
 * @author alemayehu
 */
class NewsDAO {
    
    public function __construct() {
        
    }

    public function save($news) {
        try {
            //var_dump($news);
            $newsInsert = DBConnection::getInstance()->insert('tbl_news', array(
                'title' => $news->getTitle(),
                'author' => $news->getAuthor(),
                'post_date' => $news->getPostDate(),
                'news_detail' => $news->getNewsDetail(),
                'modified_by' => $news->getModifiedBy(),
                'modification_date' => $news->getModificationDate()
            ));

            if (!DBConnection::getInstance()->insert('tbl_news', $newsInsert = array())) {
                throw new Exception('There was a problem saving News.');
            }
        } catch (Exception $ex) {
            error_log($ex->__toString());
        }
    }

    public function delete($fields = array()) {
        if (!DBConnection::getInstance()->delete('tbl_news', $fields)) {
            throw new Exception('There was a problem deleting news.');
        }
    }

    public function update($newsId, $fields = array()) {
        if (!DBConnection::getInstance()->update('tbl_news', $newsId, $fields)) {
            throw new Exception('There was a problem updating news.');
        }
    }

    public function find($news = null) {
        if ($news) {
            $field = (is_numeric($news)) ? 'news_id' : 'title';
            $data = DBConnection::getInstance()->get('tbl_news', array($field, '=', $news));

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

    public function findAllNews() {
        $data = DBConnection::getInstance()->get('tbl_news', array('news_id', '>', 0));
        return $data;
    }
    
}//end class
