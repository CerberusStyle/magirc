<?php
// $Id$

#$denora_version = @$admin->denora->getVersion('num');
if (!@$denora_version) {
	$denora_version = "unknown";
}

$version = array(
        'denora' => $denora_version,
        'php' => phpversion(),
        'sql_client' => @mysqli_get_client_info()
);

$admin->tpl->assign('setup', file_exists('../setup/'));
$admin->tpl->assign('version', $version);

$admin->tpl->display('home.tpl');

?>