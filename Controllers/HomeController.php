<?php

namespace bundles\error\Controllers;

/**
 * ErrorController
 *
 * Manage HTTP error redirection
 *
 * @author niko <nicolasbonnici@gmail.com>
 */
class HomeController extends \Library\Core\Controller {

    /**
     * @todo defined class constant pour http error codes
     */

    public function __preDispatch() {}

    public function __postDispatch() {}

    public function indexAction()
    {
        $this->render('home/index.tpl');
    }

}

?>
