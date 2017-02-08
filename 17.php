<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check whether a given value is hexcolor value or not.</title>
</head>
<body>

</body>
</html>
<!-- JavaScript Code : -->
<script type="text/javascript">
  
function is_hexcolor(str)
{
 regexp = /^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_hexcolor("#444"));

console.log(is_hexcolor("#3333"));
</script>