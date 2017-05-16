<?php namespace Ascend;

use Ascend\Debug;
use Ascend\CommandLineArguments;

class CommandLine
{
	private $cmdArguments = null;
	
    public static function init()
    {
		$argv = CommandLineArguments::getArgv();
		$cmd = isset($argv[1]) ? $argv[1] : null;
		// 2+ arguments.... figure out later

		$output = '';
		$output.= 'PHP Version: ' . phpversion() . RET;
		$output.= 'Help; command not found!.' . RET;
		$output.= 'Here is a list of commands available:' . RET;

		require_once PATH_COMMANDLINE . '_CommandLineAbstract.php';
		
		$path = PATH_COMMANDLINE;
		$cdir = scandir($path); 
		foreach ($cdir as $key => $value) { 
			if (!in_array($value, array(".", ".."))) { 
				if (
					!is_dir($path . DIRECTORY_SEPARATOR . $value)
					&&
					'_' != substr($value, 0, 1)
				) { 
					$output.= self::getEachModel($cmd, $path, $value);
				}
			} 
		}
		
		echo $output;
		exit;
    }
	
	private static function getEachModel($cmd, $path, $value) {
		$output = '';
		// $output.= 'filename: ' . $path . $value . RET;
		
		require_once $path . $value;
		
		$className = str_replace('.php', '', $value);
		$className = SLASH . 'Ascend' . SLASH . 'CommandLine' . SLASH . $className;
		
		$n = new $className;
		
		if($n->getCommand() == $cmd) {
			$n->run(); exit;
		}
		
		$output.= $n->getCommand() . ' - ' . $n->getName() . RET;
		
		unset($className, $n);
		
		return $output;
	}
}