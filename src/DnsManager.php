<?php

namespace Cdvedia\Irsfa;

class DnsManager extends AbstractClass
{
    /**
     * Create DNS Manager
     * @see https://developer.irsfa.id/documentation/#create-dns-manager
     */
    public function create($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/dnsmanagerv2/create", $params);

        return $json;
    }
    
    /**
     * Add Record DNS Manager
     * @see https://developer.irsfa.id/documentation/#add-record-dns-manager
     */
    public function addRecord($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/dnsmanagerv2/add", $params);

        return $json;
    }
    
    /**
     * Update DNS Manager
     * @see https://developer.irsfa.id/documentation/#update-dns-manager
     */
    public function update($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/dnsmanagerv2/update", $params);

        return $json;
    }

    /**
     * Delete DNS Manager
     * @see https://developer.irsfa.id/documentation/#delete-dns-manager
     */
    public function delete($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/dnsmanagerv2/delete", $params);

        return $json;
    }

    /**
     * Terminate DNS Manager
     * @see https://developer.irsfa.id/documentation/#terminate-dns-manager
     */
    public function terminate($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/dnsmanagerv2/terminate", $params);

        return $json;
    }

    /**
     * List DNS Manager
     * @see https://developer.irsfa.id/documentation/#list-dns-manager
     */
    public function list($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/dnsmanagerv2/list", $params);

        return $json;
    }
}
