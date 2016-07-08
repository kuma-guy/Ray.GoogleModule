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
use Ray\GoogleModule\Annotation\GoogleConfig;

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

        $this->bind()->annotatedWith(GoogleConfig::class)->toInstance($this->config);
        $this->bind(GoogleClientInterface::class)->in(Scope::SINGLETON);
        $this->bind(GoogleClientInterface::class)->toConstructor(\Google_Client::class, null);
    }
}
