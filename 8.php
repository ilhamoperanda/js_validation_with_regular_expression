<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Write a JavaScript function to count the number of vowels in a given string</title>
</head>
<body>

</body>
</html>
<!-- JavaScript Code : -->
<script type="text/javascript">
	
function vowel_count(str) {

  return str.match(/[aeiou]/gi).length;

}

console.log(vowel_count('The quick brown fox jumps over the lazy dog'));
</script>