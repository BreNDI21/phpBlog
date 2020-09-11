<?php


class DbHelper
{
private $host = "localhost";
private $dbname = "BlogPHP";
private $username = "root";
private $password = "";
public function connect(){
    $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username,$this->password);
}
public function close($dbo): void{
    $dbo = null;
}

}