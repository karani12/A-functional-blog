<?php

require_once("./functions.php");

$posts = $crud->fetchall();
// SANITIZE THE DATA

if(isset($_POST['post'])){

    if(isset($_POST['title'])&&isset($_POST['content'])&&isset($_POST['author'])){

        $crud->createBlog(

            $title = $_POST['title'],

            $content = $_POST['content'],

            $author = $_POST['author']
        );
    }

}

if(isset($_POST['delete'])){

    $crud->Delete($_POST['id_holder']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
</head>
<body>
    <fieldset style="width: 400px;">
   
        <legend>Author article</legend>
        <form method="post">
            <span>
                Title:
                <input type="text" name="title">
            </span><br><br>
            <span>
                body:
                <input type="text" name="content">
            </span><br><br>
            <span>
                author:
                <input type="text" name="author">
            </span><br><br>
            <button type="submit" name="post">POST</button><br><br><br>
         
   

        </form>
       
        
    </fieldset>
<div>

<!-- you can sort by author -->
    <h1>All posts</h1>
    <?php foreach($posts as $key=>$value){?>

    <ul>
        <li> <?php echo $value['title']?></li>

        <form method="post">
           <input name="id_holder" type="hidden" value="<?php echo $value['id']?>">
            <button type="submit" name="update">Update</button>
            <button type="submit" name="delete">Delete</button>
            </form>
    </ul>
    
    <?php } ?>
</div>
    
</body>
</html>