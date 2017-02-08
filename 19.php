<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to check whether a given value is html or not.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_html(str)
{
 regexp = /<([a-z]+) *[^/]*?>/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_html(''));

console.log(is_html(''));

console.log(is_html('.selector'));