<?php
$name=$_POST['name'];
$organization=$_POST['organization'];
?>

<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>HTML</title>
        <style>
             *{ 
                font-size: 13px; 
                font-family: sans-serif;
            }
        </style>
    </head>

    <body>
        <h1>Submitted</h1>
        <p> 이름 : <?php echo $name ?></p>
        <p> 단체 : <?php echo $organization ?></p>
        </body>
</html>            
