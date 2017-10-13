<?php

class autoload {
	function load($folder,$type) {
		$files = glob("{$folder}/*.php");
		$count = count($files);
		switch($type) {
			case "include" :
			for($x=0;$x < $count;$x++) {
				include("$files[$x]");
			}
			break;
			
			case "require":
			for($x=0;$x < $count;$x++) {
				require("$files[$x]");
			}
			break;
			
			case "include_once":
			for($x=0;$x < $count;$x++) {
				include_once("$files[$x]");
			}
			break;
			
			case "require_once":
			for($x=0;$x < $count;$x++) {
				require_once("$files[$x]");
			}
		}
	}
}

