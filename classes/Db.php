<?php
class Db
{
    public $conn, $tableName;
    function __construct($tableName)
    {
        $hostName = "localhost";
        $userName = 'trz';
        $passWord = 'root123';
        $db = 'sankyitar';
        $this->conn = mysqli_connect($hostName, $userName, $passWord, $db);
        $this->tableName = $tableName;
    }
    public function create(array $data): string
    {
        $values = "'" . join("','", array_values($data)) . "'";
        $sql = "INSERT INTO $this->tableName ";
        $sql .= "(" . join(",", array_keys($data)) . ") VALUES";
        $sql .= "($values)";
        mysqli_query($this->conn, $sql);
        return $this->conn->insert_id;
    }
    public function index(): array
    {
        //select * from testing
        $sql = "SELECT * FROM $this->tableName";
        $query = mysqli_query($this->conn, $sql);
        $rows = [];
        while ($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }
        return $rows;
    }
    public function show(int $id): object
    {
        //select * from testing where id=$id
        $sql = "SELECT * FROM $this->tableName WHERE id=$id";
        $query = mysqli_query($this->conn, $sql);
        return mysqli_fetch_object($query);
    }
    function __destruct()
    {
        mysqli_close($this->conn);
    }
}
