<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <title>Bài tập 1</title>
</head>
<body>
    <?php
    
    
    echo "<table style= \" border: 2px solid #666666 \" > <tr>";
for($i=1;$i<=5;$i++){
  echo "<td style = \" border: 2px solid #666666 \" >" ;
  for($j=1;$j<=10;$j++)
    {
      echo $i." x ".$j." = ".$i*$j ."<br>";
    }
echo "</td>";
}
echo "</tr> <tr> ";
for($i=6;$i<=10;$i++){
  echo "<td style = \" border: 2px solid #666666 \" >" ;
  for($j=1;$j<=10;$j++)
    {
      echo $i." x ".$j." = ".$i*$j . "<br>" ;
    }
echo "</td>";
}
echo "</tr> </table>";
    
    
    
    
    ?>
</body>