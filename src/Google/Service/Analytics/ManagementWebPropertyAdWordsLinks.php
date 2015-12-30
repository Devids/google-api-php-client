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
 * The "webPropertyAdWordsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webPropertyAdWordsLinks = $analyticsService->webPropertyAdWordsLinks;
 *  </code>
 */
class ManagementWebPropertyAdWordsLinks extends Resource {

    /**
     * Deletes a web property-AdWords link. (webPropertyAdWordsLinks.delete)
     *
     * @param string $accountId ID of the account which the given web property
     * belongs to.
     * @param string $webPropertyId Web property ID to delete the AdWords link for.
     * @param string $webPropertyAdWordsLinkId Web property AdWords link ID.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns a web property-AdWords link to which the user has access.
     * (webPropertyAdWordsLinks.get)
     *
     * @param string $accountId ID of the account which the given web property
     * belongs to.
     * @param string $webPropertyId Web property ID to retrieve the AdWords link
     * for.
     * @param string $webPropertyAdWordsLinkId Web property-AdWords link ID.
     * @param array $optParams Optional parameters.
     * @return EntityAdWordsLink
     */
    public function get($accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "EntityAdWordsLink");
    }

    /**
     * Creates a webProperty-AdWords link. (webPropertyAdWordsLinks.insert)
     *
     * @param string $accountId ID of the Google Analytics account to create the
     * link for.
     * @param string $webPropertyId Web property ID to create the link for.
     * @param Google_EntityAdWordsLink $postBody
     * @param array $optParams Optional parameters.
     * @return EntityAdWordsLink
     */
    public function insert($accountId, $webPropertyId, EntityAdWordsLink $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "EntityAdWordsLink");
    }

    /**
     * Lists webProperty-AdWords links for a given web property.
     * (webPropertyAdWordsLinks.listManagementWebPropertyAdWordsLinks)
     *
     * @param string $accountId ID of the account which the given web property
     * belongs to.
     * @param string $webPropertyId Web property ID to retrieve the AdWords links
     * for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of webProperty-AdWords links to
     * include in this response.
     * @opt_param int start-index An index of the first webProperty-AdWords link to
     * retrieve. Use this parameter as a pagination mechanism along with the max-
     * results parameter.
     * @return EntityAdWordsLinks
     */
    public function listManagementWebPropertyAdWordsLinks($accountId, $webPropertyId, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "EntityAdWordsLinks");
    }

    /**
     * Updates an existing webProperty-AdWords link. This method supports patch
     * semantics. (webPropertyAdWordsLinks.patch)
     *
     * @param string $accountId ID of the account which the given web property
     * belongs to.
     * @param string $webPropertyId Web property ID to retrieve the AdWords link
     * for.
     * @param string $webPropertyAdWordsLinkId Web property-AdWords link ID.
     * @param Google_EntityAdWordsLink $postBody
     * @param array $optParams Optional parameters.
     * @return EntityAdWordsLink
     */
    public function patch($accountId, $webPropertyId, $webPropertyAdWordsLinkId, EntityAdWordsLink $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "EntityAdWordsLink");
    }

    /**
     * Updates an existing webProperty-AdWords link.
     * (webPropertyAdWordsLinks.update)
     *
     * @param string $accountId ID of the account which the given web property
     * belongs to.
     * @param string $webPropertyId Web property ID to retrieve the AdWords link
     * for.
     * @param string $webPropertyAdWordsLinkId Web property-AdWords link ID.
     * @param Google_EntityAdWordsLink $postBody
     * @param array $optParams Optional parameters.
     * @return EntityAdWordsLink
     */
    public function update($accountId, $webPropertyId, $webPropertyAdWordsLinkId, EntityAdWordsLink $postBody, $optParams = array()) {
        $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "EntityAdWordsLink");
    }
}