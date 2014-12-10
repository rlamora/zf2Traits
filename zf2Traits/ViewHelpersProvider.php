<?php
namespace Base\Provider;
 
trait ViewHelpersProvider
{
    protected $scriptHelper;
    protected $linkHelper;
    
    public function getScriptHelper()
    {
        if (null === $this->scriptHelper) {
            $this->scriptHelper = $this->getServiceLocator()->get('viewhelpermanager')->get('headScript');
        }
        return $this->scriptHelper;
    }

    public function getHeadlinkHelper()
    {
        if (null === $this->linkHelper) {
            $this->linkHelper = $this->getServiceLocator()->get('viewhelpermanager')->get('headLink');
        }
        return $this->linkHelper;
    }
}