<?php
// Define named constants
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost:3306');
DEFINE('DB_NAME', 'OnlineJobs');
// Establish connection
$dbc = @mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR exit('Could not connect to MySQL: ' .
mysqli_connect_error());

// echo "<br>"."<hr>";
// $keyword = "%P%";
// $query2 = "select * from jobs where name like '%$keyword%'";
// $query_date = "select * from jobs order by post_date desc"; 
// $query_salary = "select * from jobs order by salary desc";      
// $result2 = @mysqli_query($dbc, $query_salary);
// if ($result2) {

//   $rows2 = array();
//   while ($r = mysqli_fetch_assoc($result2)) {
//     $rows2[] = $r;
    
//   }
//   echo json_encode($rows2);
// }
// else {
//   $error_msg = mysqli_error($dbc);
// }



// echo "<br>"."<hr>";
// $query3 = "SELECT * from jobs where post_date > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
// $query4 = "SELECT * from jobs where post_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)";        
// $result3 = @mysqli_query($dbc, $query3);
// if ($result3) {
//   $rows2 = array();
//   while ($r = mysqli_fetch_assoc($result3)) {
//     $rows2[] = $r;
//   }
//   echo json_encode($rows2);
// }
// else {
//   $error_msg = mysqli_error($dbc);
// }



// mysqli_close($dbc);
?>