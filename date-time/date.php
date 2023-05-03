<?php
echo date("d M Y")."\n";
print_r(getdate());echo" "."\n";
$datetime = new DateTime();
$Year = '2023';
$Month = '01';
$Day = '01';
$datetime->setDate($Year, $Month, $Day);
echo $datetime->format('Y-m-d')."\n";
echo time()."\n";
var_dump(checkdate(12, 33, 3636));
?>