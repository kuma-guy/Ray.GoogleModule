<?php
/**
 * This file is part of the Ray.GoogleModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\GoogleModule;

use Doctrine\Common\Annotations\AnnotationReader;
use Ray\Di\AbstractModule;
use Ray\Di\Scope;

class GoogleModule extends AbstractModule
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    protected function configure()
    {
        // Ignore visible annotation in Google_Client
        AnnotationReader::addGlobalIgnoredName('visible');

        $this->bind(GoogleClientInterface::class)->in(Scope::SINGLETON);
        $this->bind(GoogleClientInterface::class)->toConstructor(\Google_Client::class, 'config=google_config');
        $this->bind()->annotatedWith('google_config')->toInstance($this->config);
    }
}
