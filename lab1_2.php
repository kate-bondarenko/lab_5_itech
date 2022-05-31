<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
 </head>

<body>
</body>

<?php
include ('connect.php');
if(isset($_POST["project"])) {

    $project = $_POST["project"];
    $sqlAllTime = "SELECT CONVERT(SUM(TIMEDIFF(w.time_end, w.time_start)), TIME) FROM 
    work as w INNER JOIN projects as p ON w.fid_projects = p.id_projects WHERE p.name = :project";
    $stmt2 = $dbh->prepare($sqlAllTime);
    $stmt2->execute(array(':project' => $project));
    $res2 = $stmt2->fetchAll();
    foreach($res2 as $row) {
        echo "Oбщее время работы над проектом $project составляет $row[0]";
    }
}
?>
