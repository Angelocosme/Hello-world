

<?php

    function get_posts(){
        
        global $db;
        
        $req = $db->query("SELECT posts.id, posts.title, posts.image, posts.date, posts.content, admin.name FROM posts JOIN admin ON posts.writer = admin.email WHERE posted = '1' ORDER BY date DESC LIMIT 0,4 ");
        
        $results = array();
        
        while($rows = $req->fetchObject())
        {
            $results[] = $rows;
        }
        return $results;
    }

?> 