<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showStudents.php")    
    ?>

    <form action="insertIntoStudents.php" method="post">
        <label>login</label><input name="login" type="text"><br>
        <label>password</label><input name="password" type="text"><br>
        <label>balans</label><input name="balans" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
