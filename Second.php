<?php  
$result = mysqli_query($conn,"select * from images where id=$id") or die("Cant perform Query");  
$row=mysqli_fetch_object($result);   
Header( "Content-type: image/jpg");  
echo $row->src;
?> 