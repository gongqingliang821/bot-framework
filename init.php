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

$cpCmd = 'cp ' . __DIR__ . '/index.php' . ' ' . getcwd() . ' && cp ' . __DIR__ . '/install.php ' . getcwd() . ' && cp ' . __DIR__ . '/autoload.php ' . getcwd();
exec($cpCmd, $ret, $retCode);
if ($retCode) {
    echo json_encode($ret);
}

