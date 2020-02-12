<?php ?>
<form action="mine.php" method ="post">
Num1:<input type="number" step="0.0001" name="num1">
<br>OP:<input type="text" name="operator"><br>
Num2:<input type="number"step="0.0001" name="num2"><br>
<input type="submit">
</form>
<?php
$num1=$_POST["num1"];
$op=$_POST["operator"];
$num2=$_POST["num2"];

if($op=="+"){
    echo $num1+$num2;
}
elseif($op=="-"){
    echo $num1-$num2;
}
elseif($op=="/"){
    echo $num1/$num2;
}
elseif($op=="*"){
    echo $num1*$num2;
}
else {
    echo "invalid operator";
}
?>
