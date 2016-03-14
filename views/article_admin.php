<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Редактирование статьи</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
            <h1>Редактирование статьи</h1>
            
            <form method="post" action="index.php?action=<?=$_GET['action'] ?>&id=<?=$_GET['id'] ?>">
            
           
                
            <label>
                Заголовок статьи
                <input type="text" name="title" value="<?=$a['title'] ?>" class="form-item" autofocus required>
            </label>
                
            <label>
                Дата
                <input type="date" name="date" value="<?=$a['date'] ?>" class="form-item" required>
            </label>    
            
            <label>
                Содержимое
                <textarea name="content" class="form-item" required><?=$a['content'] ?></textarea>
            </label>    
                
            <input type="submit" value="Сохранить изменения" class="btn">    
            </form>

        </div>
    </body>

</html>