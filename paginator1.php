<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Paginator</title>
        <style type='text/css'>
            table tr {
                border-bottom: 1px;
            }
           
            .container{
                text-align: center;
                width: 800px;
                height: 1000px;
                line-height: 30px;
                margin: auto;
                background-color: rgba(0,0,0,0.04);
                
            }
            
        </style>
    </head>
    <body>
        <div class='container'>
        <h1> Paginator</h1>
        <form method="post" action="">
            Value a: <input type="text" name="a"><br>
            Value b: <input type="text" name="b"><br>
            Value c: <input type="text" name="c"><br>
            <input type="submit" name="Paginator" value="Paginator">
        </form>
        
        
        
        <?php
        // put your code here

        if(isset($_POST['Paginator'])||isset($_GET['a'])){
            if(isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['c']))
            {
                $a= $_POST['a'];
                $b= $_POST['b'];
                $c= $_POST['c'];
            }
            if(isset($_GET['a'])&&isset($_GET['b'])&&isset($_GET['c']))
            {
                $a= $_GET['a'];
                $b= $_GET['b'];
                $c= $_GET['c'];
                
            }
            
            
     
        $arr =[];
        $temp=$b;
        while(1)
        {
            if($temp>=$a) break;
            else{
                $arr[] = $temp;
                $temp += $b;
            }
        }
        $length = count($arr);
        $page_current= isset($_GET['page_current'])?$_GET['page_current']:1;
        $start= ($page_current -1)*$c +1;
        $end = ($page_current *$c < $length)? $page_current * $c: $length;
        $number_page = (int)($length / $c +1);    
        
      function Paginator($start, $end){
        // hien thi page_current
        global $arr;  
        global $number_page;
        echo "<br> <br> <table>";
        for($i= $start; $i<= $end; $i++)
        {
            echo "<tr>".$arr[$i-1]."</tr><br>";
        }
        echo "</table>";
       
      }
        
        
      Paginator($start, $end) ;
      for($i=1; $i<= $number_page; $i++)
        {

        echo '<a href="paginator1.php?a='.$a.'&b='.$b.'&c='.$c.'&page_current='.$i.'" style="margin: 10px">'.$i.'</a>';
   
        }
        
        }
        ?>
        
        
        </div>
    </body>
</html>
