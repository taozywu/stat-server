<?php

require '../bootstrap.php';

define('ST_ROOT', ROOT_PATH . 'Applications/Statistics');

require_once ST_ROOT .'/Config/Config.php';

// 覆盖配置文件
foreach(glob(ST_ROOT . '/Config/Cache/*.php')  as $php_file)
{
    require_once $php_file;
}