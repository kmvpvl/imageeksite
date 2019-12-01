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
    
    $warnsize = dirsize("../")/1024/1024;
    
    echo "Сегодня - ".date("d F Y")."<br>";
    echo "Текущее время - ".date("H:i:s")."<br>";
    echo "Место на диске - " . disk_free_space(".")/1024/1024 . "<br>";
    echo "Текущий каталог - " . getcwd() . "<br>";
    echo "Размер папки - " . $warnsize . "<br>";
    if ($warnsize > 20) {
    	$msg = "Warning disk size Appletec hosting \n";
    	$msg .= "Data folder's size " . $warnsize . "\n";
    	$sbjct = "WARNING: disk size";
    	$headers = 'From: s-home.alarm@s-ho.me' . "\r\n" .
    		'Reply-To: s-home.alarm@s-ho.me' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
    	mail("kmvpvl@gmail.com", $sbjct, $msg, $headers); 
    }
?>