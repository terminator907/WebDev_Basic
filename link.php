
<html>
<head>
    <link rel='stylesheet' href="style.css">    </head>
    <body>



<?php
        $q=mysql_connect("localhost","root","") or die('Could not connect the database : Username or password incorrect');

        $db=mysql_select_db("practice",$q) or die('not able to connect to database'.mysql_error());
           

          $query ="select * from bank";
          $result=mysql_query($query);
            ?><h1 align="center" style="color:white;"><i><em>These are the top perfromers</em></i></h1><?php
                 echo "<table border='2' align='center'><tr><th>U_name</th><th>Package</th><th>Contact</th><th>Qualification</th><th>age</th><th>Company</th>";
    
 $a=0;
          while($row=mysql_fetch_array($result))
          {
             
             echo "<tr><th>";
     
         echo "<a href='show.php?id='$a'>",$row['username'],"</a></th>","<th>",$row['amount'],"</th>",
      "<th>",$row['Contact'],"</th>","<th>",$row['Qualification'],"</th>","<th>",$row['Age'],"</th>";
?> <th><img src="<?php echo $row['Image'];?>"></th><?php
    
     $a++;
              
          }
 echo "</table>";
?>
</body>
    </html> 

