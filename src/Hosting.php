<?php

namespace Cdvedia\Irsfa;

class Hosting
{
    use Traits\AuthorizationRequest;

    /**
     * Get Hosting Product
     * @see https://developer.irsfa.id/documentation/?php#get-hosting-product
     */
    public function getProduct($params = [])
    {
        $json = $this->makeAuthorizationRequest("get", "/rest/v2/hosting/product", $params);

        return $json;
    }

    /**
     * Create Hosting
     * @see https://developer.irsfa.id/documentation/?php#create-hosting
     */
    public function create($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/hosting/create", $params);

        return $json;
    }

    /**
     * Get Hosting Detail
     * @see https://developer.irsfa.id/documentation/?php#get-hosting-detail
     */
    public function detail($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/hosting/detail", $params);

        return $json;
    }

    /**
     * Suspend Hosting
     * @see https://developer.irsfa.id/documentation/?php#suspend-hosting
     */
    public function suspend($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/hosting/suspend", $params);

        return $json;
    }

    /**
     * Unsuspend Hosting
     * @see https://developer.irsfa.id/documentation/?php#unsuspend-hosting
     */
    public function unsuspend($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/hosting/unsuspend", $params);

        return $json;
    }

    /**
     * Change Password Hosting
     * @see https://developer.irsfa.id/documentation/?php#change-password-hosting
     */
    public function changePassword($params = [])
    {
        $json = $this->makeAuthorizationRequest("put", "/rest/v2/hosting/change-password", $params);

        return $json;
    }
}
