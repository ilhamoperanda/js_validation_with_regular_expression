<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check whether a given value is hexadecimal value or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_hexadecimal(str)
{
 regexp = /^[0-9a-fA-F]+$/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_hexadecimal("ffffff"));

console.log(is_hexadecimal("fz5500"));