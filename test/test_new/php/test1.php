<?php 
class A {	
	function b() {
		$this->a();
	}
	function a() {
		echo($this->h.'test'.$this->c());
	}
	var $h = 'a';
	function c() {
		return('555');
	}
}
$a = new A();
$a->b();
?>
