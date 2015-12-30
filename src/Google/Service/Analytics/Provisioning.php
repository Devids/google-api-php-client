<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:38 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "provisioning" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $provisioning = $analyticsService->provisioning;
 *  </code>
 */
class Provisioning extends Resource {

    /**
     * Creates an account ticket. (provisioning.createAccountTicket)
     *
     * @param Google_AccountTicket $postBody
     * @param array $optParams Optional parameters.
     * @return AccountTicket
     */
    public function createAccountTicket(AccountTicket $postBody, $optParams = array()) {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('createAccountTicket', array($params), "AccountTicket");
    }
}