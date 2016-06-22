<?php
include('load.php');
include('colorized.php');
//print_r($argv);die;
	if(!isset($argv[1]) or $argv[1] == '')
	{
		echo colorize('You should indicate an option. Use -h or --help','FAILURE');
	}
	
	if(isset($argv[1]) and ($argv[1]=="-h" or $argv[1]=="--help"))
	{
		foreach($options as $opt)
		{
			echo colorize('php cacao.php '.$opt['name'],'SUCCESS');
		}
	}
	
	
	
	
	if(isset($argv[1]))
	{
		switch ($argv[1]) {
			case 'generate-module-with-db':
				generateModuleWithDb($argv,$options);
				break;
			case 'generate-module-template':
				generateModuleTemplate($argv,$options);
				break;
			default:
				break;
		}
	}
	
	function generateModuleWithDb($argv,$options)
	{
		$config = $options[$argv[1]];
		if(!isset($argv[2]) or (!in_array($argv[2], $options[$argv[1]]['DB-manager'])) )
		{
			echo colorize('You should indicate an exist DB-manager.','FAILURE');
			print_r($options[$argv[1]]['DB-manager']);
		}
		if(!isset($argv[3]) )
		{
			echo colorize('You should indicate a Database name.','FAILURE');
		}
		if(!isset($argv[4]) )
		{
			echo colorize('You should indicate a Table name.','FAILURE');
		}
		if(isset($argv[5]) and (!in_array($argv[5], $options[$argv[1]]['html5'])))
		{
			echo colorize('You should indicate a valid html5.','FAILURE');
			print_r($options[$argv[1]]['html5']);
		}
	}
	function generateModuleTemplate()
	{
		
	}