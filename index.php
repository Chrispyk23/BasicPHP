<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 4</title>
    </head>
    <body>
        <?php
        // put your code here
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $Address = $_GET['Address'];
        $City = $_GET['City'];
        $State = $_GET['State'];
        $ZipCode = $_GET['ZipCode'];
        $Country = $_GET['Country'];
        $JobTitle = $_GET['JobTitle'];
        }
        ?>
    </body>
</html>
