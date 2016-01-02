<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Auth;
use Google\Client;
use Google\Http\Request;

/**
 * Authentication via built-in Compute Engine service accounts.
 * The instance must be pre-configured with a service account
 * and the appropriate scopes.
 * @author Jonathan Parrott <jon.wayne.parrott@gmail.com>
 */
class ComputeEngine extends AuthAbstract
{
  const METADATA_AUTH_URL =
      'http://metadata/computeMetadata/v1/instance/service-accounts/default/token';
  private $client;
  private $token;

  public function __construct(Client $client, $config = null)
  {
    $this->client = $client;
  }

  /**
   * Perform an authenticated / signed apiHttpRequest.
   * This function takes the apiHttpRequest, calls apiAuth->sign on it
   * (which can modify the request in what ever way fits the auth mechanism)
   * and then calls apiCurlIO::makeRequest on the signed request
   *
   * @param Request $request
   * @return Request The resulting HTTP response including the
   * responseHttpCode, responseHeaders and responseBody.
   */
  public function authenticatedRequest(Request $request)
  {
    $request = $this->sign($request);
    return $this->client->getIo()->makeRequest($request);
  }

  /**
   * @param string $token
   * @throws AuthException
   */
  public function setAccessToken($token)
  {
    $token = json_decode($token, true);
    if ($token == null) {
      throw new AuthException('Could not json decode the token');
    }
    if (! isset($token['access_token'])) {
      throw new AuthException("Invalid token format");
    }
    $token['created'] = time();
    $this->token = $token;
  }

  public function getAccessToken()
  {
    return json_encode($this->token);
  }

  /**
   * Acquires a new access token from the compute engine metadata server.
   * @throws AuthException
   */
  public function acquireAccessToken()
  {
    $request = new Request(
        self::METADATA_AUTH_URL,
        'GET',
        array(
          'Metadata-Flavor' => 'Google'
        )
    );
    $request->disableGzip();
    $response = $this->client->getIo()->makeRequest($request);

    if ($response->getResponseHttpCode() == 200) {
      $this->setAccessToken($response->getResponseBody());
      $this->token['created'] = time();
      return $this->getAccessToken();
    } else {
      throw new AuthException(
          sprintf(
              "Error fetching service account access token, message: '%s'",
              $response->getResponseBody()
          ),
          $response->getResponseHttpCode()
      );
    }
  }

  /**
   * Include an accessToken in a given apiHttpRequest.
   * @param Request $request
   * @return Request
   * @throws AuthException
   */
  public function sign(Request $request)
  {
    if ($this->isAccessTokenExpired()) {
      $this->acquireAccessToken();
    }

    $this->client->getLogger()->debug('Compute engine service account authentication');

    $request->setRequestHeaders(
        array('Authorization' => 'Bearer ' . $this->token['access_token'])
    );

    return $request;
  }

  /**
   * Returns if the access_token is expired.
   * @return bool Returns True if the access_token is expired.
   */
  public function isAccessTokenExpired()
  {
    if (!$this->token || !isset($this->token['created'])) {
      return true;
    }

    // If the token is set to expire in the next 30 seconds.
    $expired = ($this->token['created']
        + ($this->token['expires_in'] - 30)) < time();

    return $expired;
  }
}
