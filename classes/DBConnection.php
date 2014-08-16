<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author alemayehu
 */
//require_once '../lib/PHPDebug.php';

class DBConnection {

    private static $_instance = null;
    private $_pdo;
    private $_query;
    private $_error = false;
    private $_results;
    private $_count = 0;

    private function __construct() {
        try {
            $this->_pdo = new PDO("mysql:host=" . Config::get("mysql/host") . ";dbname=" . Config::get("mysql/db"), Config::get("mysql/username"), Config::get("mysql/password"));
        } catch (Exception $ex) {
            PHPDebug::printLogText("Connection Failed : " . $ex->getMessage(), "../lib/debug.txt");
            die($ex->getMessage());
        }
    }

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new DBConnection();
        }
        return self::$_instance;
    }

    public function fetchResultSet($sql, $params = array()) {
        //var_dump($params);passed
        $this->_error = false;
        if ($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            } else {
                echo 'something wrong with the array';
            }

            var_dump($this->_query);

            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }
        return $this->_results;
    }

    public function query($sql, $params = array()) {
        $this->_error = false;
        if ($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }
            //var_dump($expression)            
            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }
        return $this;
    }

    public function error() {
        return $this->_error;
    }

    private function action($action, $table, $where = array()) {
        if (count($where) === 3) {
            $operators = array('=', '<', '>', '<=', '>=');

            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if (in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                if (!$this->query($sql, array($value))->error()) {
                    return $this; //was this
                }
            }
        }
    }

    public function doThisQuery($action, $table, $howManyRecords, $orderColumn, $sortOrder) {
        $sql = "{$action} FROM {$table} ORDER BY {$orderColumn} {$sortOrder} LIMIT 0, {$howManyRecords}";
        if ($this->_query = $this->_pdo->prepare($sql)) {
            //now bind the query values to the prepared statement...
            //$this->_query->bindValue(1, $)	    	
            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
                return $this;
            }
        }
    }

    public function doThisQueryLowerBox($action, $table, $howManyRecords, $orderColumn, $sortOrder, $whichColumn) {
        $sql = "{$action} FROM {$table} WHERE which_column = ? ORDER BY {$orderColumn} {$sortOrder} LIMIT 0, {$howManyRecords}";
        if ($this->_query = $this->_pdo->prepare($sql)) {
            //now bind the query values to the prepared statement...
            $this->_query->bindValue(1, $whichColumn);	    	
            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
                return $this;
            }
        }
    }

    public function get($table, $where) {
        return $this->action('SELECT *', $table, $where);
    }

    public function delete($table, $where) {
        return $this->action('DELETE', $table, $where);
    }

    public function insert($table, $fields = array()) {
        //var_dump($fields);
        if (count($fields)) {
            $keys = array_keys($fields);
            $values = '';
            $x = 1;

            foreach ($fields as $field) {
                $values .= '?';
                if ($x < count($fields)) {
                    $values .= ', ';
                }
                $x++;
            }

            $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES( {$values} )";
            //var_dump($sql);
            if (!$this->query($sql, $fields)->error()) {
                return true;
            }
        }
        return false;
    }

    public function update($table, $id, $fields) {
        $set = '';
        $x = 1;

        foreach ($fields as $name => $value) {
            $set .= "{$name} = ?";
            if ($x < count($fields)) {
                $set .= ', ';
            }
            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE user_id = {$id}";


        if (!$this->query($sql, $fields)->error()) {
            return true;
        } else {
            return false;
        }
    }

    public function fetchAllRecords($table, $where) {
        return $this->query("SELECT * FROM {$table} WHERE $where");
    }

    public function getAllRecordsFromTable($tableName, $pkField) {
        //echo 'inside getAllRec...'.$tableName.' '.$pkField;
        $result = $this->get($tableName, array($pkField, '>', 0));
        //var_dump($result);
        if (!empty($result)) {
            if ($result->count()) {
                return $result;
            }
        }
        return false;
    }

    public function count() {
        return $this->_count;
    }

    public function getResults() {
        return $this->_results;
    }

    public function first() {
        return $this->_results[0];
    }

}

//end class
