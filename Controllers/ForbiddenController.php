<?php
namespace bundles\error\Controllers;

use bundles\auth\Controllers\HomeController;

/**
 * ForbiddenController
 *
 * Manage HTTP ForbiddenController error redirection 403
 *
 * @author niko <nicolasbonnici@gmail.com>
 */
class ForbiddenController extends ErrorController
{

    /**
     *
     * @todo defined class constant pour http error codes
     */
    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    /**
     * Forbidden error 403
     */
    public function indexAction()
    {
        if (! empty($this->aParams['redirect'])) {
            $this->aView['sRedirectUrl'] = $this->decodeRedirectUrl($this->aParams['redirect']);
        }

        $this->oView->render($this->aView, 'forbidden/index.tpl');
    }

    // @todo 404,301,302 errors methods....
}

