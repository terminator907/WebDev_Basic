<?php


 session_start();
  
   if(isset($_SESSION['counter']))
   {
       $_SESSION['counter']+=1;
   }
else{
            
$_SESSION['counter']=1;

}

$cn=$_SESSION['counter'];
?>
<html>
<head><link rel="stylesheet" href="sty.css"></head>
    <body>

<?php
  $a=$_GET['id'];
   
$key=array();
          $values=array();
          $i=0;

$q=mysql_connect("localhost","root","") or die('Could not connect the database : Username or password incorrect');

        $db=mysql_select_db("practice",$q) or die('not able to connect to database'.mysql_error());
           

          $query ="select * from bank";
          $result=mysql_query($query);
        ?>
         <h1 align="center"><i>Individual details</i></h1><hr>
        <?php
echo "<table align='center'><tr><th>Name</th><th>Package</th><th>Contact</th><th>Qualification</th><th>age</th><th>Company</th>";
                
 
          while($row=mysql_fetch_array($result))
          {
                
                     if($i==$a){
                          echo "<tr><th>",$row['username'],"</a></th>","<th>",$row['amount'],"</th>",
      "<th>",$row['Contact'],"</th>","<th>",$row['Qualification'],"</th>","<th>",$row['Age'],"</th>";
?> <th><img src="<?php echo $row['Image'];?>"></th><?php
    
     
              
          }
                         
                     
               
              $i++;
             }


?>
</table>
    </body>
</html>
<br><h2 align="center"><?php
 echo "NO. OF PEOPLE VISITED profile IS ".$cn;?></h2>