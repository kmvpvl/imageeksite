<?php
include "dbconnr.php";

$sql = "SELECT * FROM  `chronos` LEFT JOIN modules ON modules.uid = chronos.module_uid ORDER BY outlinenumber ASC , chronos.uid ASC";
//echo $sql;
$rs = mysql_query($sql,$conn) or die(mysql_error());

$i = 1;
$chaptername = "";
$modulename = "";
$closeddivtag = false;
?>
 <div style="padding-top:30px;padding-bottom:30px;" class="container-fluid bg-info">
<?php
while ($row1 = mysql_fetch_assoc($rs)){ 
if ($row1["chaptername"] != $chaptername) {
    $chaptername = $row1["chaptername"]; 
    if ($i > 1) {
        $closeddivtag = true;
    ?>
    </div>
    <?php
    }
?>
<h2 style="margin-top:30px;"><?=$row1["chaptername"]?></h2> 
<?php
}

?>
<?php
if ($row1["modulename"] != $modulename) {
    $modulename = $row1["modulename"];
    if ($i > 1 && !$closeddivtag) {
    ?>
    </div>
    <?php
    }
?>
<div module="<?=$i?>" style="cursor:pointer;">
<h5 module="<?=$i?>" style="color:white;"><span module="<?=$i?>" class="fas fa-file"></span>
<?=$row1["outlinenumber"]?> <?=$row1["modulename"]?><?=((!is_null($row1["remark"]))? "*" : "")?></h5>
<h6 module="<?=$i?>"><?=$row1["tags"]?></h6> 
<h6 module="<?=$i?>"><?=((!is_null($row1["remark"]))? ("<small>*(" . $row1["remark"] . ")</small>") : "")?></h6>
<?php
$closeddivtag = false;
}
?>
<p style="border:1px;"><?=$row1["duration"]?> - <?=$row1["description"]?></p>
<?php
  $i = $i + 1;
}
?>    
</div>
</div>
<?php
include "btmenuscript.php"; 
?>
<script>
$("p").css("display", "none");
$("[module]").on("click", function (event){
//    alert(event.target.attributes.getNamedItem("module"));
    $("p").css("display", "none");
    $("[module='" + event.target.getAttribute("module") + "'] > p").show();
})
</script>
<?php
include "dbclose.php";
?>
