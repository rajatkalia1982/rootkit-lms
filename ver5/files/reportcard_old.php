<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php
include 'docroot.php';
include 'dbconn.php';
$result = mysqli_query($link, 'SELECT * FROM sturecord where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

while ($row_1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo '<br>Report Card of - ';
echo $row_1["name"];   
 echo '<br><img src="https://www.alphaclasses.com/StudentPics/'.$row_1["year"].'/'.$row_1["pictureid"].'"'.'></img>';

}

$result22 = mysqli_query($link, 'SELECT * FROM testrec2 where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());


    echo '<br><br>Y 2025-26';
    

echo '<table>';

$score = 0;
$cr = 0;
echo '<tr><td>Test ID</td><td>Marks</td><td>Maximum Marks</td><td>Percentage</td></tr>';
while ($row22 = mysqli_fetch_array($result22, MYSQLI_ASSOC)) { 
    $percentage = 100*$row22["marks"]/$row22["testtotalmarks"];
    
$result23 = mysqli_query($link, 'SELECT * FROM testdetails2 where tname="'.$row22['tname'].'"') or die("Fetch Failed:" . mysql_error());
    
while ($row23 = mysqli_fetch_array($result23, MYSQLI_ASSOC)) {
   echo '<tr><td><a href='.$doc_root.'compare2.php?tname='.$row22["tname"].'>'.$row23['tvalue'].'</a></td><td>'.$row22["marks"].'</td><td>'.$row22["testtotalmarks"].'</td><td>'.$percentage.'</tr>';
}    
$result24 = mysqli_query($link, 'UPDATE testrec2 SET percentage="'.$percentage.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row22["tname"].'"') or die("Fetch Failed:" . mysql_error());

$grade = (int)($percentage/10.0) + 1 ;
if($grade == 11) {
    $grade = 12;
}

$result25 = mysqli_query($link, 'UPDATE testrec2 SET gradenormalized="'.$grade.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row22["tname"].'"') or die("Fetch Failed:" . mysql_error());

$score = $score +  $row22["gradenormalized"] * $row22["credits"];
$cr = $cr + $row22["credits"];
}



echo '</table><br>';


$result12 = mysqli_query($link, 'SELECT * FROM testrec1 where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());


    echo '<br><br>Y 2024-25';
    

echo '<table>';

//$score = 0;
//$cr = 0;
echo '<tr><td>Test ID</td><td>Marks</td><td>Maximum Marks</td><td>Percentage</td></tr>';
while ($row12 = mysqli_fetch_array($result12, MYSQLI_ASSOC)) { 
    $percentage = 100*$row12["marks"]/$row12["testtotalmarks"];
    
$result13 = mysqli_query($link, 'SELECT * FROM testdetails1 where tname="'.$row12['tname'].'"') or die("Fetch Failed:" . mysql_error());
    
while ($row13 = mysqli_fetch_array($result13, MYSQLI_ASSOC)) {
   echo '<tr><td><a href='.$doc_root.'compare1.php?tname='.$row12["tname"].'>'.$row13['tvalue'].'</a></td><td>'.$row12["marks"].'</td><td>'.$row12["testtotalmarks"].'</td><td>'.$percentage.'</tr>';
}    
$result14 = mysqli_query($link, 'UPDATE testrec1 SET percentage="'.$percentage.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row12["tname"].'"') or die("Fetch Failed:" . mysql_error());

$grade = (int)($percentage/10.0) + 1 ;
if($grade == 11) {
    $grade = 12;
}

$result15 = mysqli_query($link, 'UPDATE testrec1 SET gradenormalized="'.$grade.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row12["tname"].'"') or die("Fetch Failed:" . mysql_error());

$score = $score +  $row12["gradenormalized"] * $row12["credits"];
$cr = $cr + $row12["credits"];
}



echo '</table><br>';

$result2 = mysqli_query($link, 'SELECT * FROM testrec where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

echo '<br>Y 2023-24';
echo '<table>';

//$score = 0;
//$cr=0;
echo '<tr><td>Test ID</td><td>Marks</td><td>Maximum Marks</td><td>Percentage</td></tr>';
while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) { 
    $percentage = 100*$row2["marks"]/$row2["testtotalmarks"];
    
$result3 = mysqli_query($link, 'SELECT * FROM testdetails where tname="'.$row2['tname'].'"') or die("Fetch Failed:" . mysql_error());
    
while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
   echo '<tr><td><a href='.$doc_root.'compare.php?tname='.$row2["tname"].'>'.$row3['tvalue'].'</a></td><td>'.$row2["marks"].'</td><td>'.$row2["testtotalmarks"].'</td><td>'.$percentage.'</tr>';
}    
$result4 = mysqli_query($link, 'UPDATE testrec SET percentage="'.$percentage.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row2["tname"].'"') or die("Fetch Failed:" . mysql_error());

$grade = (int)($percentage/10.0) + 1 ;
if($grade == 11) {
    $grade = 12;
}

$result5 = mysqli_query($link, 'UPDATE testrec SET gradenormalized="'.$grade.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row2["tname"].'"') or die("Fetch Failed:" . mysql_error());

$score = $score +  $row2["gradenormalized"] * $row2["credits"];
$cr = $cr + $row2["credits"];
}

echo '</table><br>';

$result02 = mysqli_query($link, 'SELECT * FROM testrec0 where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

echo '<br>Y 2022-23';
echo '<table>';

//$score = 0;
//$cr=0;
echo '<tr><td>Test ID</td><td>Marks</td><td>Maximum Marks</td><td>Percentage</td></tr>';
while ($row02 = mysqli_fetch_array($result02, MYSQLI_ASSOC)) { 
    $percentage = 100*$row02["marks"]/$row02["testtotalmarks"];
    
$result03 = mysqli_query($link, 'SELECT * FROM testdetails0 where tname="'.$row02['tname'].'"') or die("Fetch Failed:" . mysql_error());
    
while ($row03 = mysqli_fetch_array($result03, MYSQLI_ASSOC)) {
   echo '<tr><td><a href='.$doc_root.'compare0.php?tname='.$row02["tname"].'>'.$row03['tvalue'].'</a></td><td>'.$row02["marks"].'</td><td>'.$row02["testtotalmarks"].'</td><td>'.$percentage.'</tr>';
}    
$result04 = mysqli_query($link, 'UPDATE testrec0 SET percentage="'.$percentage.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row02["tname"].'"') or die("Fetch Failed:" . mysql_error());

$grade = (int)($percentage/10.0) + 1 ;
if($grade == 11) {
    $grade = 12;
}

$result05 = mysqli_query($link, 'UPDATE testrec0 SET gradenormalized="'.$grade.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row02["tname"].'"') or die("Fetch Failed:" . mysql_error());

$score = $score +  $row02["gradenormalized"] * $row02["credits"];
$cr = $cr + $row02["credits"];
}


echo '</table><br>';

$resultx2 = mysqli_query($link, 'SELECT * FROM testrecx where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

echo '<br>Y 2021-22';
echo '<table>';

//$score = 0;
//$cr=0;
echo '<tr><td>Test ID</td><td>Marks</td><td>Maximum Marks</td><td>Percentage</td></tr>';
while ($rowx2 = mysqli_fetch_array($resultx2, MYSQLI_ASSOC)) { 
    $percentage = 100*$rowx2["marks"]/$rowx2["testtotalmarks"];
    
$resultx3 = mysqli_query($link, 'SELECT * FROM testdetailsx where tname="'.$rowx2['tname'].'"') or die("Fetch Failed:" . mysql_error());
    
while ($rowx3 = mysqli_fetch_array($resultx3, MYSQLI_ASSOC)) {
   echo '<tr><td><a href='.$doc_root.'comparex.php?tname='.$rowx2["tname"].'>'.$rowx3['tvalue'].'</a></td><td>'.$rowx2["marks"].'</td><td>'.$rowx2["testtotalmarks"].'</td><td>'.$percentage.'</tr>';
}    
$resultx4 = mysqli_query($link, 'UPDATE testrecx SET percentage="'.$percentage.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$rowx2["tname"].'"') or die("Fetch Failed:" . mysql_error());

$grade = (int)($percentage/10.0) + 1 ;
if($grade == 11) {
    $grade = 12;
}

$resultx5 = mysqli_query($link, 'UPDATE testrecx SET gradenormalized="'.$grade.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$rowx2["tname"].'"') or die("Fetch Failed:" . mysql_error());

$score = $score +  $rowx2["gradenormalized"] * $rowx2["credits"];
$cr = $cr + $rowx2["credits"];
}


echo '</table><br>';



echo "<h1>Score --> ".$score."</h1><br>";
echo "<h2>GPA -->".($score/$cr)."<h2>";
$resultk = mysqli_query($link, 'UPDATE sturecord SET cgpa='.($score/$cr).' where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());
$resultn = mysqli_query($link, 'SELECT * FROM sturecord where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

while ($rown_1 = mysqli_fetch_array($resultn, MYSQLI_ASSOC)) {
echo '<h3>Batch <Internal> Rank - >'.$rown_1["irank"].'</h3>';
echo '<h3>Overall Rank - >'.$rown_1["orank"].'</h3>';


}



$result3 = mysqli_query($link, 'UPDATE sturecord SET score="'.$score.'" where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

echo '</table><br>Guest Book<br><iframe width=80% height=65% src="'.$doc_root.'guestbook.php?id='.$_GET["rollno"].'"></iframe>'; 



?>

