<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="admin">Панель администрирования</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a["id"]?>"><?=$a["title"]?></a></h3>
                    <em>Опубликовано: <?=$a["date"]?></em>
                    <p><?=article_preview ($a["content"])?></p>
                </div> 
                
                <?php endforeach ?>
                
            </div>
            <footer>Мой первый блог<br>
            CopyRight &copy; 2016
            </footer>
        </div>
    </body>

</html>