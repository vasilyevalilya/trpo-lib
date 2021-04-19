<?php

use PHPUnit\Framework\TestCase;
use Abbdinvasilyeva\MyLog;

class MyLogTest extends TestCase {
    public function testLog() {
        $this->expectOutputString("Hello!\n");
        MyLog::log("Hello!");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}