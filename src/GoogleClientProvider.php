<?php
/**
 * This file is part of the Ray.GoogleModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\GoogleModule;

use Ray\Di\ProviderInterface;

class GoogleClientProvider implements ProviderInterface
{
    public function get()
    {
        $client = new \Google_Client();

        return $client;
    }
}
