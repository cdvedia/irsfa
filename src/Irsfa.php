<?php

namespace Cdvedia\Irsfa;

use Illuminate\Support\Facades\Http;

class Irsfa
{
    public $baseUrl;
    private $token;

    public function __construct()
    {
        $this->setBaseUrl();
        $this->oauthToken();
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
     * Create Registrant / Create Contact
     * @see https://developer.irsfa.id/documentation/?php#create-registrant--create-contact
     */
    public function createContact($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/registrant/create", $params);

        return $json;
    }
    
    /**
     * Get Contact/Registrant List
     * @see https://developer.irsfa.id/documentation/?php#get-contactregistrant-list
     */
    public function getContact($params = [])
    {
        $json = $this->makeAuthorizationRequest("get", "/rest/v2/registrant", $params);

        return $json;
    }

    /**
     * Get access token
     */
    public function getToken()
    {
        return $this->token;
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
     * 
     */
    private function oauthToken()
    {
        $json = $this->makeRequest("post", "/oauth/token", $this->oauthTokenParams());

        if (isset($json['error'])) {
            throw new Exceptions\AuthenticationFailed($json['message']);
        }

        $token = $this->getJsonResponse($json, 'access_token');
        $this->setToken($token);

        return $token;
    }

    /**
     * Make Http request
     */
    private function makeRequest($http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $response = Http::withHeaders($headers)->{$http}($this->baseUrl.$url, $params);
        
        return $response->{$responseType}();
    }

    /**
     * Make Http request with Authorization
     */
    private function makeAuthorizationRequest($http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $headers = array_merge($headers, $this->authorizationRequestHeaders($this->token));

        return $this->makeRequest($http, $url, $params, $headers, $responseType);
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
     * Get authorization data
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
