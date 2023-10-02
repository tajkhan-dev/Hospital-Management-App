<?php 


$conn = new mysqli("localhost","root","","caregroup");

echo $conn->connect_error ? "connection not esbablished".$conn->connect_error :"";


?>