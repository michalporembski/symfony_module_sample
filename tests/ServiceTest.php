<?php

namespace Tests\MPorembski\SampleModule;

use MPorembski\SampleModule\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testSomething(): void
    {
        $dummyService = new Service();
        $x = $dummyService->foo();
        $this->assertTrue('bar' == $x);
    }
}
