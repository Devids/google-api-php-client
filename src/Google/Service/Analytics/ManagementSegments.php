<?php
/**
 * Created by PhpStorm.
 * User: devids
 * Date: 12/30/15
 * Time: 2:37 PM
 */
namespace Google\Service\Analytics;
use Google\Service\Resource;

/**
 * The "segments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $segments = $analyticsService->segments;
 *  </code>
 */
class ManagementSegments extends Resource {

    /**
     * Lists segments to which the user has access.
     * (segments.listManagementSegments)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of segments to include in this
     * response.
     * @opt_param int start-index An index of the first segment to retrieve. Use
     * this parameter as a pagination mechanism along with the max-results
     * parameter.
     * @return Segments
     */
    public function listManagementSegments($optParams = array()) {
        $params = array();
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Segments");
    }
}