 <?php
$servername="localhost"
    $username = $_POST['username'];
    $password = $_POST['password'];
if(isset($_POST{'soso'}))
$host='localhost';
$user='root';
$password='';
$db='shahd'


    $conn=mysqli_connect($host,$user,$password,$db);
    $insert='insert into login values('$username','password')';
    $mysqli_query($conn,$insert);
    if($conn){
        echo('<h1 style=' color:green;'>'your registration is done!</h1>'');
    }

else{
echo('<h1 color:red;'>'your registration is failed!</h1>')

}



?>