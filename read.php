<?php 
require_once("functions.php");
if(isset($_GET['id'])){

   $read =  $crud->ReadPost($id = $_GET['id']);
  
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>


<?php foreach ($read as $key =>$value) {
    # code...
} ?>
    <h1><?php echo $value['title']?></h1>

    <h3><?php echo $value['author']?></h3>

    <p><?php echo $value['content']?></p>

    <?php ?>
    
</body>
</html>