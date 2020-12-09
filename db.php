<?php 

$connection = mysqli_connect('localhost','root','','blog');

if($connection)
{
    // echo "sucess";
}
else
{
    echo "Error In Connection";
}

?>