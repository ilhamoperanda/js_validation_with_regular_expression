<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check whether a given value is Canada Post Code or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_caPostalCode(str)
{
 regexp = /^(?!.*[DFIOQU])[A-VXY][0-9][A-Z]\s?[0-9][A-Z][0-9]$/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_caPostalCode("K8V3Y1"));

console.log(is_caPostalCode("K8V 3Y1"));

console.log(is_caPostalCode("Z4V4X1"));