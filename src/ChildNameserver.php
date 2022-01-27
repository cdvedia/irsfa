<?php

namespace Cdvedia\Irsfa;

class ChildNameserver
{
    use Traits\AuthorizationRequest;

    /**
     * Register Child Nameserver
     * @see https://developer.irsfa.id/documentation/?php#register-child-nameserver
     */
    public function create($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/child/nameserver/create", $params);

        return $json;
    }

    /**
     * Update Child Nameserver
     * @see https://developer.irsfa.id/documentation/?php#update-child-nameserver
     */
    public function update($params = [])
    {
        $json = $this->makeAuthorizationRequest("put", "/rest/v2/child/nameserver/update", $params);

        return $json;
    }

    /**
     * Delete Child Nameserver
     * @see https://developer.irsfa.id/documentation/?php#delete-child-nameserver
     */
    public function delete($params = [])
    {
        $json = $this->makeAuthorizationRequest("put", "/rest/v2/child/nameserver/delete", $params);

        return $json;
    }
}
