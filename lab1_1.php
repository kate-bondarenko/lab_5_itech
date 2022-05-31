<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
 </head>

<body>
</body>

<?php
include ('connect.php');
if(isset($_POST["chief"])) {

    $chief = $_POST["chief"];
    $sqlNumberOfWorkers = "SELECT DISTINCT COUNT(w.id_worker) FROM 
    worker as w INNER JOIN department as d ON w.fid_department = d.id_department 
    WHERE d.chief = ? GROUP BY d.id_department";
    $stmt1 = $dbh->prepare($sqlNumberOfWorkers);
        $stmt1->bindValue(1, $chief);

     $stmt1->execute();
    //$stmt1->execute(array(':chief' => $chief));
    $res1 = $stmt1->fetchAll();
    foreach($res1 as $row) {
       echo "<div> Число сотрудников отдела руководителя $chief составляет $row[0] </div>";
    }
}
?>

