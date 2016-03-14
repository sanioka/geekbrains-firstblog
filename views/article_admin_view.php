<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Панель администрирования</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
            <h1>Панель администрирования</h1>
            <a href="index.php?action=add">Добавить статью</a>
            
            <table class="admin-table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                
                <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a["date"]?></td>
                    <td><?=$a["title"]?></td>
                    <td><a href="index.php?action=edit&id=<?=$a["id"]?>">Редактировать</a></td>
                    <td><a href="index.php?action=delete&id=<?=$a["id"]?>">Удалить</a></td>
                </tr>

                <?php endforeach ?>

            </table>

        </div>
    </body>

</html>