<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1100px, initial-scale=1.0">
    <script src="https://yastatic.net/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/formsubmit.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">
    <title>Каталог футболистов 2.0</title>
</head>
<body>
    <div class="container" style="width: 90%;">
        <h1>Каталог футболистов 2.0</h1>
        <?php require "files/result.php"; ?>
        <form action="/" method="post" class="add">
            <button  type="submit" name="find" class="btn btn-lg btn-success" style="font-size: 15px;">Добавить футболиста</button>
        </form>
        <div class="list-group mx-0">
            <b class="list-group-item d-flex gap-2">
                <table style="color: blue">
                    <tr>
                    <td style="width: 20%">Имя футболиста</td>
                    <td style="width: 20%">Фамилия футболиста</td>
                    <td style="width: 9%">Пол</td>
                    <td style="width: 10%">Дата рождения</td>
                    <td style="width: 15%">Страна</td>
                    <td style="width: 26%">Команда</td>
                    </tr>
                </table>
            </b><br>

        <script>
            setInterval(function(){
                $("#update").load("# #update"); }, 1000);
        </script>
        <div id="update"><?php require "files/football.php"; ?></div>
        <?php require "files/red.php"; ?>
        </div>
    </div>
</body>
</html>