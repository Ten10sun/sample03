<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample02</title>
</head>
<body>
<?php
    $db = new mysqli('localhost:8889','root', 'root', 'mydb');
    $records = $db->query('select * from my_items');
    var_dump($records);
    
?>
</body>
</html>