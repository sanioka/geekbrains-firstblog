<?php

require_once("../database.php");
require_once("../models/articles.php");

$link = db_connect();

if(isset($_GET['action']))
        $action = $_GET['action'];  
    else
        $action = "";




// если добавляем новую статью
 if ($action == "add"){ 
        if(!empty($_POST)){
            article_add($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        
        
        $a['title'] = '';
        $a['date'] = '';
        $a['content'] = '';
        include("../views/article_admin.php"); 
     
     
     // если редактируем текущую статью
            } elseif ($action == "edit") {
     
                if(!isset($_GET['id']))
                    header("Location: index.php");
     
                $id = (int)$_GET['id'];  
     
                if(!empty($_POST) && $id > 0){
                    article_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
                    header("Location: index.php");                 
                }
     
                $a = article_get($link, $id);
                include("../views/article_admin.php"); 

     
            } elseif ($action == "delete") {

                if(!isset($_GET['id']))
                    header("Location: index.php");

                $id = (int)$_GET['id'];
     
                article_delete($link, $id);
                header("Location: index.php");
     
        // просто выводим список статей     
         } else {
                $articles = articles_all($link);
                include("../views/article_admin_view.php");
            }


?>