<?php

use Zend\ServiceManager\ServiceManager;

trait ServiceManagerProvider
{
    protected $serviceManager;

    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}


