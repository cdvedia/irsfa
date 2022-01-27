<?php

namespace Cdvedia\Irsfa\Traits;

use Cdvedia\Irsfa\Exceptions\AuthenticationFailed;

/**
 * Trait OAuthToken
 */
trait OAuthToken
{
    use Request;

    private $token;
    private $client_id;
    private $client_secret;

    /**
     * Authentication OAuth2.0
     * @see https://developer.irsfa.id/documentation/?php#oauth20
     */
    protected function oauthToken()
    {
        if ($this->getBaseUrl() == null) {
            # default from config
            $this->setBaseUrl(config('irsfa.base_url'));
        }
        
        $json = $this->makeRequest("post", "/oauth/token", $this->oauthTokenParams());

        if (isset($json['error'])) {
            throw new AuthenticationFailed($json['message']);
        }

        $token = $this->getJsonResponse($json, 'access_token');
        $this->setToken($token);

        return $token;
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
        return $this->client_id;
    }

    /**
     * Get the client secret
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Set the client id
     */
    public function setClientId($value = "")
    {
        $this->client_id = $value ;
    }

    /**
     * Set the client secret
     */
    public function setClientSecret($value = "")
    {
        $this->client_secret = $value;
    }

    /**
     * Get oauth params
     */
    public function oauthTokenParams()
    {
        if ($this->getClientId() == null) {
            $this->setClientId(config('irsfa.client_id'));
        }
        if ($this->getClientSecret() == null) {
            $this->setClientSecret(config('irsfa.client_secret'));
        }

        return [
            "grant_type" => "client_credentials",
            "client_id" => $this->getClientId(),
            "client_secret" => $this->getClientSecret(),
            "scope" => null,
        ];
    }
}
