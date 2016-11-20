<?php
	
	require('../src/Calculator.php');
	
	class TotalAmountTest extends \PHPUnit_Framework_TestCase {
	
		public function testTotalAmount() {
			$a = new Calculator(100,10,1);
			$result = $a->totalAmount();
			$this->assertEquals(110,$result);
		}
	}
?>