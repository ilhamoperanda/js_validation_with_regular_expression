<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JavaScript Regular expression to check string's first character is uppercase or not</title>
</head>
<body>
</body>
</html>
JavaScript Code :

function upper_case(str)
{
   regexp = /^[A-Z]/;
   if (regexp.test(str))
    {
      console.log("String's first character is uppercase");
    } 
    else
    {
      console.log("String's first character is not uppercase");
    }
}
upper_case('Abcd');
upper_case('abcd');