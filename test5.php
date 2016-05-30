<html>
<header>
<meta charset="UTF-8">
<title>BÀi tập 5</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<style type="text/css">
.container{
  text-align: center;
}
.text{
  height: 35px;
  margin-bottom: 100px
}
button{
  margin-left: 50px;
  width: 100px;
}
</style>
<script type="text/javascript">
 
</script>
</header>
<body>
<div class="container">
    <form method="post" action="">
  <input type="text" class="text" id="text" name="text">
  <input type="submit"  name= "draw"  class="btn btn-primary" value="Vẽ tam giác">
  <input type="submit"  name="resets" class="btn btn-danger" value="Reset">

  
    </form>
  <?php
  
  
   $html="";

  if(isset($_POST['draw'])){
    $y= $_POST['text'];
    for ($i=0; $i<=$y; $i++){
      for($j=$i; $j> $i/2; $j--){
         $x =($j+1)%10;
        $html= $html. $x."  ";
      }
      for($j= (int)(($i+1)/2); $j<=$i ; $j++ ){
        $x = ($j+1)%10;
        $html = $html. $x . " ";
      }
      $html = $html."<br>" ;
    } 
   echo  $html;
    };
 if(isset($_POST['resets'])){
    $html="";
   echo $html;
  };


    

?>

  
  
</div>

</body>
</html>