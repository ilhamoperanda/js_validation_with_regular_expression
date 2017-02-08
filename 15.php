<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check whether a given value is A social security number or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_socialSecurity_Number(str)
{
 regexp = /^(?!000|666)[0-8][0-9]{2}-(?!00)[0-9]{2}-(?!0000)[0-9]{4}$/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_socialSecurity_Number("019-90-5680"));

console.log(is_socialSecurity_Number("K8V-3Y1"));