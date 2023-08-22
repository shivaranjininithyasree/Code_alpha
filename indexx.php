<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    
    $password=$_POST['password'];

$con=new mysqli('localhost','root','','surveyform')
;
if ($con){
    //echo "connection succesfull";
    $sql="insert into `data` (name,email,password) values('$name','$email','$password') " ;
    
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title> Forms</title>
    <link rel="stylesheet" href="stylu.css">
</head>
<body>
    <h1>
        HTML FORM</h1>
        <div class="container">
        <form action="connect.php" method="post">
        
       
        <div >
            <label>
                GENDER</label>
            <input type="radio" name="gender" value="f" >Female
        
                
            <input type="radio" name="gender" value="m" >Male
        
            <input type="radio" name="gender" value="o">Others
        </div>
        <div >
            <label>
                MOBILE</label>
            <input type="text" name="mobile" placeholder="ENTER YOUR mobile">
        </div>
        <div >
            <label>
                UNIVERSITY</label>
            <input type="text" name="university" placeholder="ENTER YOUR university">
        </div>
        <div class="btn">
        <button type="submit">SUBMIT</button>
        </form>
        </div>
</body>
</html>
