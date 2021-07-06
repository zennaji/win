<?php 
// connecten aan de database
$conn = mysqli_connect('localhost','root','root','GiveAway',);
// checken of de connect successed is en laat zien wat for error is het als het bestaat
if(!$conn){
    echo 'error: ' . mysqli_connect_error();
}


?>