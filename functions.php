<?php  
    require_once("./mysql/database.php");
    require_once("./mysql/crud.php");

    $database = new database;
    $crud = new crudOperations($database);
  

?>