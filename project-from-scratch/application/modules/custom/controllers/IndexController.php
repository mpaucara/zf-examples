<?php

/**
 * Custom module's index controller. You should notice the "Custom" Namespace
 *
 */
class Custom_IndexController extends Zend_Controller_Action
{
    /*
     * This actions is reached via url: http://www.example.com/custom/index/index
     * custom = module name
     * index = controller name
     * index = action name
     * 
     * This kind of route is defined in the application Bootstrap in the _initSiteRoutes()
     */
    public function indexAction()
    {
        $this->view->message = "Hello Custom World!";
    }
}
