<?php
    echo "Сегодня - ".date("d F Y")."<br>";
    echo "Текущее время - ".date("H:i:s")."<br>";
    echo "Место на диске - " . disk_free_space(".")/1024/1024 . "<br>";
    echo "Текущий каталог - " . getcwd() . "<br>";
?>