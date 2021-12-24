<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Reester</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Reester</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM reester';


    if($result = $mysqli->query($sql)) {  

        printf("Список : <br><br>");   
        printf("<table><tr><th>id_pok</th><th>id_prod</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id_pok'], $row['id_prod']); 
        };
        printf("</table>");
        
        $result->close();
    };

    
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
