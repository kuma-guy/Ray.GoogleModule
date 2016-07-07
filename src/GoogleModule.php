<?php
/**
 * This file is part of the Ray.GoogleModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\GoogleModule;

use Ray\Di\AbstractModule;
use Ray\Di\Scope;

class GoogleModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind(GoogleClientInterface::class)->toProvider(GoogleClientProvider::class)->in(Scope::SINGLETON);
    }
}
