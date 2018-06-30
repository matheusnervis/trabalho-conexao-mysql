<?php
//Variáveis de acesso DB
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'biblioteca');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

class Connection {
    var $conn;

    public function __construct($host, $dbname, $username, $pwd){
        $this->conn = mysqli_connect($host, $username, $pwd, $dbname);
    }

    public function execute($sql){
        $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        return $result;
    }
    
    public function insert($table, $dados){
        foreach ($dados as $key => $value) {
            $keys[] = $key;
            $insertvalues[] = "'$value'";
        }

        $keys = implode(',', $keys);
        $insertvalues = implode(',', $insertvalues);
        $sql = "INSERT INTO $table ($keys) VALUES ($insertvalues)";
        return $this->execute($sql);
    }

    public function update($table, $colpkname, $pk, $data){
        foreach ($data as $key => $value) {
            $sets[] = "$key='$value'";
        }

        $sets = implode(',', $sets);
        $sql = "UPDATE $table SET $sets WHERE $colpkname = '$pk'";
        return $this->execute($sql);
    }
    public function select($table, $columns = '*'){
        $sql = "SELECT $columns FROM $table";
        $result = $this->execute($sql);

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }
}

?>