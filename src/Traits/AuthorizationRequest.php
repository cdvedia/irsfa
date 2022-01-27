<?php

namespace Cdvedia\Irsfa\Traits;

use Cdvedia\Irsfa\Exceptions\AuthenticationFailed;

/**
 * Trait Request
 */
trait AuthorizationRequest
{
    use Request;

    private $token;

    public function __construct()
    {
        $this->setBaseUrl();
        $this->oauthToken();
    }

    /**
     * Set base url property
     */
    private function setBaseUrl($value = null)
    {
        $this->baseUrl = $value ?? config('irsfa.base_url');
    }

    /**
     * Authentication OAuth2.0
     * @see https://developer.irsfa.id/documentation/?php#oauth20
     */
    protected function oauthToken()
    {
        $json = $this->makeRequest("post", "/oauth/token", $this->oauthTokenParams());

        if (isset($json['error'])) {
            throw new AuthenticationFailed($json['message']);
        }

        $token = $this->getJsonResponse($json, 'access_token');
        $this->setToken($token);

        return $token;
    }

    /**
     * Make Http request with Authorization
     */
    protected function makeAuthorizationRequest($http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $headers = array_merge($headers, $this->authorizationRequestHeaders($this->token));

        return $this->makeRequest($http, $url, $params, $headers, $responseType);
    }

    /**
     * Make Multi-Part Http request with Authorization
     */
    protected function makeAuthorizationMultipartRequest($field, $file_content, $http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $headers = array_merge($headers, $this->authorizationRequestHeaders($this->token));

        return $this->makeMultipartRequest($field, $file_content, $http, $url, $params, $headers, $responseType);
    }

    /**
     * Set authorization data
     */
    public function authorizationRequestHeaders($token)
    {
        return [
            "Authorization" => "Bearer $token",
            "Content-Type" => "application/json",
            "X-Requested-With" => "XMLHttpRequest",
        ];
    }

    /**
     * Get json request
     */
    private function getJsonResponse($json, $key)
    {
        return isset($json[$key]) ? $json[$key] : "";
    }

    /**
     * Set the authorization token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Get access token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Get the client id
     */
    public function getClientId()
    {
        return config('irsfa.client_id');
    }

    /**
     * Get the client secret
     */
    public function getClientSecret()
    {
        return config('irsfa.client_secret');
    }

    /**
     * Get oauth params
     */
    public function oauthTokenParams()
    {
        return [
            "grant_type" => "client_credentials",
            "client_id" => $this->getClientId(),
            "client_secret" => $this->getClientSecret(),
            "scope" => null,
        ];
    }
}

