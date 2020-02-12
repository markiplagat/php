<?php ?>
<form action="checkboxes.php" method="post">
Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
Student: <input type="text"name="student">
<input type="submit">
</form>
<?php
$grades=array("jim"=>"A","tom"=>"B");
echo $grades[$_POST["student"]];
$fruits= $_POST["fruits"];
?>