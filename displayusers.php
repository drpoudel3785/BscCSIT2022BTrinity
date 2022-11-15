<?php
//SQL
$sql =  "SELECT * FROM users";
//Connection
include_once("connection.php");
//Query
$qry = mysqli_query($conn, $sql);
$totalrecord=mysqli_num_rows($qry);
//Display data
if($totalrecord>=1)
{
    echo "We have $totalrecord records.<br/>";
    while($row=mysqli_fetch_array($qry))
    {
        echo $row['id'];
        echo $row['username'];
        echo $row['password'];
        echo $row['email'];
        echo $row['role'];
        echo $row['status'];
        echo "<br/>";
    }
}
else{
    echo "Sorry no record Found";
}

?>