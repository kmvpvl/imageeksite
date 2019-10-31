<?php
include "dbconnr.php";

$sql = "SELECT * FROM  `chronos` LEFT JOIN modules ON modules.uid = chronos.module_uid ORDER BY outlinenumber ASC , chronos.uid ASC";
//echo $sql;
$rs = mysql_query($sql,$conn) or die(mysql_error());

$i = 1;
$chaptername = "";
$modulename = "";
?>
  <div id="accordion">
<?php
while ($row1 = mysql_fetch_assoc($rs)){ 
if ($row1["chaptername"] != $chaptername) {
    $chaptername = $row1["chaptername"]; 
    if ($i > 1) {
    ?>
    
          </div>
    <?php
    }
?>
<h1><?=$row1["chaptername"]?></h1>
<?php
}

?>
<?php
if ($row1["modulename"] != $modulename) {
    $modulename = $row1["modulename"];
    if ($i > 1) {
    ?>
    
            </div>
          </div>
    <?php
    }
?>
<div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse<?=$i?>">

  <?=$row1["outlinenumber"]?> <?=$row1["modulename"]?><?=((!is_null($row1["remark"]))? "*" : "")?>
  <p><?=$row1["tags"]?></p> 
  <?=((!is_null($row1["remark"]))? ("<small>*(" . $row1["remark"] . ")</small>") : "")?>
  
  </a>
      </div>
      <div id="collapse<?=$i?>" class="collapse" data-parent="#accordion">
        <div class="card-body">
<?php
}
?>
      <p><?=$row1["duration"]?> - <?=$row1["description"]?></p>

<?php
  $i = $i + 1;
}
?>    

        </div>
      </div>
    </div>
    </div>
<?php
include "btmenuscript.php"; 
?>

<?php
include "dbclose.php";
?>
