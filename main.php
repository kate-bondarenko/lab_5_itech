<?php 
include ('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
       form {
        width: 100%;
        margin-bottom: 50px;
        padding: 10px;
        background-color:rgb(250, 216, 174);
    }
  
    .submit-button {
        border-radius: 10px;
        background-color:darkorange;
        color:black;
        padding: 10px 20px;
        cursor: pointer;
        text-align: center;
        display: inline-block;
    }

    select {
        width: 30%;
        background-color:beige;
        padding: 10px 20px;
        border: 50%;
        border-radius: 10px;
    }
   </style>
</head>

<body>
<form action="lab1_1.php" method="post">
    <p>Select the chief:</p>
    <select name="chief">
    
        <option>John Chen</option>
        <option>Luis Popp</option>
        <option>Bruce Ernst</option>
        <option>Valii Pataballa</option>
    </select>
    <p><input class="submit-button" type="submit" name="submit"/></p>
</form>

<form action="lab1_2.php" method="post">
    <p>Select the project name:</p>
    <select name="project">
        <option>Project1</option>
        <option>Project2</option>
        <option>Project3</option>
        <option>Project4</option>
        <option>Project5</option>
    </select>
    <p><input class="submit-button" type="submit" name="submit"></p>
</form>

<form action="lab1_3.php" method="post">
    <p>Select the project name:</p>
    <select name="pr">
        <option>Project1</option>
        <option>Project2</option>
        <option>Project3</option>
        <option>Project4</option>
        <option>Project5</option>
    </select>
    <p>Select the date:</p>
    <select name="date">
        <option>2022.02.18</option>
        <option>2022.02.19</option>
        <option>2022.02.20</option>
        <option>2022.04.02</option>
        <option>2022.04.05</option>
        <option>2022.04.10</option>
        <option>2022.03.14</option>
        <option>2022.03.23</option>
        <option>2022.03.27</option>
        <option>2022.01.10</option>
        <option>2022.01.16</option>
        <option>2022.01.23</option>
    </select>
    <p ><input class="submit-button" type="submit" name="submit"/></p>
</form>
</body>
</html>






