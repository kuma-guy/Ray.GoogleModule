<?php
/**
 * This file is part of the Ray.GoogleModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\GoogleModule;

trait GoogleClientInject
{
    /**
     * @var Google_Client
     */
    protected $client;

    public function setGoogleClient(\Google_Client $client = null)
    {
        $this->client = $client;
    }
}
