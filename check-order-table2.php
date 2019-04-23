<?php

//Setting up the heading else the user can go back to the Admin table
echo "<h2>Order Details<span><a href='admin.php'><h3>Go back to Admin Panel</h3></a> </span></h2>";

include 'connection.php';
//Setting up the heading else the user can go back to the Admin table
//Suppressing error notice
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
$startdate = date($_POST['startdate']);
$enddate = date($_POST['enddate']);
$abc = isset($enddate);

if (isset($startdate) && isset($enddate)){
    $sql = "SELECT * FROM orders where timestamps between date('$startdate') and date('$enddate')";
    $result = $conn->query($sql);
}
//Setting up the heading
echo "<table border=5px solid; bgcolor=#fff ; width=100%; height=50%; cellpadding=20%";
echo "<tr>";
echo "<th>Order ID</td>";
echo "<th>User ID</td>";
echo "<th>Name</td>";
echo "<th>Address</td>";
echo "<th>City</th></td>";
echo "<th>State</td>";
echo "<th>Pincode</td>";
echo "<th>Mobile</td>";
echo "<th>Timestamps</td>";
//Fetching all rows one by one
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td align=center>".$row["ord_id"]."</td>"
        ."<td align=center>".$row["o_u_id"]."</td>"
        ."<td align=center>".$row["fullname"]."</td>"
        ."<td align=center>".$row["address"]."</td>"
        ."<td align=center>".$row["city"]."</td>"
        ."<td align=center>".$row["state"]."</td>"
        ."<td align=center>".$row["pincode"]."</td>"
        ."<td align=center>".$row["mobile"]."</td>"
        ."<td align=center>".$row["timestamps"]."</td>";
    echo "</tr>";
}
echo "</table>";

$conn->close();
