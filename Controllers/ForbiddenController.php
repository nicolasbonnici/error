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
class ForbiddenController extends HomeController
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
        if (! empty($this->_params['redirect'])) {
            $this->_view['sRedirectUrl'] = $this->decodeRedirectUrl($this->_params['redirect']);
        }
        
        $this->render('forbidden/index.tpl');
    }
    
    // @todo 404,301,302 errors methods....
}

?>
