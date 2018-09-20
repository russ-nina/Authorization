<?php
//  $f = fopen('1.txt', 'r');
//  while(!feof($f)){
//     $str1 = fread($f, 1);
//      echo $str1;
//  }
//  $length = filesize('1.txt');
//  $str1 = fread($f, $length);
//  echo $str1;
//  fclose($f);
//
//  function my_file_get_contents($path){
//      $f = fopen($path, 'r');
//      $length = filesize($path);
//      $str = fread($f, $length);
//      fclose($f);
//      return $str;
//  }
//echo my_file_get_contents('1.txt');
?>
<?php

//    $a1 = file_get_contents('1.txt');
//    var_dump($a1);
//    $a2 = file('1.txt');
//    echo '<pre>';
//    print_r($a2);
//    echo '</pre>';
//    
////    file_put_contents('1.txt', "W\nY\nZ");
//    file_put_contents('1.txt', "W\nY\nZ\n", FILE_APPEND);
?>


<?php
  $log = date("Y-m-d H:i:s") . ' ';
  $log .= ' ' . $_SERVER['REMOTE_ADDR']; 
  $log .= ' ' . $_SERVER['PHP_SELF']; 
  $log .= ' ' . $_SERVER['HTTP_REFERER']; 
  echo $log;
  file_put_contents('1.txt', "$log\n", FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
   <h1>Страничка</h1>
</body>
</html>




















