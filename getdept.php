<?php 
include("connection.php") ;

if($_POST['type']!=="doc"){

    $query="SELECT * from `departments`";
    
    $result=$conn->query($query);
    $str="";
    
    
    while($row=mysqli_fetch_assoc($result)){
    
        $str .="<option value={$row['deptid']}>{$row['deptname']}</option>";
    }
    echo $str;
}else{
    $query="SELECT * from `doctors` where deptid={$_POST['id']}";
    
    $result=$conn->query($query);
    $str="";
    
    
    while($row=mysqli_fetch_assoc($result)){
    
        $str .="<option value={$row['docid']}>{$row['docname']}</option>";
    }
    echo $str;

}
?>