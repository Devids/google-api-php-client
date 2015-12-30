<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Analytics;
use Google\GoogleClient;
use Google\GoogleCollection;
use Google\GoogleService;
use Google\Model;
use Google\Service\Resource;

/**
 * Service definition for Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/analytics/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Analytics extends GoogleService
{
  /** View and manage your Google Analytics data. */
  const ANALYTICS =
      "https://www.googleapis.com/auth/analytics";
  /** Edit Google Analytics management entities. */
  const ANALYTICS_EDIT =
      "https://www.googleapis.com/auth/analytics.edit";
  /** Manage Google Analytics Account users by email address. */
  const ANALYTICS_MANAGE_USERS =
      "https://www.googleapis.com/auth/analytics.manage.users";
  /** View Google Analytics user permissions. */
  const ANALYTICS_MANAGE_USERS_READONLY =
      "https://www.googleapis.com/auth/analytics.manage.users.readonly";
  /** Create a new Google Analytics account along with its default property and view. */
  const ANALYTICS_PROVISION =
      "https://www.googleapis.com/auth/analytics.provision";
  /** View your Google Analytics data. */
  const ANALYTICS_READONLY =
      "https://www.googleapis.com/auth/analytics.readonly";

  public $data_ga;
  public $data_mcf;
  public $data_realtime;
  public $management_accountSummaries;
  public $management_accountUserLinks;
  public $management_accounts;
  public $management_customDataSources;
  public $management_customDimensions;
  public $management_customMetrics;
  public $management_experiments;
  public $management_filters;
  public $management_goals;
  public $management_profileFilterLinks;
  public $management_profileUserLinks;
  public $management_profiles;
  public $management_segments;
  public $management_unsampledReports;
  public $management_uploads;
  public $management_webPropertyAdWordsLinks;
  public $management_webproperties;
  public $management_webpropertyUserLinks;
  public $metadata_columns;
  public $provisioning;


    /**
     * Constructs the internal representation of the Analytics service.
     *
     * @param GoogleClient $client
     */
  public function __construct(GoogleClient $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'analytics/v3/';
    $this->version = 'v3';
    $this->serviceName = 'analytics';

    $this->data_ga = new AnDataGaResource(
        $this,
        $this->serviceName,
        'ga',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'data/ga',
              'httpMethod' => 'GET',
              'parameters' => array(
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'start-date' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'end-date' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'metrics' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dimensions' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'segment' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'samplingLevel' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'output' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->data_mcf = new DataMcfResource(
        $this,
        $this->serviceName,
        'mcf',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'data/mcf',
              'httpMethod' => 'GET',
              'parameters' => array(
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'start-date' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'end-date' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'metrics' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dimensions' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'samplingLevel' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->data_realtime = new DataRealtime(
        $this,
        $this->serviceName,
        'realtime',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'data/realtime',
              'httpMethod' => 'GET',
              'parameters' => array(
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'metrics' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dimensions' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->management_accountSummaries = new ManagementAccountSummaries(
        $this,
        $this->serviceName,
        'accountSummaries',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/accountSummaries',
              'httpMethod' => 'GET',
              'parameters' => array(
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_accountUserLinks = new ManagementAccountUserLinks(
        $this,
        $this->serviceName,
        'accountUserLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_accounts = new ManagementAccounts(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_customDataSources = new ManagementCustomDataSources(
        $this,
        $this->serviceName,
        'customDataSources',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_customDimensions = new ManagementCustomDimensions(
        $this,
        $this->serviceName,
        'customDimensions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDimensions/{customDimensionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDimensionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDimensions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDimensions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDimensions/{customDimensionId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDimensionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ignoreCustomDataSourceLinks' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDimensions/{customDimensionId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDimensionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ignoreCustomDataSourceLinks' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->management_customMetrics = new ManagementCustomMetrics(
        $this,
        $this->serviceName,
        'customMetrics',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customMetrics/{customMetricId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customMetricId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customMetrics',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customMetrics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customMetrics/{customMetricId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customMetricId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ignoreCustomDataSourceLinks' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customMetrics/{customMetricId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customMetricId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ignoreCustomDataSourceLinks' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->management_experiments = new ManagementExperiments(
        $this,
        $this->serviceName,
        'experiments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_filters = new ManagementFilters(
        $this,
        $this->serviceName,
        'filters',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/filters/{filterId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/filters/{filterId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/filters',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/filters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/filters/{filterId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/filters/{filterId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_goals = new ManagementGoals(
        $this,
        $this->serviceName,
        'goals',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'goalId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'goalId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'goalId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_profileFilterLinks = new ManagementProfileFilterLinks(
        $this,
        $this->serviceName,
        'profileFilterLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_profileUserLinks = new ManagementProfileUserLinks(
        $this,
        $this->serviceName,
        'profileUserLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_profiles = new ManagementProfiles(
        $this,
        $this->serviceName,
        'profiles',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_segments = new ManagementSegments(
        $this,
        $this->serviceName,
        'segments',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/segments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_unsampledReports = new ManagementUnsampledReports(
        $this,
        $this->serviceName,
        'unsampledReports',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/unsampledReports/{unsampledReportId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'unsampledReportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/unsampledReports',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/unsampledReports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_uploads = new ManagementUploads(
        $this,
        $this->serviceName,
        'uploads',
        array(
          'methods' => array(
            'deleteUploadData' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/deleteUploadData',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads/{uploadId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'uploadId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'uploadData' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_webPropertyAdWordsLinks = new ManagementWebPropertyAdWordsLinks(
        $this,
        $this->serviceName,
        'webPropertyAdWordsLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyAdWordsLinkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyAdWordsLinkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyAdWordsLinkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyAdWordsLinkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_webproperties = new ManagementWebproperties(
        $this,
        $this->serviceName,
        'webproperties',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_webpropertyUserLinks = new ManagementWebpropertyUserLinks(
        $this,
        $this->serviceName,
        'webpropertyUserLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->metadata_columns = new MetadataColumns(
        $this,
        $this->serviceName,
        'columns',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'metadata/{reportType}/columns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportType' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->provisioning = new Provisioning(
        $this,
        $this->serviceName,
        'provisioning',
        array(
          'methods' => array(
            'createAccountTicket' => array(
              'path' => 'provisioning/createAccountTicket',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
