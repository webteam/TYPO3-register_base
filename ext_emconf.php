<?php

########################################################################
# Extension Manager/Repository config file for ext: "register_base"
#
# Auto generated by Extension Builder 2012-09-11
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Register using extbase',
	'description' => 'Register fe_user with extbase',
	'category' => 'plugin',
	'author' => 'Thomas Allmer',
	'author_email' => 'thomas.allmer@webteam.at',
	'author_company' => 'WEBTEAM GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>