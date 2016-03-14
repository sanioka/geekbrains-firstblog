<?php

    function articles_all($link){
       
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc ($result);
            
            // не понимаю, как это работает:
            $articles[] = $row;
        }
        
        return $articles;
        
    }

    function article_get($link, $id){
       
        $query = sprintf("SELECT * FROM articles WHERE id = %d", (int)$id);
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);
        
        return $article;
        
    }

    function article_add($link, $title, $date, $content){
        
        $title = trim($title);
        $content = trim($content);

        if ($title == "")
            return false;
        
        $t = "INSERT INTO articles (title, date, content) VALUES ('%s','%s','%s')";
        
        $query = sprintf($t,
                    mysqli_real_escape_string($link, $title),
                        mysqli_real_escape_string($link, $date),
                            mysqli_real_escape_string($link, $content));
        
        //echo $query; 
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
        
    }


    function article_edit($link, $id, $title, $date, $content){
        
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;

        if ($title == "")
            return false;
        
        $sql = "UPDATE articles SET title='%s', date='%s', content='%s' WHERE id = '%d'";
        
        //"UPDATE `articles` SET `id`=[value-1],`title`=[value-2],`content`=[value-3],`date`=[value-4] WHERE 1`id`"
            
        $query = sprintf($sql,    mysqli_real_escape_string($link, $title),
                                mysqli_real_escape_string($link, $date),
                                mysqli_real_escape_string($link, $content),
                                $id);
        
        //echo $query; die;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);   
        
        
    }

    function article_delete($link, $id){
        
        if ($id == 0)
            return false;
        
        $query = sprintf("DELETE FROM articles WHERE id = '%d'", $id);
        $result = mysqli_query($link, $query);
        
         if (!$result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link); 
        
    }

    function article_preview ($text, $len = 500) {
        return mb_substr($text,0,$len);
    }

?>
