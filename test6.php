<html>
<header>
<meta charset="UTF-8">
<title>Bài tập 6</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<style type="text/css">
input{
  height: 30px;
  width: 80px;
}
button{
  width: 40px;
  height: 30px;
}
.container{
  margin-top: 50px;
}
</style>
<script type="text/javascript">
</script>
</header>
<body>
<div class=" container" >
    <form method="post" action="">
  <input type="text" name="number1">
  <input type="submit" name="+" value="+">
  <input type="submit" name="-" value="-">
  <input type="submit" name="*" value="*">
  <input type="submit" name="/" value="/">
  <input type="submit" name="^" value="^">
  <input type="text" name="number2"/> 
    </form>
  
  <?php
  
  if(isset($_POST['number1'])&&isset($_POST['number2']))
  {
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      if(isset($_POST['+'])) $result = $number1 + $number2;
      if(isset($_POST['-'])) $result = $number1 - $number2;
      if(isset($_POST['*'])) $result = $number1 * $number2;
      if(isset($_POST['/'])) $result = $number1 / $number2;
      if(isset($_POST['^'])) $result = pow($number1 , $number2);
      
      
     echo " <br><br><h1>Answer:   " . $result . "</h1>";
   }
  
  
  
  ?>
  
  
  
  
  
  
  
  
  
</div>

</body>
</html>