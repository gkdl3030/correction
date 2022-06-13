<?php
include("./dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자동차목록</title>
</head>
<body>
<?php
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $no = $row["sno"];
    ?>
    <a href="./delete.php?no=<?php echo $no;?>">삭제</a>
    <?php
    echo "자동차번호 :" . $row["snum"]." 소유자:". $row["sname"] . " 가격 :". $row["smajor"] . " 차 종류 :". $row["saddr"];
  ?>
  <a href="./update.php?no=<?php echo $no;?>">수정</a>
  <br>
  <?php  
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<div>
<a href="./input.php">자동차정보입력</a>
</div>



</body>
</html> 