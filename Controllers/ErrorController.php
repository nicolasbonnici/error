<?php
namespace bundles\error\Controllers;

/**
 * ErrorController
 *
 * Common couch for each error bundle controller
 *
 * @author niko <nicolasbonnici@gmail.com>
 */
class ErrorController extends \Library\Core\Controller
{

    /**
     *
     * @todo defined class constant pour http error codes
     */
    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

}

class ErrorControllerException extends \Exception
{

}