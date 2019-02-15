<?php
    function get_post(){
        
        global $db;
        
        $req = $db->query("
            SELECT  posts.id, 
                    posts.title,
                    posts.image,
                    posts.content,
                    posts.date,
                    admin.name
            FROM posts
            JOIN admin 
            ON posts.writer = admin.email
            WHERE posts.id='{$_GET['id']}'
        
        ");
        
        $result = $req->fetchObject();
        
        return $result;
    }

   

    function comment($name,$email,$comment){
    
        global $db;
    
    $com = array(
           'name' => $name,
           'email' => $email,
           'comment' => $comment,
           'post_id' => $_GET["id"]
    
    );
    
    $sql = "INSERT INTO comments(name,email,comment,post_id,date) VALUES(:name, :email, :comment, :post_id, NOW())";
    
    $req = $db->prepare($sql);
    
    $req->execute($com);
}


?>