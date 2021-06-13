<body>
<center>
<form  method="POST" >
<br><br>
<input type="text" name="string" placeholder="Enter string" value="" /><br><br><br>
<b><label for="string">Choose an option  : </label><br><br></b>
<input type="radio" name="op" value="1"> Reversing the string<br><br>
<input type="radio" name="op" value="2"> Finding the length of the string<br><br>
<input type="radio" name="op" value="3"> Substring operations<br><br>
<input type="radio" name="op" value="4"> Converting to uppercase<br><br>
<input type="radio" name="op" value="5"> Converting to lowercase<br><br>
<input type="radio" name="op" value="6"> Counting the number of words<br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
    if (isset($_POST['submit'])){
         $str = $_POST['string'];
         $choice = $_POST['op'];
         switch($choice)
         {
              case 1 :  $revstr = strrev($str);
                        echo 'Reverse of '.$str. ' is '.$revstr;
                        break;
              case 2 :  $len = strlen($str);
                        echo 'Length of '.$str. ' is '.$len;
                        break;
              case 3 :  $sub = substr($str,1,3);
                        echo 'Substr of '.$str. ' to 1 to 3 is '.$sub;
                        break;
              case 4 : $up = strtoupper($str);
                       echo 'Uppercase of '.$str. ' is '.$up;
                        break;
              case 5 : $low = strtolower($str);
                       echo 'Lowercase of '.$str. ' is '.$low;
                        break;
              case 6 : $word = str_word_count($str);
                       echo 'Number of words in '.$str. ' is '.$word;
                        break;
        }
    }
?>
</center>
</body>