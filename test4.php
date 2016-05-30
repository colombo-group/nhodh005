<html>
<header>
<meta charset="UTF-8">
<title>Bài tập 4</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<style type="text/css">
.container{
  line-height: 0.5;
}
p{
  line-height: 0.5;
}
</style>
<script type="text/javascript">





</script>
</header>
<body>
<div class="container">
    <form method="post" action="">
        <input type="text" class="text" id="text" name="value"/>
	<input type = "submit" name = "draw" value = "Vẽ tam giác">
    </form>
    
    
    <?php
    
   
    if(isset($_POST['draw'])){
        $number = $_POST['value'];
        
        
      
  for($i=0;$i<$number;$i++){
    echo "<p style = \" margin: 15px \">";
    for($j=0; $j<=$i; $j++){
      $temp = $i+1-$j;
      echo  $temp%10 ."      " ."    "."    ";
    }
    
   echo "</p>";
    
   
};
    
    
    }
    
    
    ?>
  
  
  
</div>

</body>
</html>