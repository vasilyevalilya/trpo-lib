<?php

use PHPUnit\Framework\TestCase;
use Abbdinvasilyeva\Equation;
use Abbdinvasilyeva\AbbdinvasilyevaException;

class EquationTest extends TestCase {
    public function testLi_solve() {
        $test = new Equation();

        $this->assertEquals([7], $test->li_solve(2, -14));
        $this->assertEquals([-23], $test->li_solve(3, 69));

        $this->expectException(AbbdinvasilyevaException::class);
        $test->li_solve(0, 7);
    }
}