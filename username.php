<?php
$usname = filter_input(INPUT_POST, 'usname');
$psw = filter_input(INPUT_POST, 'psw');
if (!empty($usname)){
if (!empty($psw)){
$host = "localhost";
$dbusname = "root";
$dbpsw = "";
$dbname = "youtube";

$conn = new mysqli ($host, $dbusname, $dbpsw, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (usname, psw)
values ('$usname','$psw')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
