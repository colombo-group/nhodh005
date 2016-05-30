<html>
<header>
<meta charset="UTF-8">
<title>bài tập 2</title>
<style type="text/css">
    input{
        height: 30px;
        width: 200px;
        color: blue;
    }  
    table tr td{
        border: 1px;
        background-color: orange;
        
    }
    h2{
        color: #666666;
    }
.line {
			height: 20px;
			background-color: red;
			float: left;
			margin-right: 10px;
  margin-left: 20px;
		}
</style>
</header>
<body>
    <div> 
    <h1> Bài 2: Vẽ đồ thị</h1>
    <form method="post" action="">
        <input type="text" name="number" placeholder ="Số đồ thị muốn vẽ">
        <input type="submit" style=" width: 50px; background-color: aquamarine">
    </form>
  
 
</div>
 <?php 
 
 
  if(isset($_POST['number']))
  {
      $number = $_POST['number'];
      echo '<h2><i> Nhập tên và giá trị của đồ thị muốn vẽ:</i></h2>'
      . '<form method = "post" action ="">'
      . '<table><tr><td>Tên</td><td>Giá trị</td></tr>';

      for($j=0;$j<$number;$j++)
      {
        
         echo '<tr> <td> <input type="text" name ="name[]" placeholder = "Nhập tên đồ thị"> </td>'
          . '<td> <input type="text" name= "value[]" placeholder="Nhập giá trị"></td></tr>';
      }
      echo '</table><input type = "submit" value = "Vẽ đồ thị"></form>';

  }
  
 


  
 if(isset($_POST['name']) && isset($_POST['value'])){
	$names = $_POST['name'];
	$values = $_POST['value'];
        
	echo '<h2>Hiển thị đồ thị</h2><table>';
	for ($i=0; $i < count($names); $i++) {
		$row = "";
		$row .= '<tr>'
			.'<td>'.$names[$i].'</td>'	
			.'<td style = "width:150px ; border: 1px">'
			.'<div style = "width:100px">'
			.'<div style = "border: solid red; width: '. $values[$i] . '%; float:left; float: left; margin-top:5px; margin-right:3px">'
			.'</div>'
			.'</div>'
			.'<label>'.$values[$i].'%</label>'		
			.'</td>'
			.'</tr>';
		echo $row;
	
	}
	echo '</table>';
}

//function resets(){
//row="";
//  html = '<h2>Hiển thị đồ thị</h2>';
//  document.getElementById("viewgraph").innerHTML = html;
//}
?>   
    
    

</body>
</html>