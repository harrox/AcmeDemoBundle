<?php

namespace Acme\DemoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeDemoBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}