<?php
 $server='localhost';
 $user='root';
 $password='';
 $database='coronaweb';

$con= mysqli_connect($server,$user,$password,$database);
if($con){
    ?>
    <script>
        alert("connection");
        </script>
        <?php
}
else{
    ?>
    <script>
        alert("no connection");
        </script>
        <?php 
}

?>