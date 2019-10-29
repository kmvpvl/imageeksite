<!DOCTYPE html>
<html lang="ru">
<?php
include "header.php";
?>
<body>
<?php
include "btmenu.php";
?>

<div id="content-div">


</div>
<script>
$(document).ready(function() {
	$(window).resize();
})

$(window).resize(function() {
	$('#content-div').css('height', $(window).height()-$('#content-div').offset().top);
})

</script>
</body>
<?php
include "footer.php";
?>
</html>