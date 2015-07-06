<?php
namespace Pails\Plugins;

class TestPlugin
{
	static function initialize($app = null) {
		\Pails\Application::log("Loading my plugin");
	}
}