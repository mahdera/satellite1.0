<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author alemayehu
 */
class News {
    private $newsId;
    private $title;
    private $author;
    private $postDate;
    private $newsDetail;
    private $modifiedBy;
    private $modificationDate;
    
    public function __construct() {
        
    }
    
    public function getNewsId() {
        return $this->newsId;
    }

    public function setNewsId($newsId) {
        $this->newsId = $newsId;
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

    public function setNewsDetail($newsDetail) {
        $this->newsDetail = $newsDetail;
    }

    public function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;
    }

    public function setModificationDate($modificationDate) {
        $this->modificationDate = $modificationDate;
    }

    public function save($news){
        $newsDao = new NewsDAO();
        $newsDao->save($news);
    }
    
    public function update($news){
        $newsDao = new NewsDAO();
        //now build the array represting the php object...
        $fields = array(
            'title' => $news->getTitle(),
            'author' => $news->getAuthor(),
            'post_date' => $news->getPostDate(),
            'news_detail' => $news->getNewsDetail(),
            'modified_by' => $news->getModifiedBy(),
            'modification_date' => $news->getModificationDate()
        );
        $newsDao->update($news->getNewsId(), $fields);
    }
    
    public function delete($news){
        $newsDao = new NewsDAO();
        $newsDao->delete($news);
    }
    
    public function getExactlyThisMuchNews($howMany){
        $tableName = "tbl_news";
        $orderColumn = "post_date";
        $sortOrder = "desc";        
        //now get the first top element from this table order by column in some arrangment...
        $newsDao = new NewsDAO();
        $topRecordResultSet = $newsDao->getOnlySelectedRecords($tableName, $howMany, $orderColumn, $sortOrder, null);
        return $topRecordResultSet;
    }
    
    public function getAllNews(){
        $newsDao = new NewsDAO();
        $fetchedNews = $newsDao->findAllNews();
        return $fetchedNews;
    }
    
}//end class
