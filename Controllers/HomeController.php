<?php
namespace bundles\error\Controllers;

use Library\Core\Http;

/**
 * ErrorController
 *
 * Manage HTTP error redirection
 *
 * @author niko <nicolasbonnici@gmail.com>
 */
class HomeController extends \Library\Core\Controller
{

    /**
     *
     * @todo defined class constant pour http error codes
     */
    public function __preDispatch()
    {
    	$oHttp = new Http();
    }

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->oView->render($this->aView, 'home/index.tpl');
    }
}

?>
