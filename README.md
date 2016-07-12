# Ray.GoogleModule

[![Build Status](https://travis-ci.org/kuma-guy/Ray.GoogleModule.svg?branch=master)](https://travis-ci.org/kuma-guy/Ray.GoogleModule)

## Installation

### Composer install

    $ composer require kuma-guy/google-module
 
### Module install

```php
use Ray\Di\AbstractModule;
use Ray\GoogleModule\GoogleModule;

class AppModule extends AbstractModule
{
    protected function configure()
    {
        $config = [
            'client_id' => 'your-client-id',
            'client_secret' => 'your-client-secret'
        ];
        $this->install(new GoogleModule($config));
    }
}
```

### DI trait

 * [GoogleClientInject](https://github.com/kuma-guy/Ray.GoogleModule/blob/master/src/GoogleClientInject.php) for `Google_Client`
