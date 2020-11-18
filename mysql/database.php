<?php
       class database
       
       {
           protected $host = 'localhost';

           protected $user = 'root';

           protected  $pass = '';

           protected $dbname = 'posts';


        //    link to database
           public $conn = null;

           public function __construct()

           {
               $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);

               if($this->conn->connect_error){

                   echo "failed to connect".$this->conn->connect_error;

               }
           }

           public function __destruct()

           {
               $this->closeConnection();

           }

           private function closeConnection()

           {
               if($this->conn = null)

               {
                   $this->conn->close();
                   
                   $this->conn = null;

               }
           }

       }
?>