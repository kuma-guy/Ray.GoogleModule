<?php

namespace Ray\GoogleModule;

use Ray\Di\Injector;

class GoogleModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testModule()
    {
        $client = (new Injector(new GoogleModule()))->getInstance(GoogleClientInterface::class);
        $this->assertInstanceOf(\Google_Client::class, $client);
    }
}
