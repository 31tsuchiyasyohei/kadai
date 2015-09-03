<?php
 if( $csvfile = fopen( 'data/data.csv', 'r' ) ){

   echo '<table border=1 cellspacing=0>';

   while( ( $data = fgetcsv( $csvfile ) ) !== FALSE ){ 
     echo '<tr>'; 

      for( $i = 0; $i < count( $data ); $i ++ ){

       $data[$i]=mb_convert_encoding($data[$i],'UTF-8','UTF-8,Shift-JIS,sjis,EUC-J'); //UTF-8変換

       echo '<td>' . $data[$i] . '</td>'; 

       }

      echo '</tr>';

    } 

    echo '</table>';

fclose($csvfile);
 }

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>fgets</title>
</head>
<body>
</body>
</html> 