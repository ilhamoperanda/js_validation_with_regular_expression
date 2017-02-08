<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check a given value contains alpha, dash and underscore</title>
</head>
<body>

</body>
</html>
<!-- JavaScript Code : -->
<script type="text/javascript">
  
function is_alphaDash(str)
{
 regexp = /^[a-z0-9_\-]+$/i;
  
        if (regexp.test(str))
          {
            return true;
          }
        else
          {
            return false;
          }
}

console.log(is_alphaDash('12-133'));

console.log(is_alphaDash('100_23'));
</script>