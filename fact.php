<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>factorial</title>
</head>
<body>
<?php
function factorial($n)
{
if($n==0)
{
return 1;
}
else
{
return $n*factorial($n-1);
}
}
print_r("factorial of 8 is :\n".factorial(8));
?>
</body>
</html>