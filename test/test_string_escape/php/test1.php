<?php 
class A {}
class B extends A {	
	function test() {
		echo('test'."\n".'');
	}
}
$b = new B();
$b->test();
?>
