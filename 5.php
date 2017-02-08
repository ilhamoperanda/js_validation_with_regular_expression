<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Trim function using regular expression</title>
</head>
<body>
</body>
</html>
JavaScript Code :

function Trim(str)
{
  var result;
  if (typeof str === 'string') 
  {
    result = str.replace(/^\s+|\s+$/g, '');
    return result;
  }
  else
  {
    return false;
  }
}