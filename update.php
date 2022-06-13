<?php
include("./dbcon.php");

$no = $_GET["no"];

$sql = "SELECT * FROM member where sno=".$no;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $numprt = $row["snum"];
    $nameprt = $row["sname"];
    $majorprt = $row["smajor"];
    $addrprt = $row["saddr"];

  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자동차정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
  <input type="hidden" name = "no" value="<?php echo $no; ?>">
<div>
자동차 번호<input type="text" name="num" value='<?php echo $numprt; ?>'>
</div>
<div>
소유자<input type="text" name="name"value='<?php echo $nameprt; ?>'>
</div>
<div>
가격
<input type="radio" name="major" value="1천만원~3천만원"<?php if($majorprt =="1천만원~3천만원") echo "checked";?>  >1천만원~3천만원
<input type="radio" name="major" value="4천만원~7천만원"<?php if($majorprt =="4천만원~7천만원") echo "checked";?>  >4천만원~7천만원
<input type="radio" name="major" value="8천만원~1억"<?php if($majorprt =="8천만원~1억") echo "checked";?> >8천만원~1억 
<input type="radio" name="major" value="2억~"<?php if($majorprt =="2억~") echo "checked";?> >2억~ <br>
</div>
<div>
국산차
<select name="addr">
    <option value="그랜저"<?php if($addrprt =="그랜저") echo "selected";?> >그랜저</option>
    <option value="아반떼"<?php if($addrprt =="아반떼") echo "selected";?> >아반떼</option>
    <option value="제네시스"<?php if($addrprt =="제네시스") echo "selected";?> >제네시스</option>
    <option value="싼타페"<?php if($addrprt =="싼타페") echo "selected";?> >싼타페</option>
    <option value="벤츠"<?php if($addrprt =="벤츠") echo "selected";?> >벤츠</option>
    <option value="아우디"<?php if($addrprt =="아우디") echo "selected";?> >아우디</option>
    <option value="BMW"<?php if($addrprt =="BMW") echo "selected";?> >BMW</option>
    <option value="페라리"<?php if($addrprt =="페라리") echo "selected";?> >페라리</option>
  </select>
</div>

</div>
<input type="submit" value="수정">
</form>

</body>
</html> 