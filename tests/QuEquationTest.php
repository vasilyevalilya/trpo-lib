<?php

use PHPUnit\Framework\TestCase;
use Abbdinvasilyeva\QuEquation;
use Abbdinvasilyeva\AbbdinvasilyevaException;

class QuEquationTest extends TestCase {
    public function testSolve() {
        $test = new QuEquation();

        $this->assertEquals([3, -2], $test->solve(1, -1, -6));
        $this->assertEquals([3, -2.5], $test->solve(2, -1, -15));

        // a = 0
        $this->assertEquals([4], $test->solve(0, 25, -100));
        // D = 0
        $this->assertEquals([-3], $test->solve(1, 6, 9));
        // D < 0
        $this->expectException(AbbdinvasilyevaException::class);
        $test->solve(2, 4, 7);
    }
}