<?php
/**
 * This file is part of the Ray.GoogleModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\GoogleModule\Annotation;

use Ray\Di\Di\Qualifier;

/**
 * @Annotation
 * @Target("METHOD")
 * @Qualifier
 */
final class GoogleConfig
{
    public $value;
}
