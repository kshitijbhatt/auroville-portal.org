<?php
class Connection {
	private $connection;
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbName = "auro_portal";

	public function __construct(){
		$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
		if ($this->connection->connect_error) {
		    die("Connection failed: " . $this->connection->connect_error);
		}
		
	}
	
	public function query($sql) {
    	return $this->connection->query($sql);
  	}

  	function insert($table = '', $set = null) {
        $sql = $this->_insert($table, array_keys($set), array_values($set));
        return $this->query($sql);
    }

  	function _insert($table, $keys, $values) {
		$arr  = implode(', ', array_map(function($val){return sprintf("'%s'", $val);}, $values));
		return 'INSERT INTO ' . $table . ' (' . implode(', ', $keys). ') VALUES (' . $arr  . ')';
    }

    function delete($table, $where, $id) {
        $sql = 'DELETE FROM ' . $table . ' WHERE ' . $where . "=" . $id;
        return $this->query($sql);
    }

    function _update($table, $values, $where) {
        foreach($values as $k => $v) {
            $valstr[] = $k . ' = ' . "'".$v."'";
        }

        foreach($where as $k => $v) {
            $whestr[] = $k . ' = ' . "'".$v."'";
        }

        $sql = 'UPDATE ' . $table . ' SET ' . implode(', ', $valstr);

        $sql .= ($where != '' && count($where) > 0) ? " WHERE " . implode(" ", $whestr) : '';

        return $sql;
    }

    function update($table = '', $set = null, $where = null) {
        $sql = $this->_update($table, $set, $where);
		return $this->query($sql);
	}

}
?>