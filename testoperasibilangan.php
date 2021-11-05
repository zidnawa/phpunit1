<?php
 /*require_once "PHPUnit/Framework/TestCase.php";*/
 use PHPUnit\Framework\TestCase;
 
 class testoperasibilangan extends TestCase
 {
 //test penambahan...
 public function testTambah()
 {
 $this->assertEquals(11,5+6);
 }
 //test pengurangan...
 public function testPengurangan()
 {
 $this->assertEquals(-1,5-6);
 }
 }
?>