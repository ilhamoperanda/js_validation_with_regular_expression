<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check whether a given value is US zip code or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_usZipCode(str)
{
 regexp = /^[0-9]{5}(?:-[0-9]{4})?$/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_usZipCode("03201-2150"));

console.log(is_usZipCode("7892"));