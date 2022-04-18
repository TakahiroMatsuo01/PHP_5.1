<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   mb_internal_encoding('UTF-8');
   $str = 'WINGSプロジェクト';
   print mb_strlen($str);
   ?> 
</body>
</html>