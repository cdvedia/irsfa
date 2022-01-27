<?php

namespace Cdvedia\Irsfa;

class Domain
{
    use Traits\AuthorizationRequest;

    /**
     * Domain Availability
     * @see https://developer.irsfa.id/documentation/#lookup-domain
     */
    public function availability($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/check/availability", $params);

        return $json;
    }
    
    /**
     * Domain Info
     * @see https://developer.irsfa.id/documentation/#domain-whois
     */
    public function info($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/get/info", $params);

        return $json;
    }

    /**
     * Register Domain
     * @see https://developer.irsfa.id/documentation/#register-domain
     */
    public function register($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/create", $params);

        return $json;
    }

    /**
     * Renew Domain
     * @see https://developer.irsfa.id/documentation/#renew-domain
     */
    public function renew($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/renew", $params);

        return $json;
    }
    
    /**
     * Transfer Domain
     * @see https://developer.irsfa.id/documentation/#transfer-domain
     */
    public function transfer($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/transfer", $params);

        return $json;
    }
    
    /**
     * Restore Domain
     * @see https://developer.irsfa.id/documentation/#restore-domain
     */
    public function restore($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/restore", $params);

        return $json;
    }
    
    /**
     * Toogle Domain Lock
     * @see https://developer.irsfa.id/documentation/#toogle-domain-lock
     */
    public function lock($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/togel/lock", $params);

        return $json;
    }
    
    /**
     * Get Epp Code
     * @see https://developer.irsfa.id/documentation/#get-epp-code
     */
    public function getEpp($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/get/eppcode", $params);

        return $json;
    }
    
    /**
     * Upload Document Domain Terms
     * @see https://developer.irsfa.id/documentation/#upload-document-domain-terms
     */
    public function uploadDocument($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/domain/upload/terms", $params);

        return $json;
    }
}
