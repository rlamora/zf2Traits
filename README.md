# Traits for ZF2

This basically a collection of useful traits for Zend Framework 2.
Feel free to contribute by adding yours, if the collection get bigger i'll 
consider making it as a module.

Only work with PHP  5.4+

##Usage

The usage is straightforward if you read the php docs on traits [here](http://php.net/manual/fr/language.oop5.traits.php).
Just don't forget to add your namespaces to the files.

The exception is for the ServiceManagerProvider, you need to implements Zend\ServiceManager\ServiceManagerAwareInterface.

Exemple :

```php

use Zend\ServiceManager\ServiceManagerAwareInterface;
use MyNamespace\ServiceManagerProvider;

class MyClass implements ServiceManagerAwareInterface
{
    use ServiceManagerProvider;
}

```
