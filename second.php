<?php
$age = 20;

if ($age > 18) {
	
	echo "Come in, we have booze";
	
}
else {
	echo "get out";
}

?>

<br>

<?php

//for (1;2;3) {sisu}

for ($i = 0; $i < $age; $i = $i + 1) {
 echo $i."happy ";
 
}
echo "birthday!";





?>

<br>

<?php

echo date("H:i:s l dS F Y");





?>