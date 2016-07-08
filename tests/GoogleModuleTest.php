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

    public function testWithConfig()
    {
        $config = [
            'client_id'     => '12345.apps.googleusercontent.com',
            'client_secret' => 'gjfiwnGinpena3',
            'redirect_uri'  => 'http://example.com'
        ];

        $client = (new Injector(new GoogleModule($config)))->getInstance(GoogleClientInterface::class);

        $this->assertSame($config['client_id'], $client->getClientId());
        $this->assertSame($config['client_secret'], $client->getClientSecret());
        $this->assertSame($config['redirect_uri'], $client->getRedirectUri());
    }
}
