<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "rlmp_language_detection".
 *
 * Auto generated 13-05-2013 18:33
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Language Detection',
	'description' => 'This plugin detects the visitor\'s preferred language and sets the local configuration for TYPO3\'s language engine accordingly. Both, one-tree and multiple tree concepts, are supported. It can also select from a list of similar languages if the user\'s preferred language does not exist.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.3.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Joachim Mathes',
	'author_email' => 't3extensions@punkt.de',
	'author_company' => 'punkt.de GmbH',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '3.0.0-0.0.0',
			'typo3' => '4.0.0-0.0.0',
		),
		'conflicts' => '',
		'suggests' => 
		array (
		),
	),
);

?>