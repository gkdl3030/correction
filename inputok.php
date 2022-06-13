<?php
include("./dbcon.php");

$num = $_POST["num"];
$name = $_POST["name"];
$major = $_POST["major"];
$addr = $_POST["addr"];

$sql = "INSERT INTO member (snum, sname, smajor, saddr) VALUES ('$num', '$name', '$major', '$addr')";

// echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "데이터가 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<div>
<a href="./input.php">자동차정보입력</a>
<a href="./list.php">자동차목록</a>
</div>
</div>