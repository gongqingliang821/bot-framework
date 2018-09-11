<?php
$configDir = getcwd() . '/config';
if(! is_dir($configDir)){
    @mkdir($configDir, 0777, true);
}
$configPath = __DIR__ . '/src/config/conf.php';
$cpConfigCmd = 'cp ' . $configPath . ' ' . $configDir;
exec($cpConfigCmd, $ret, $retCode);
if ($retCode) {
    echo json_encode($ret);
}

$cpIndexCmd = 'cp ' . __DIR__ . '/index.php' . ' ' . getcwd();
exec($cpIndexCmd, $ret, $retCode);
if ($retCode) {
    echo json_encode($ret);
}

