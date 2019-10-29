<!DOCTYPE html>

<html lang="ru"> 
<?php
include "header.php";
?>
<body>
<?php
include "btmenu.php";
?>
<div id="content-div"></div>
<script>

function clearContent(){
	$('#content-div').html('');
}

function loadContent(newContent = "desc.php") {
    if (newContent != _cur_content) {
        _cur_content = newContent;
        clearContent();
        $.get(_cur_content, function(data, status){ 
    		switch (data) {
    			case "":
    				break;
    			default: 
                    $('#content-div').html(data);
    		}
        });
    }
	$('#collapsibleNavbar').collapse('hide');
}

$(document).ready(function() {
<?php
    if (isset($_GET["course"])) {
?>
    loadContent("course.php?id=<?=$_GET["course"]?>"); 
<?php
    } else {
?>
    loadContent();    
<?php
    } 
?>
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