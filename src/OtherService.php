<?php

namespace MPorembski\SampleModule;

class OtherService
{
    public function __construct(private Service $service)
    {

    }

    public function foo(): string
    {
        return 'bar';
    }

    public function checkService(): bool
    {
        return $this->foo() === $this->service->foo();
    }
}
