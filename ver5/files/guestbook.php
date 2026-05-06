<html><head><title>Guest Book</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-15"><meta http-equiv="content-style-type" content="text/css"><meta http-equiv="content-script-type" content="text/javascript">
<meta name="description" content="Guest Book"><meta name="copyright" content="Rajat Kalia - www.rajatkalia.com"><meta name="author" content="Rajat Kalia - www.rajatkalia.com">
<link rel="shortcut icon" href="../../alphalogo.ico"  />
</head><body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" >
<form action=https://www.alphaclasses.com/guestbook.php?id=<?php echo $_GET["id"]; ?> method=POST >
    <input type=text name=name>Name</input><br>
    <input type=textarea name=message>Message</input><br>
    <button type=submit name=submit value=1>Submit</button>
</form>
<?php
include 'docroot.php';
include 'dbconn.php';

if($_POST["submit"])
{
    date_default_timezone_set('Asia/Calcutta');
    $date = date("Y-m-d H:i:s");
    $result2 = mysqli_query($link, 'INSERT INTO guestbook ( id , name , message , date ) values ( "'.$_GET["id"].'" , "'.$_POST["name"].'" , "'.$_POST["message"].'" , "'.$date.'")');
}

$result = mysqli_query($link, 'SELECT * FROM guestbook where id="'.$_GET['id'].'" ORDER BY date DESC') or die("Fetch Failed:" . mysql_error());

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    echo '<font color=blue>'.$row["name"].'</font> posted a message on <font color=green>'.$row["date"].'</font><br>'.$row["message"].'<br><br>';
    }

?>
