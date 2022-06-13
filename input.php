<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자동차정보입력</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
자동차번호<input type="text" name="num"><br>
</div>
<div>
소유자<input type="text" name="name"><br>
</div>
<div>
가격
<input type="radio" name="major" value="1천만원~3천만원">1천만원~3천만원
<input type="radio" name="major" value="4천만원~7천만원">4천만원~7천만원
<input type="radio" name="major" value="8천만원~1억">8천만원~1억
<input type="radio" name="major" value="2억~">2억~ <br>
</div>
</div>
<div>
국산차
<select name="addr">
    <option value="그랜저">그랜저</option>
    <option value="아반떼">아반떼</option>
    <option value="제네시스">제네시스</option>
    <option value="싼타페">싼타페</option>
    <option value="벤츠">벤츠</option>
    <option value="아우디">아우디</option>
    <option value="BMW">BMW</option>
    <option value="페라리">페라리</option>
  </select>
  
</div>
<input type="submit">
</form>
</body>
</html> 