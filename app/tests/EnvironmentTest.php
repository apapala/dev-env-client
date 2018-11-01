<?php

require __DIR__ . '/../vendor/autoload.php';

class EnvironmentTest extends \PHPUnit\Framework\TestCase {

    public function testMailFunctionReturnsTrue()
    {
        $result = mail("admin@admin.com", "Test mail", "Nice, it looks like it's working.");

        $this->assertTrue($result);
    }
}