<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    
    $university=$_POST['university'];

$con=new mysqli('localhost','root','','surveyform')
;
if ($con){
    //echo "connection succesfull";
    $sql="update `data` set gender='$gender',mobile='$mobile',university='$university' where id=(select MAX(id) from `data`)" ;
    
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";

    }else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}
}
?>