<?php
include "dbconnr.php";

$sql = "SELECT * FROM `chronos` left join modules on modules.uid=chronos.module_uid where outlinenumber like '" . $_GET['id'] .  "' order by sorting asc, chronos.uid asc";
//echo $sql;
$rs = mysql_query($sql,$conn) or die(mysql_error());
$row1 = mysql_fetch_assoc($rs);
//echo $row1["remark"];
?>
<div class="jumbotron text-center">
  <h1><?=$row1["outlinenumber"]?> <?=$row1["modulename"]?><?=((!is_null($row1["remark"]))? "*" : "")?></h1>
  <p>Из раздела "<?=$row1["chaptername"]?>"<br><?=$row1["tags"]?></p> 
  <?=((!is_null($row1["remark"]))? ("<small>*(" . $row1["remark"] . ")</small>") : "")?>
</div>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-4">
      <h3>Время</h3>
    </div>
    <div class="col-8">
      <h3>Тема</h3>
    </div>
<?php
do {
?>
    <div class="col-4">
      <p><?=$row1["duration"]?></p>
    </div>
    <div class="col-8">
      <p><?=$row1["description"]?></p>
    </div>
<?php
} while ($row1 = mysql_fetch_assoc($rs));
?>
 </div>
<?php
include "btmenuscript.php"; 
?>
</div>
<?php
include "dbclose.php";
?>