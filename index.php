<?php 
require_once("./functions.php");

$posts = $crud->fetchOneLatest();

$menuPosts = $crud->fetchall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 

    <div class="container">

    <?php
    foreach ($posts as $key => $value) {
       
 

    ?>
       <div class="main-blog">
            <h1><?php echo $value['title']?></h1>

            <h3>author:<?php echo $value['author']?></h3>

            <h5>created at:<?php echo $value['date_created']?> </h5>

           <article>
               <p><?php echo $value['content']?></p>
           </article>


        </div>
        <?php } ?>

       
 
        <div class="menu">
        <?php
        foreach ($menuPosts as $key => $value) {
            # code...
     
    
        ?>
            <h1><?php echo $value['title']?></h1>

            <a href="read.php?blogtitle=<?php echo $value['title']?>&id=<?php echo $value['id']?>">Read</a>
            
            <?php } ?>


        </div>

  
    </div>
    
</body>
</html>