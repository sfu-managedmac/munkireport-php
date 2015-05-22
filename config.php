<?php if ( ! defined( 'KISS' ) ) exit;
	// Path to Docker persistent storage directory, with trailing slash
	$conf['common_storage_path'] = "/appdata";
	$conf['pdo_dsn'] = 'sqlite:'.$conf['common_storage_path'].'/db.sqlite';
	$conf['auth']['auth_sfu'] = array();

	foreach (glob($conf['application_path']."/lib/SFU/CAS/*.php") as $filename)
	{
		include $filename;
	}
?>