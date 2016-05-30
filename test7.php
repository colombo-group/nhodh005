<html>
<header>
<meta charset="UTF-8">
<title>Bài tập 7</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<style type="text/css">
body{
  text-align: center;
}
.container{
margin-left: 600px;
  background-color: #f2f2f2;
  top:0; left:0; bottom:0; right:0;
  width: 480px;
  height: 450px;
}
#calendar{ margin-left: 20px;}
table tr td{
  width: 30px;

    		padding: 15px;
    		border: solid 1px #d3d3d3;
		}
.today{
  background-color: orange;
  color: red;
}
</style>
<script type="text/javascript">
</script>
</header>
<body>
<div class="container">
  <h1> <i>Lịch để bàn </i></h1>
  
  
  
  
  <?php
  
  
  


$thisDate =  date("d");
$thisMonth = date("m");
$thisMonthName = date("M");
$thisYear = date("Y");
$monthName = ["January","Februrary","March","April","May", "June","July","August","September","October","November","Decemeber"];
$dayName = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
$numberDayOfMonth=[31,28,31,30,31,30,31,31,30,31,30,31];
$html="";
$header="";

  $header = '<h2>'. $thisMonthName ." " . $thisYear .'</h2>';
  echo $header;

  $tmp = mktime(0, 0, 0, $thisMonth, 1, $thisYear);
  $first_day = date("D", $tmp);
  
  
        for($i=0; $i < 7; $i++) {
            if($first_day == $dayName[$i]) {
                $day_no = $i;
                break;
            }
        }
  
  $t = $thisMonth -1; 
  $endDate = $numberDayOfMonth[$t];
  $html = '<table style="border: 1px"><tr>';
  for($i=0; $i<7; $i++){
    $html = $html. '<td>' . $dayName[$i] .'</td>';
  }
  $html  = $html .' </tr><br><tr>';
  
  
  for($j=0; $j<7; $j++){
    if($j==$day_no) break;
    else{
      $html = $html .'<td>'. ' '.'</td>';
    }
  }
  $count=1;
  for(; $j<7; $j++){
    if($count==$thisDate){}else{
    $html =  $html.'<td>' .$count . '</td>';
    $count++;
    }
  }
  $html= $html. "</tr>";
  for($k=2; $k<6; $k++){
    $html=  $html."<tr>";
    for($i=0; $i<7; $i++){
      if($count > $endDate) break;
      if($count==$thisDate){ $html = $html. '<td class="today">' . $count . '</td>';}
      else{
      $html = $html. ' <td>' . $count . '</td>';
      }
      $count++;
    }
  }
  
  
  $html =  $html.' </table>';
  
 echo $html;
  





  
  
  
  
  
  ?>

</div>

</body>
</html>