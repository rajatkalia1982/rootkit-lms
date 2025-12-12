<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students</title>
<META NAME="Description" CONTENT="Top Students preparing for IIT-JEE , AIEEE , DCE , Olympiads exams. Previous Year Students for IIT-JEE Enterance">
<META NAME="keywords" content=" IIT Coaching, What Studnets Say about IITJEE, Studnet Record for IIT" />
<link rel="shortcut icon" href="../../alphalogo.ico"  />
</head>

<body>
<img src=<?php $doc_root; ?>"world_map.gif" alt="world" longdesc="http://www.alphaclasses.com" />
<table  border="0"><tr>
<?php

include 'docroot.php';
include 'dbconn.php';

if(isset($_GET["year"])) {
   
    $result = mysqli_query($link ,'SELECT * FROM sturecord WHERE year ='.$_GET["year"]) or die("Fetch Failed:" . mysql_error());

$a = mysqli_num_rows($result);
$rem = $a%4; 
$n_lines= (int)($a/4) + 1;
$ctr=0;

$line_num = (int)($ctr/4) +1;


for(;$ctr<$a;) {
    
$line_num = (int)($ctr/4) +1;


$result = mysqli_query($link ,'SELECT * FROM sturecord WHERE year ='.$_GET["year"].' ORDER BY score DESC LIMIT '.$ctr.', 4' ) or die("Fetch Failed:" . mysql_error());


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    

echo '<td rowspan="5"><img src="https://www.alphaclasses.com/StudentPics/'.$row["year"]."/".$row["pictureid"].'"'.' width=120 height=160 /></td><td> Rank ='.($ctr + 1).'</td>';
 $ctr=$ctr + 1;


$resultx = mysqli_query($link ,'UPDATE sturecord SET irank='.$ctr.' WHERE rollno='.$row["rollno"] )or die("Fetch Failed:" . mysql_error());
}

echo '<tr>';

if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord WHERE year ='.$_GET["year"].' ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
 

echo '<td>'.$row["name"].'</td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';
if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord WHERE year ='.$_GET["year"].'  ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 


echo '<td><a href="reportcard.php?rollno='.$row["rollno"].'">Report Card</a></td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';
if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord WHERE year ='.$_GET["year"].'  ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    

echo '<td>Profile</td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';
if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord WHERE year ='.$_GET["year"].' ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
     

echo '<td>Details</td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';

}
echo '</tr><br><strong>YearBook<br></strong><iframe width=80% height=65% src="'.$doc_root.'guestbook.php?id=YB'.$_GET["year"].'"></iframe><hr>';

}

else {
   
  
    $result = mysqli_query($link ,'SELECT * FROM sturecord') or die("Fetch Failed:" . mysql_error());

$a = mysqli_num_rows($result);
$rem = $a%4; 
$n_lines= (int)($a/4) + 1;
$ctr=0;

$line_num = (int)($ctr/4) +1;


for(;$ctr<$a;) {
    
$line_num = (int)($ctr/4) +1;


$result = mysqli_query($link ,'SELECT * FROM sturecord ORDER BY score DESC LIMIT '.$ctr.', 4' ) or die("Fetch Failed:" . mysql_error());


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    

echo '<td rowspan="5"><img src="https://www.alphaclasses.com/StudentPics/'.$row["year"]."/".$row["pictureid"].'"'.' width=120 height=160 /></td><td> Rank ='.($ctr + 1).'</td>';
 $ctr=$ctr + 1;
 
 $resulty = mysqli_query($link ,'UPDATE sturecord SET orank='.$ctr.' WHERE rollno='.$row["rollno"] )or die("Fetch Failed:" . mysql_error());

}

echo '<tr>';

if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
 

echo '<td>'.$row["name"].'</td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';
if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 


echo '<td><a href="reportcard.php?rollno='.$row["rollno"].'">Report Card</a></td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';
if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());



while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    

echo '<td>Profile</td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';
if($n_lines==$line_num){
    $ctr = $ctr -$rem;
}
else {
$ctr = $ctr - 4; 
}
$result = mysqli_query($link ,'SELECT * FROM sturecord ORDER BY score DESC LIMIT '.$ctr.', 4') or die("Fetch Failed:" . mysql_error());


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
     

echo '<td>Details</td>';
  $ctr=$ctr + 1;
}

echo '</tr><tr>';


}
echo '</tr><br><strong>SlamBook<br></strong><iframe width=80% height=65% src="'.$doc_root.'guestbook.php?id=SlamBook"></iframe><hr>';
}

?>
</table>
</body>
</html>
