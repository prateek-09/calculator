<?php
	
	require ('../src/Calculator.php');
	
	class totalInterestTest extends \PHPUnit_Framework_TestCase {
	
		public function testTotalInterest() {
			$a = new Calculator(100,10,1);
			$result = $a->totalInterest();
			$this->assertEquals(10,$result);
		}

	}
?>