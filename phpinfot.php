<?php
    function dirsize($dir)
    {
      @$dh = opendir($dir);
      $size = 0;
      while ($file = @readdir($dh))
      {
        if ($file != "." and $file != "..") 
        {
          $path = $dir."/".$file;
          if (is_dir($path))
          {
            $size += dirsize($path); // recursive in sub-folders
          }
          elseif (is_file($path))
          {
            $size += filesize($path); // add file
          }
        }
      }
      @closedir($dh);
      return $size;
    }
    
    echo "Сегодня - ".date("d F Y")."<br>";
    echo "Текущее время - ".date("H:i:s")."<br>";
    echo "Место на диске - " . disk_free_space(".")/1024/1024 . "<br>";
    echo "Текущий каталог - " . getcwd() . "<br>";
    echo "Размер папки - " . dirsize("../../../")/1024/1024 . "<br>";
?>