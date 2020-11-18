<?php
//    perform crud operation

    class crudOperations{
        public $data = null;

        public function __construct(database $data)
        {
            if(!isset($data->conn))return null;

            $this->data = $data;
           
            
        }

        public function fetchall()
        {

        // you can write query to sort the data

            $query = "SELECT * FROM post";

            $result = $this->data->conn->query($query);

            $row = $result->num_rows;
         

            if($row == 0)
            {
                echo "No Posts Yet";
            }
            else{
                // $resultArray = array();
                $postfetch =  mysqli_fetch_all($result,MYSQLI_ASSOC);

                $resultArray = $postfetch; 
            
              
                
            }
            return $resultArray;
            

            

            
        }
        public function fetchOneLatest()
       
        {
            $query = "SELECT * FROM post ORDER BY id DESC LIMIT 1";

            $result = $this->data->conn->query($query);

            $row = $result->num_rows;
         

            if($row == 0)
            {
                echo "No Posts Yet";
            }
            else{
                // $resultArray = array();
                $postfetch =  mysqli_fetch_all($result,MYSQLI_ASSOC);

                $resultArray = $postfetch;
   
            }
            return $resultArray;

            
        }
        public function ReadPost($id)
       
        {
            if (isset($id)) {

                $query = "SELECT * FROM post WHERE id = '$id'";

                $result = $this->data->conn->query($query);

                $row = $result->num_rows;
         

                if ($row == 0) {

                    echo "No Posts Yet";

                } else {

                    // $resultArray = array();
                    $postfetch =  mysqli_fetch_all($result, MYSQLI_ASSOC);

                    $resultArray = $postfetch;
                }
                return $resultArray;
            }

            
        }
        public function Delete($id)
       
        {
            if (isset($id)) {

                $query = "DELETE FROM post WHERE id = '$id'";

                $result = $this->data->conn->query($query);

                if($result){

                    echo "post deleted";

                }else{

                    echo "could not delete";
                }
            }

            
        }
        public function updatePost($post_id = null,$content=null,$author=null){

            
            // Get post id
            $sql = "";

            $result = $this->data->conn->query("");
    

            if(!$result){

                echo "unable to update";

            }else{

                echo "update successful";
            }
            

        }
        // update function can be the same as create function

        public function createBlog($title=null,$content=null,$author=null,$table = "post")

        {
            // insert data given
            if(isset($title)&&isset($content)&isset($author))

            {
                // perform the insert operation
                // you can use prepared statements
            $sql = "INSERT INTO `post`(`title`, `content`, `author`) VALUES ('$title','$content','author')";
            
            echo $sql;

               $result = $this->data->conn->query($sql);


               if(!$result){

                   echo "problem with connection";

               }else{
                   
                   echo"post_created";

               }



            }

        }
    }

?>