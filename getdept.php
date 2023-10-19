<?php 
include("connection.php") ;


$query="SELECT * from `departments`";

$result=$conn->query($query);
$str="";


while($row=mysqli_fetch_assoc($result)){

    $str .="<option value={$row['deptid']}>{$row['deptname']}</option>";
}
echo $str;
?>