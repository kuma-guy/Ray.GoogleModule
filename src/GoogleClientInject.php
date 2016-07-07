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
     * @var GoogleClientInterface
     */
    protected $client;

    public function setGoogleClient(GoogleClientInterface $client = null)
    {
        $this->client = $client;
    }
}
