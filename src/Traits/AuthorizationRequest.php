<?php

namespace Cdvedia\Irsfa\Traits;

use Cdvedia\Irsfa\Exceptions\AuthenticationFailed;

/**
 * Trait AuthorizationRequest
 */
trait AuthorizationRequest
{
    use OAuthToken;

    /**
     * Make Http request with Authorization
     */
    protected function makeAuthorizationRequest($http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $this->oauthToken();

        $headers = array_merge($headers, $this->authorizationRequestHeaders($this->getToken()));

        return $this->makeRequest($http, $url, $params, $headers, $responseType);
    }

    /**
     * Make Multi-Part Http request with Authorization
     */
    protected function makeAuthorizationMultipartRequest($field, $file_content, $http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $this->oauthToken();

        $headers = array_merge($headers, $this->authorizationRequestHeaders($this->getToken()));

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
}

