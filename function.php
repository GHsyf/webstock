<?php
//统计在线人数
function clearDir($dir)
{
    $n = 0;
    if ($dh = opendir($dir))
    {
        while (($file = readdir($dh)) !== false)
        {
            if ($file == '.' or $file == '..')
            {
                continue;
            }
            if (is_file($dir . $file)) {
                $n++;
            }
        }
    }
    closedir($dh);
    return $n;
}

//通知在线的人
function notice($dir){
    if ($dh = opendir($dir))
    {
        while (($file = readdir($dh)) !== false)
        {
            if ($file == '.' or $file == '..')
            {
                continue;
            }
            if (is_file($dir . $file)) {
                $array[]=file_get_contents($dir.$file);
            }
        }
    }
    closedir($dh);
    return $array;
}