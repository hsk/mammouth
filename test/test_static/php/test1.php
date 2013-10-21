<?php 
class A {	
	function __construct($prm) {
		echo('a construct '.$prm.''."\n".'');
	}
}
class B extends A {	
	function __construct() {
		parent::__construct('test');
		echo('b construct'."\n".'');
	}
	const A = 'a';
	function test() {
		
		echo('test'.B::A.''."\n".'');
	}
	static function st() {
		var_export(self::$stvalue);
		echo(''."\n".'');
	}
	static $stvalue = array('a', 'b');
}
$b = new B();
$b->test();
B::st();
echo('const '.B::A.''."\n".'');
echo('static '.B::$stvalue.''."\n".'');
?>
