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
 * The "webproperties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webproperties = $analyticsService->webproperties;
 *  </code>
 */
class ManagementWebproperties extends Resource {

    /**
     * Gets a web property to which the user has access. (webproperties.get)
     *
     * @param string $accountId Account ID to retrieve the web property for.
     * @param string $webPropertyId ID to retrieve the web property for.
     * @param array $optParams Optional parameters.
     * @return Webproperty
     */
    public function get($accountId, $webPropertyId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Webproperty");
    }

    /**
     * Create a new property if the account has fewer than 20 properties. Web
     * properties are visible in the Google Analytics interface only if they have at
     * least one profile. (webproperties.insert)
     *
     * @param string $accountId Account ID to create the web property for.
     * @param Google_Webproperty $postBody
     * @param array $optParams Optional parameters.
     * @return Webproperty
     */
    public function insert($accountId, Webproperty $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Webproperty");
    }

    /**
     * Lists web properties to which the user has access.
     * (webproperties.listManagementWebproperties)
     *
     * @param string $accountId Account ID to retrieve web properties for. Can
     * either be a specific account ID or '~all', which refers to all the accounts
     * that user has access to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of web properties to include in
     * this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this
     * parameter as a pagination mechanism along with the max-results parameter.
     * @return Webproperties
     */
    public function listManagementWebproperties($accountId, $optParams = array()) {
        $params = array('accountId' => $accountId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Webproperties");
    }

    /**
     * Updates an existing web property. This method supports patch semantics.
     * (webproperties.patch)
     *
     * @param string $accountId Account ID to which the web property belongs
     * @param string $webPropertyId Web property ID
     * @param Google_Webproperty $postBody
     * @param array $optParams Optional parameters.
     * @return Webproperty
     */
    public function patch($accountId, $webPropertyId, Webproperty $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Webproperty");
    }

    /**
     * Updates an existing web property. (webproperties.update)
     *
     * @param string $accountId Account ID to which the web property belongs
     * @param string $webPropertyId Web property ID
     * @param Google_Webproperty $postBody
     * @param array $optParams Optional parameters.
     * @return Webproperty
     */
    public function update($accountId, $webPropertyId, Webproperty $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Webproperty");
    }
}