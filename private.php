<?php
include "dbconnr.php";

$sql = "select sum(summ) as amount, sum(boughtcount) as remain, customers.customername from money left join customers on customers.uid like money.customeruid where customeruid like '" . $_GET["id"] . "'";
//echo $sql;
$rs = mysql_query($sql,$conn) or die(mysql_error());

?>
 <div class="jumbotron text-center">
<?php
$row1 = mysql_fetch_assoc($rs);
echo "<h3>" . $row1["customername"] . "</h3><h5>Осталось занятий: " . $row1["remain"] . "; всего оплачено: " . $row1["amount"] . "&#x20bd;</h5>";
?>
</div>
<?php

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <h3>Приобретено</h3>
    </div>
    <div class="col-6">
      <h3>Израсходовано</h3>
    </div>
    <div class="col-6">
<?php
$sql = "SELECT * FROM `money` where customeruid like '" . $_GET["id"] . "' and boughtcount > 0 order by money.timeoperation DESC";
$rs = mysql_query($sql,$conn) or die(mysql_error());
while ($row1 = mysql_fetch_assoc($rs)) {
?>
      <p><?=date("d.m.y", strtotime($row1["timeoperation"])) . " - занятий: " . $row1["boughtcount"] . "; внесено: " . $row1["summ"]?>&#x20bd;</p>
<?php
}
?>
    </div>
    <div class="col-6">
<?php
$sql = "SELECT * FROM `money` where customeruid like '" . $_GET["id"] . "' and boughtcount < 0 order by money.timeoperation DESC";
$rs = mysql_query($sql,$conn) or die(mysql_error());
while ($row1 = mysql_fetch_assoc($rs)) {
?>
      <p><?=date("d.m.y", strtotime($row1["timeoperation"])) . " - часов израсходовано: " . $row1["boughtcount"]?> </p>
<?php
}
?>    </div>
 </div>
</div>
<?php
include "btmenuscript.php"; 
?>
<script>
</script>
<?php
include "dbclose.php";
?>
