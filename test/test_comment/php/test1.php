<?php 
class A {}
class B extends A {	
	function test() {
		
		echo('test');
	}
}
$b = new B();
$b->test();
?>
