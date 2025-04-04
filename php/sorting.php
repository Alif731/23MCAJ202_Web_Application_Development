<?php
$students = array("John", "Alice", "Michael", "Sophie", "David");

//original array
echo "Original Array:<br>";
print_r($students);
echo "<br><br>";

//asort()
asort($students);
echo "Array sorted in Ascending Order (asort):<br>";
print_r($students);
echo "<br><br>";

//  arsort()
arsort($students);
echo "Array sorted in Descending Order (arsort):<br>";
print_r($students);
?>
