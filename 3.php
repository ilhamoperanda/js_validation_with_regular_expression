<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JavaScript Regular expression to valid an email address</title>
</head>
<body>
</body>
</html>
<!-- JavaScript Code : -->
<script type="text/javascript">
	
function valid_email(str)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(mailformat.test(str))
{  
console.log("Valid email address!");  
}  
else  
{  
console.log("You have entered an invalid email address!");  
}
}

valid_email('me-info@example.com');
</script>